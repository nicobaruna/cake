<?php
App::uses('AppController', 'Controller');
/**
 * FixedPurchaseOrders Controller
 *
 * @property FixedPurchaseOrder $FixedPurchaseOrder
 * @property PaginatorComponent $Paginator
 */
class FixedPurchaseOrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->loadModel('GrNote');
		$this->loadModel('Stock');
	}

/**
 * index method
 *
 * @return void
 */
	public function index($request = NULL) {
		$this->FixedPurchaseOrder->recursive = 1;
		$FixedPurchaseOrders = $this->Paginator->paginate('GrNote',array(
			'GrNote.status' => 'draft',
		));
		if ($this->request->is('post') && $request == NULL) {
			$FixedPurchaseOrders = $this->findRequest($this->request->data,'GrNote');
		}
		$this->set('fixedPurchaseOrders', $FixedPurchaseOrders);
		return $FixedPurchaseOrders;
	}
	
	public function getAll($request = NULL) {
		$this->FixedPurchaseOrder->recursive = 0;
		$FixedPurchaseOrder = $this->Paginator->paginate();
		if ($this->request->is('post') && $request == NULL) {
			$FixedPurchaseOrder = $this->find($this->request->data);
		}
		$this->set('fixedPurchaseOrders', $FixedPurchaseOrder);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FixedPurchaseOrder->recursive = 2;
		if (!$this->FixedPurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid fixed purchase order'));
		}
		$options = array('conditions' => array('FixedPurchaseOrder.' . $this->FixedPurchaseOrder->primaryKey => $id));
		$this->set('fixedPurchaseOrder', $this->FixedPurchaseOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FixedPurchaseOrder->create();
			if ($this->FixedPurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The fixed purchase order has been saved.'));
				return $this->redirect(array('action' => 'getAll'));
			} else {
				$this->Session->setFlash(__('The fixed purchase order could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->FixedPurchaseOrder->Supplier->find('list');
		$users = $this->FixedPurchaseOrder->User->find('list');
		$this->set(compact('suppliers', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FixedPurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid fixed purchase order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FixedPurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The fixed purchase order has been saved.'));
				return $this->redirect(array('action' => 'getAll'));
			} else {
				$this->Session->setFlash(__('The fixed purchase order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FixedPurchaseOrder.' . $this->FixedPurchaseOrder->primaryKey => $id));
			$this->request->data = $this->FixedPurchaseOrder->find('first', $options);
		}
		$suppliers = $this->FixedPurchaseOrder->Supplier->find('list');
		$users = $this->FixedPurchaseOrder->User->find('list');
		$this->set(compact('suppliers', 'users'));
	}
	
	public function pushToWareHouse($data){
		foreach ($data['TrFixPurchaseOrder'] as $item) {
			$bigUnit = $this->Stock->BigUnit->find('first',array('conditions'=>array('BigUnit.id'=>$item['big_unit_id'])));
			var_dump($bigUnit);
			$records[]['Stock'] = array(
				'id' => $item['stock_id'],
				'qty' => $bigUnit['Stock']['qty'] + ($item['qty'] * $bigUnit['BigUnit']['equivalent'])
			);
		}
		
		//var_dump($records); exit;
		
		if($this->Stock->saveMany($records)){
			$this->Session->setFlash(__('Berhasil'));
			//exit;
		}else{
			echo "error tuh"; 
		}
		
		//save to warehouse histories
		//var_dump($records); exit;
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FixedPurchaseOrder->id = $id;
		if (!$this->FixedPurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid fixed purchase order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FixedPurchaseOrder->delete()) {
			$this->Session->setFlash(__('The fixed purchase order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fixed purchase order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'getAll'));
	}}
