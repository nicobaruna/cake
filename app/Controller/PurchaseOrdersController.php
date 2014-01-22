<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseOrders Controller
 *
 * @property PurchaseOrder $PurchaseOrder
 * @property PaginatorComponent $Paginator
 */
class PurchaseOrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->loadModel('PurchaseRequest');
		$this->loadModel('Stock');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PurchaseOrder->recursive = 0;
		$this->set('purchaseOrders', $this->Paginator->paginate('PurchaseRequest',array(
			'PurchaseRequest.status' => 'draft',
		)));
	}
	
	public function getAll() {
		$this->PurchaseOrder->recursive = 0;
		$this->set('purchaseOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PurchaseOrder->recursive =2;
		if (!$this->PurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$options = array('conditions' => array('PurchaseOrder.' . $this->PurchaseOrder->primaryKey => $id));
		$this->set('purchaseOrder', $this->PurchaseOrder->find('first', $options));
	}
	
	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PurchaseOrder->create();
			if ($this->PurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		}
		$users = $this->PurchaseOrder->User->find('list');
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
		if (!$this->PurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseOrder.' . $this->PurchaseOrder->primaryKey => $id));
			$this->request->data = $this->PurchaseOrder->find('first', $options);
		}

		$suppliers = $this->PurchaseOrder->Supplier->find('list');
		$users = $this->PurchaseOrder->User->find('list');
		
		$bigUnits = $this->Stock->BigUnit->find('list');
		$stocks = $this->Stock->find('list');
		
		$this->set(compact('suppliers', 'users','stocks','bigUnits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PurchaseOrder->id = $id;
		if (!$this->PurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PurchaseOrder->delete()) {
			$this->Session->setFlash(__('The purchase order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The purchase order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
