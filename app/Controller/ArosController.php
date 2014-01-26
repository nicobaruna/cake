<?php
App::uses('AppController', 'Controller');
/**
 * Aros Controller
 *
 * @property Aro $Aro
 * @property PaginatorComponent $Paginator
 */
class ArosController extends AppController {

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
		$this->Aro->recursive = 0;
		$this->set('aros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aro->exists($id)) {
			throw new NotFoundException(__('Invalid aro'));
		}
		$options = array('conditions' => array('Aro.' . $this->Aro->primaryKey => $id));
		$this->set('aro', $this->Aro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aro->create();
			if ($this->Aro->save($this->request->data)) {
				$this->Session->setFlash(__('The aro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.'));
			}
		}
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('acos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aro->exists($id)) {
			throw new NotFoundException(__('Invalid aro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aro->save($this->request->data)) {
				$this->Session->setFlash(__('The aro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aro.' . $this->Aro->primaryKey => $id));
			$this->request->data = $this->Aro->find('first', $options);
		}
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('acos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aro->id = $id;
		if (!$this->Aro->exists()) {
			throw new NotFoundException(__('Invalid aro'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aro->delete()) {
			$this->Session->setFlash(__('The aro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
