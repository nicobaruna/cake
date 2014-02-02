<?php
App::uses('AppController', 'Controller');
/**
 * StockEditHistories Controller
 *
 * @property StockEditHistory $StockEditHistory
 * @property PaginatorComponent $Paginator
 */
class StockEditHistoriesController extends AppController {

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
		$this->StockEditHistory->recursive = 0;
		$this->set('stockEditHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StockEditHistory->exists($id)) {
			throw new NotFoundException(__('Invalid stock edit history'));
		}
		$options = array('conditions' => array('StockEditHistory.' . $this->StockEditHistory->primaryKey => $id));
		$this->set('stockEditHistory', $this->StockEditHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StockEditHistory->create();
			if ($this->StockEditHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The stock edit history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stock edit history could not be saved. Please, try again.'));
			}
		}
		$stocks = $this->StockEditHistory->Stock->find('list');
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
		if (!$this->StockEditHistory->exists($id)) {
			throw new NotFoundException(__('Invalid stock edit history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StockEditHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The stock edit history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stock edit history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StockEditHistory.' . $this->StockEditHistory->primaryKey => $id));
			$this->request->data = $this->StockEditHistory->find('first', $options);
		}
		$stocks = $this->StockEditHistory->Stock->find('list');
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
		$this->StockEditHistory->id = $id;
		if (!$this->StockEditHistory->exists()) {
			throw new NotFoundException(__('Invalid stock edit history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StockEditHistory->delete()) {
			$this->Session->setFlash(__('The stock edit history has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stock edit history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
