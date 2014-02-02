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
	public function index() {
		$this->FixedPurchaseOrder->recursive = 1;
		$this->set('fixedPurchaseOrders', $this->Paginator->paginate('GrNote',array('GrNote.status'=>'draft')));
	}
	
	public function getAll() {
		$this->FixedPurchaseOrder->recursive = 0;
		$this->set('fixedPurchaseOrders', $this->Paginator->paginate());
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
