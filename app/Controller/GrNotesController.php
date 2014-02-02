<?php
App::uses('AppController', 'Controller');
/**
 * GrNotes Controller
 *
 * @property GrNote $GrNote
 * @property PaginatorComponent $Paginator
 */
class GrNotesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GrNote->recursive = 0;
		$grnotes = $this->Paginator->paginate('PurchaseOrder',array('PurchaseOrder.status'=>'draft'));
		$this->set('grNotes', $grnotes);
		return $grnotes;
	}
	
	public function getAll() {
		$this->PurchaseOrder->recursive = 0;
		$this->set('grNotes', $this->Paginator->paginate());
	}
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->loadModel('PurchaseOrder');
		$this->loadModel('Stock');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GrNote->recursive = 2;
		if (!$this->GrNote->exists($id)) {
			throw new NotFoundException(__('Invalid gr note'));
		}
		$options = array('conditions' => array('GrNote.' . $this->GrNote->primaryKey => $id));
		$this->set('grNote', $this->GrNote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrNote->create();
			if ($this->GrNote->save($this->request->data)) {
				$this->Session->setFlash(__('The gr note has been saved.'));
				return $this->redirect(array('action' => 'getAll'));
			} else {
				$this->Session->setFlash(__('The gr note could not be saved. Please, try again.'));
			}
		}
		$users = $this->GrNote->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GrNote->exists($id)) {
			throw new NotFoundException(__('Invalid gr note'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GrNote->save($this->request->data)) {
				$this->Session->setFlash(__('The gr note has been saved.'));
				return $this->redirect(array('action' => 'getAll'));
			} else {
				$this->Session->setFlash(__('The gr note could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrNote.' . $this->GrNote->primaryKey => $id));
			$this->request->data = $this->GrNote->find('first', $options);
		}
		$suppliers = $this->GrNote->Supplier->find('list');
		$users = $this->GrNote->User->find('list');
		
		$bigUnits = $this->Stock->BigUnit->find('list');
		$stocks = $this->Stock->find('list');
		
		$this->set(compact('suppliers', 'users','stocks','bigUnits','warehouses'));
	}
	
	public function pushToWareHouse($data){
		foreach ($data['TrGrnote'] as $item) {
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
		$this->GrNote->id = $id;
		if (!$this->GrNote->exists()) {
			throw new NotFoundException(__('Invalid gr note'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GrNote->delete()) {
			$this->Session->setFlash(__('The gr note has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gr note could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}


