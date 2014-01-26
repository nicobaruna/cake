<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $js  = array( 'plugins/validationengine/languages/jquery.validationEngine-en',
									 'plugins/validationengine/jquery.validationEngine',
									 'plugins/maskedinput/jquery.maskedinput.min',
									 'plugins/stepy/jquery.stepy.min'	
									 );
	
	
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this -> Auth -> allow('add', 'logout','edit','view','setPermission');
		
		
		
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> User -> recursive = 0;
		$this -> set('users', $this -> Paginator -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this -> User -> exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this -> User -> primaryKey => $id));
		$this -> set('user', $this -> User -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = 'login';
		if ($this -> request -> is('post')) {
			$this -> User -> create();
			$this->request->data['User']['role'] = $this->request->data['Aro']['role'];
			if ($this -> User -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The user has been saved.'));
				$arosData = array(
					'Aro'=>array(
						'alias' => $this->request->data['User']['username'],
						'parent_id' => $this->request->data['Aro']['role'],
						'model' => 'User',
						'foreign_key' => $this->User->getLastInsertId()
					)
				);
				if($this->Aro->save($arosData)){
					return $this -> redirect(array('action' => 'index'));
				}else{
					$this -> Session -> setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$this -> Session -> setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		
		$roles = $this->Aro->find('list',array('fields'=>array(
			'id' ,'alias'
		),'conditions'=>array(
			'parent_id' =>NULL
		)));
		
		$this->set(compact('roles'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> User -> exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			$this->request->data['User']['role'] = $this->request->data['Aro']['role'];
			if ($this -> User -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The user has been saved.'));
				
				//get id
				$result = $this->Aro->find('first',array(
					'conditions' => array(
						'Aro.foreign_key' => $this->request->data['User']['id']
					)
				));
				
				$arosData = array(
					'Aro'=>array(
						'id' => $result['Aro']['id'],
						'alias' => $this->request->data['User']['username'],
						'parent_id' => $this->request->data['Aro']['role'],
						'model' => 'User',
						'foreign_key' => $this->request->data['User']['id']
					)
				);
				if($this->Aro->save($arosData)){
					return $this -> redirect(array('action' => 'index'));
				}else{
					$this -> Session -> setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$this -> Session -> setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this -> User -> primaryKey => $id));
			$aroOptions = array('conditions' => array(
				'Aro.foreign_key' => $id
			));
			$this -> request -> data = $this -> User -> find('first', $options);
			$aro = $this->Aro->find('first',$aroOptions);
			$this->request->data['Aro'] = $aro['Aro'];
		}
		$roles = $this->Aro->find('list',array('fields'=>array(
			'id' ,'alias'
		),'conditions'=>array(
			'parent_id' =>NULL
		)));
		$this->set(compact('roles'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this -> User -> id = $id;
		if (!$this -> User -> exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> User -> delete()) {
			$this -> Session -> setFlash(__('The user has been deleted.'));
		} else {
			$this -> Session -> setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this -> redirect(array('action' => 'index'));
	}

	
	public function getRedirectUrl(){
		//ger Session
		$session = $this->Session->read('Auth.User.Role');
		$this->loadModel('Aro');
		//get group name
		$group = $this->Aro->findByid($session);
		switch ($group) {
			case 'admin':
				$path = array('controller'=>'pages','action'=>'home');
				break;
			case 'gudang' :
				$path = array('controller'=>'PurchaseRequest','action'=>'index');
				break;
			case 'analis' :
				$path = array('controller'=>'PurchaseOrder','action'=>'index');
			case 'checkers' :
				$path = array('controller'=>'GrNotes','action'=>'index');
			default:
				$path = array('controller'=>'pages','action'=>'home');
				break;
		}
		
		return $path;
		
	}

	public function login() {
		$this->layout = 'login';
		$this->set('jsIncludes', $this->js);
		if ($this -> request -> is('post')) {
			
			if ($this -> Auth -> login()) {
				
				$redirect = $this->getRedirectUrl();
				
				return $this -> redirect($redirect);
			}
		
			$this -> Session -> setFlash(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		return $this -> redirect($this -> Auth -> logout());
	}
	
	function install(){       
    /*if($this->Acl->Aro->findByAlias("Admin")){   
        $this->redirect('/');   
    } */  
    $aro = new aro();   
   
    $aro->create();   
    $aro->save(array(   
        'model' => 'User',   
        'foreign_key' => null,   
        'parent_id' => null,   
        'alias' => 'Super'   
    ));   
   
    $aro->create();   
    $aro->save(array(   
        'model' => 'User',   
        'foreign_key' => null,   
        'parent_id' => null,   
        'alias' => 'Admin'   
    ));   
   
    $aro->create();   
    $aro->save(array(   
        'model' => 'User',   
        'foreign_key' => null,   
        'parent_id' => null,   
        'alias' => 'User'   
    ));   
   
    $aro->create();   
    $aro->save(array(   
        'model' => 'User',   
        'foreign_key' => null,   
        'parent_id' => null,   
        'alias' => 'Suspended'   
    ));   
   
    $aco = new Aco();   
    $aco->create();   
    $aco->save(array(   
        'model' => 'User',   
        'foreign_key' => null,   
        'parent_id' => null,   
        'alias' => 'User'   
    ));   
   
    $aco->create();   
    $aco->save(array(   
       'model' => 'Post',   
       'foreign_key' => null,   
       'parent_id' => null,   
       'alias' => 'Post'   
    ));   
   
    $this->Acl->allow('Super', 'Post', '*');   
    $this->Acl->allow('Super', 'User', '*');   
    $this->Acl->allow('Admin', 'Post', '*');   
    $this->Acl->allow('User', 'Post', array('create'));   
}  

}
