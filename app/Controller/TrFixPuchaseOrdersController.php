<?php
App::uses('AppController', 'Controller');
/**
 * TrFixPuchaseOrders Controller
 *
 * @property TrFixPuchaseOrder $TrFixPuchaseOrder
 * @property PaginatorComponent $Paginator
 */
class TrFixPuchaseOrdersController extends AppController {

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
		$this->TrFixPuchaseOrder->recursive = 0;
		$this->set('trFixPuchaseOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrFixPuchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid tr fix puchase order'));
		}
		$options = array('conditions' => array('TrFixPuchaseOrder.' . $this->TrFixPuchaseOrder->primaryKey => $id));
		$this->set('trFixPuchaseOrder', $this->TrFixPuchaseOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrFixPuchaseOrder->create();
			if ($this->TrFixPuchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The tr fix puchase order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr fix puchase order could not be saved. Please, try again.'));
			}
		}
		$fixedPuchaseOrders = $this->TrFixPuchaseOrder->FixedPuchaseOrder->find('list');
		$stocks = $this->TrFixPuchaseOrder->Stock->find('list');
		$this->set(compact('fixedPuchaseOrders', 'stocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrFixPuchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid tr fix puchase order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrFixPuchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The tr fix puchase order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr fix puchase order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrFixPuchaseOrder.' . $this->TrFixPuchaseOrder->primaryKey => $id));
			$this->request->data = $this->TrFixPuchaseOrder->find('first', $options);
		}
		$fixedPuchaseOrders = $this->TrFixPuchaseOrder->FixedPuchaseOrder->find('list');
		$stocks = $this->TrFixPuchaseOrder->Stock->find('list');
		$this->set(compact('fixedPuchaseOrders', 'stocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrFixPuchaseOrder->id = $id;
		if (!$this->TrFixPuchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid tr fix puchase order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrFixPuchaseOrder->delete()) {
			$this->Session->setFlash(__('The tr fix puchase order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tr fix puchase order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
