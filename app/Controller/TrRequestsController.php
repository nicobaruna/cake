<?php
App::uses('AppController', 'Controller');
/**
 * TrRequests Controller
 *
 * @property TrRequest $TrRequest
 * @property PaginatorComponent $Paginator
 */
class TrRequestsController extends AppController {

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
		$this->TrRequest->recursive = 0;
		$this->set('trRequests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrRequest->exists($id)) {
			throw new NotFoundException(__('Invalid tr request'));
		}
		$options = array('conditions' => array('TrRequest.' . $this->TrRequest->primaryKey => $id));
		$this->set('trRequest', $this->TrRequest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrRequest->create();
			if ($this->TrRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The tr request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr request could not be saved. Please, try again.'));
			}
		}
		$purchaseRequests = $this->TrRequest->PurchaseRequest->find('list');
		$stocks = $this->TrRequest->Stock->find('list');
		$purchaseOrders = $this->TrRequest->PurchaseOrder->find('list');
		$grNotes = $this->TrRequest->GrNote->find('list');
		$this->set(compact('purchaseRequests', 'stocks', 'purchaseOrders', 'grNotes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrRequest->exists($id)) {
			throw new NotFoundException(__('Invalid tr request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The tr request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrRequest.' . $this->TrRequest->primaryKey => $id));
			$this->request->data = $this->TrRequest->find('first', $options);
		}
		$purchaseRequests = $this->TrRequest->PurchaseRequest->find('list');
		$stocks = $this->TrRequest->Stock->find('list');
		$purchaseOrders = $this->TrRequest->PurchaseOrder->find('list');
		$grNotes = $this->TrRequest->GrNote->find('list');
		$this->set(compact('purchaseRequests', 'stocks', 'purchaseOrders', 'grNotes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrRequest->id = $id;
		if (!$this->TrRequest->exists()) {
			throw new NotFoundException(__('Invalid tr request'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrRequest->delete()) {
			$this->Session->setFlash(__('The tr request has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tr request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
