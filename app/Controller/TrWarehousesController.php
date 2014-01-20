<?php
App::uses('AppController', 'Controller');
/**
 * TrWarehouses Controller
 *
 * @property TrWarehouse $TrWarehouse
 * @property PaginatorComponent $Paginator
 */
class TrWarehousesController extends AppController {

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
		$this->TrWarehouse->recursive = 0;
		$this->set('trWarehouses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrWarehouse->exists($id)) {
			throw new NotFoundException(__('Invalid tr warehouse'));
		}
		$options = array('conditions' => array('TrWarehouse.' . $this->TrWarehouse->primaryKey => $id));
		$this->set('trWarehouse', $this->TrWarehouse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrWarehouse->create();
			if ($this->TrWarehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The tr warehouse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr warehouse could not be saved. Please, try again.'));
			}
		}
		$stocks = $this->TrWarehouse->Stock->find('list');
		$warehouses = $this->TrWarehouse->Warehouse->find('list');
		$this->set(compact('stocks', 'warehouses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrWarehouse->exists($id)) {
			throw new NotFoundException(__('Invalid tr warehouse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrWarehouse->save($this->request->data)) {
				$this->Session->setFlash(__('The tr warehouse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr warehouse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrWarehouse.' . $this->TrWarehouse->primaryKey => $id));
			$this->request->data = $this->TrWarehouse->find('first', $options);
		}
		$stocks = $this->TrWarehouse->Stock->find('list');
		$warehouses = $this->TrWarehouse->Warehouse->find('list');
		$this->set(compact('stocks', 'warehouses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrWarehouse->id = $id;
		if (!$this->TrWarehouse->exists()) {
			throw new NotFoundException(__('Invalid tr warehouse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrWarehouse->delete()) {
			$this->Session->setFlash(__('The tr warehouse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tr warehouse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
