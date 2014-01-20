<?php
App::uses('AppController', 'Controller');
/**
 * BigUnits Controller
 *
 * @property BigUnit $BigUnit
 * @property PaginatorComponent $Paginator
 */
class BigUnitsController extends AppController {

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
		$this->BigUnit->recursive = 0;
		$this->set('bigUnits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BigUnit->exists($id)) {
			throw new NotFoundException(__('Invalid big unit'));
		}
		$options = array('conditions' => array('BigUnit.' . $this->BigUnit->primaryKey => $id));
		$this->set('bigUnit', $this->BigUnit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BigUnit->create();
			if ($this->BigUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The big unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The big unit could not be saved. Please, try again.'));
			}
		}
		$stocks = $this->BigUnit->Stock->find('list');
		$this->set(compact('stocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BigUnit->exists($id)) {
			throw new NotFoundException(__('Invalid big unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BigUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The big unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The big unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BigUnit.' . $this->BigUnit->primaryKey => $id));
			$this->request->data = $this->BigUnit->find('first', $options);
		}
		$stocks = $this->BigUnit->Stock->find('list');
		$this->set(compact('stocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BigUnit->id = $id;
		if (!$this->BigUnit->exists()) {
			throw new NotFoundException(__('Invalid big unit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BigUnit->delete()) {
			$this->Session->setFlash(__('The big unit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The big unit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
