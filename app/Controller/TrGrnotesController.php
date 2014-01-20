<?php
App::uses('AppController', 'Controller');
/**
 * TrGrnotes Controller
 *
 * @property TrGrnote $TrGrnote
 * @property PaginatorComponent $Paginator
 */
class TrGrnotesController extends AppController {

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
		$this->TrGrnote->recursive = 0;
		$this->set('trGrnotes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrGrnote->exists($id)) {
			throw new NotFoundException(__('Invalid tr grnote'));
		}
		$options = array('conditions' => array('TrGrnote.' . $this->TrGrnote->primaryKey => $id));
		$this->set('trGrnote', $this->TrGrnote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrGrnote->create();
			if ($this->TrGrnote->save($this->request->data)) {
				$this->Session->setFlash(__('The tr grnote has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr grnote could not be saved. Please, try again.'));
			}
		}
		$grNotes = $this->TrGrnote->GrNote->find('list');
		$stocks = $this->TrGrnote->Stock->find('list');
		$this->set(compact('grNotes', 'stocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrGrnote->exists($id)) {
			throw new NotFoundException(__('Invalid tr grnote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrGrnote->save($this->request->data)) {
				$this->Session->setFlash(__('The tr grnote has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tr grnote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrGrnote.' . $this->TrGrnote->primaryKey => $id));
			$this->request->data = $this->TrGrnote->find('first', $options);
		}
		$grNotes = $this->TrGrnote->GrNote->find('list');
		$stocks = $this->TrGrnote->Stock->find('list');
		$this->set(compact('grNotes', 'stocks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrGrnote->id = $id;
		if (!$this->TrGrnote->exists()) {
			throw new NotFoundException(__('Invalid tr grnote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrGrnote->delete()) {
			$this->Session->setFlash(__('The tr grnote has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tr grnote could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
