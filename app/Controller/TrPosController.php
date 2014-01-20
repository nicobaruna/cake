<?php
App::uses('AppController', 'Controller');
/**
 * TrPos Controller
 *
 * @property TrPo $TrPo
 * @property PaginatorComponent $Paginator
 */
class TrPosController extends AppController {

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
		$this->TrPo->recursive = 0;
		$this->set('trPos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrPo->exists($id)) {
			throw new NotFoundException(__('Invalid tr po'));
		}
		$options = array('conditions' => array('TrPo.' . $this->TrPo->primaryKey => $id));
		$this->set('trPo', $this->TrPo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrPo->create();
			if ($this->TrPo->save($this->request->data)) {
				$this->Session->setFlash(__('The tr po has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr po could not be saved. Please, try again.'));
			}
		}
		$purchaseOrders = $this->TrPo->PurchaseOrder->find('list');
		$stocks = $this->TrPo->Stock->find('list');
		$this->set(compact('purchaseOrders', 'stocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrPo->exists($id)) {
			throw new NotFoundException(__('Invalid tr po'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrPo->save($this->request->data)) {
				$this->Session->setFlash(__('The tr po has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr po could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrPo.' . $this->TrPo->primaryKey => $id));
			$this->request->data = $this->TrPo->find('first', $options);
		}
		$purchaseOrders = $this->TrPo->PurchaseOrder->find('list');
		$stocks = $this->TrPo->Stock->find('list');
		$this->set(compact('purchaseOrders', 'stocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrPo->id = $id;
		if (!$this->TrPo->exists()) {
			throw new NotFoundException(__('Invalid tr po'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrPo->delete()) {
			$this->Session->setFlash(__('The tr po has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tr po could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
