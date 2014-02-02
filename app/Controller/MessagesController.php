<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 * @property PaginatorComponent $Paginator
 */
class MessagesController extends AppController {

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
		$this->Message->recursive = 2;
		 $this->Paginator->settings['conditions'] = array(
        'AND' => array(
        	'to' =>$this->Session->read('Auth.User.id'),
        	
        	)
		);
		$this->set(array('messages'=>$this->Paginator->paginate(),'tos'=>$this->Message->To->find('list',array('fields'=>array('id','username')))));
	}
	
	public function getMyMessages(){
		$id = $this->Session->read('Auth.User.id');
		//get records
		$messages = $this->Message->find('all',array(
			'conditions'=>array(
				'to'=>$id,
				'status' => NULL
			)
		));
		
		$this->set(array(
			'messages' => $messages,
			'_serialize' => array('messages')
		));
		
		return $messages;
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'blank';
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		//update
		$data = array('Message'=>array(
			'id' => $id,
			'status' => 1,
		));
		$this->Message->save($data);
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		if ($this->request->is('post') || $this->request->is('ajax')) {
			$this->Message->create();
			var_dump($this->request->data);
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved.'));
				echo "success";
				return $this->redirect(array('action' => 'index'));
			} else {
				
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
		/*$froms = $this->Message->From->find('list');
		$tos = $this->Message->To->find('list');
		
		$this->set(compact('froms', 'tos'));*/
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is(array('post', 'put','ajax'))) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$froms = $this->Message->From->find('list');
		$tos = $this->Message->To->find('list');
		$this->set(compact('froms', 'tos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('The message has been deleted.'));
		} else {
			$this->Session->setFlash(__('The message could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
