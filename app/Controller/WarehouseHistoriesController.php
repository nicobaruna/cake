<?php
App::uses('AppController', 'Controller');
/**
 * WarehouseHistories Controller
 *
 * @property WarehouseHistory $WarehouseHistory
 * @property PaginatorComponent $Paginator
 */
class WarehouseHistoriesController extends AppController {

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
		$this->WarehouseHistory->recursive = 0;
		$this->set('warehouseHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WarehouseHistory->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse history'));
		}
		$options = array('conditions' => array('WarehouseHistory.' . $this->WarehouseHistory->primaryKey => $id));
		$this->set('warehouseHistory', $this->WarehouseHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WarehouseHistory->create();
			if ($this->WarehouseHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse history could not be saved. Please, try again.'));
			}
		}
		$stocks = $this->WarehouseHistory->Stock->find('list');
		$warehouses = $this->WarehouseHistory->Warehouse->find('list');
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
		if (!$this->WarehouseHistory->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WarehouseHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The warehouse history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The warehouse history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WarehouseHistory.' . $this->WarehouseHistory->primaryKey => $id));
			$this->request->data = $this->WarehouseHistory->find('first', $options);
		}
		$stocks = $this->WarehouseHistory->Stock->find('list');
		$warehouses = $this->WarehouseHistory->Warehouse->find('list');
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
		$this->WarehouseHistory->id = $id;
		if (!$this->WarehouseHistory->exists()) {
			throw new NotFoundException(__('Invalid warehouse history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WarehouseHistory->delete()) {
			$this->Session->setFlash(__('The warehouse history has been deleted.'));
		} else {
			$this->Session->setFlash(__('The warehouse history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
