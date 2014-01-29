<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseRequests Controller
 *
 * @property PurchaseRequest $PurchaseRequest
 * @property PaginatorComponent $Paginator
 */
class PurchaseRequestsController extends AppController {

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
		$this->PurchaseRequest->recursive = 0;
		$purchaseRequests = $this->Paginator->paginate();
		if ($this->request->is('post')) {
			$purchaseRequests = $this->find($this->request->data);
		}
		$this->set('purchaseRequests', $purchaseRequests);
	}
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->loadModel('Stock');
	}
	
	public function find($data) {
        
		$model = $this->modelClass;
        $this->Paginator->settings['conditions'] = array(
        'AND' => array(
        	'Supplier.name LIKE' =>'%'.$data['PurchaseRequest']['supplier'].'%',
        	'PurchaseRequest.jangka_pembayaran LIKE' =>'%'.$data['PurchaseRequest']['jangka_pembayaran'].'%',
        	'PurchaseRequest.status LIKE' =>$data['PurchaseRequest']['status'],
        	)
		);
        return $this->Paginator->paginate();
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PurchaseRequest->recursive = 2;
		if (!$this->PurchaseRequest->exists($id)) {
			throw new NotFoundException(__('Invalid purchase request'));
		}
		$options = array('conditions' => array('PurchaseRequest.' . $this->PurchaseRequest->primaryKey => $id));
		$this->set('purchaseRequest', $this->PurchaseRequest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->PurchaseRequest->create();
			unset($this->PurchaseRequest->TrRequest->validate['purchase_request_id']);
			if ($this->PurchaseRequest->saveAssociated($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The purchase request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase request could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->PurchaseRequest->Supplier->find('list');
		$users = $this->PurchaseRequest->User->find('list');
		$purchaseOrders = $this->PurchaseRequest->PurchaseOrder->find('list');
		$bigUnits = $this->Stock->BigUnit->find('list');
		$stocks = $this->Stock->find('list');
		
		$this->set(compact('suppliers', 'users', 'purchaseOrders','stocks','bigUnits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PurchaseRequest->exists($id)) {
			throw new NotFoundException(__('Invalid purchase request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PurchaseRequest->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The purchase request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseRequest.' . $this->PurchaseRequest->primaryKey => $id));
			$this->request->data = $this->PurchaseRequest->find('first', $options);
		}
		$suppliers = $this->PurchaseRequest->Supplier->find('list');
		$users = $this->PurchaseRequest->User->find('list');
		$purchaseOrders = $this->PurchaseRequest->PurchaseOrder->find('list');
		$stocks = $this->Stock->find('list');
		$bigUnits = $this->Stock->BigUnit->find('list');
		$this->set(compact('suppliers', 'users', 'purchaseOrders','stocks','bigUnits'));
	
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PurchaseRequest->id = $id;
		if (!$this->PurchaseRequest->exists()) {
			throw new NotFoundException(__('Invalid purchase request'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PurchaseRequest->delete()) {
			$this->Session->setFlash(__('The purchase request has been deleted.'));
		} else {
			$this->Session->setFlash(__('The purchase request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
