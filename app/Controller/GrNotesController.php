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
	public function index($request = NULL) {
		$this->GrNote->recursive = 0;
		$GrNotes = $this->Paginator->paginate('PurchaseOrder',array(
			'PurchaseOrder.status' => 'draft',
		));
		if ($this->request->is('post') && $request == NULL) {
			$GrNotes = $this->findRequest($this->request->data,'PurchaseOrder');
		}
		$this->set('GrNotes',$GrNotes );
		return $GrNotes;
	}
	
	public function getAll() {
		$GrNotes = $this->Paginator->paginate();
		if ($this->request->is('post')) {
			$GrNotes = $this->find($this->request->data);
		}
		$this->set('GrNotes',$GrNotes );
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
	
	
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$controller='GrNotes',$action='getAll') {
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
		return $this->redirect(array('controller'=>$controller,'action'=>$action)) ;
	}}


