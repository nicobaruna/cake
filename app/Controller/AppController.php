<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
	    'DebugKit.Toolbar',
	    'RequestHandler',
        'Session',
        'Acl',
        'Search.Prg',
        'Auth' => array(
           
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );
	

    public $presetVars = true; // using the model configuration

    
	
	
	public function getLastQuery() {
	  $dbo = $this->getDatasource();
	  $logs = $dbo->getLog();
	  $lastLog = end($logs['log']);
	  return $lastLog['query'];
	}

    public function beforeFilter() {
        //$this->Auth->allow('index', 'view');
		$this->loadModel('Aro');
		
		//$this->initAcl();
		//$this->setPermission();
    }
	
	function beforeRender(){
	    if ($this->Session->check('Message.flash')) {
	        $flash = $this->Session->read('Message.flash');
	
	        if ($flash['element'] == 'default') {
	            $flash['element'] = 'flash';
	            $this->Session->write('Message.flash', $flash);
	        }
	    }
	}
	
	public function find($data) {

		$model = $this->modelClass;
		$conditions = array(
        	'Supplier.name LIKE' =>'%'.$data[$model]['supplier'].'%',
        	$model.'.jangka_pembayaran LIKE' =>'%'.$data[$model]['jangka_pembayaran'].'%',
        	$model.'.number LIKE' =>'%'.trim($data[$model]['number']).'%',
        	$model.'.status LIKE' =>'%'.$data[$model]['status'].'%'
        	
        	);
		if(!empty($data[$model]['date_from']) && !empty($data[$model]['date_from'])){
			$conditions[$model.'.date  BETWEEN ? AND ?'] =  array( $data[$model]['date_from'], $data[$model]['date_to']);
		}
        $this->Paginator->settings['conditions'] = array(
        	'AND' => $conditions
		);
        return $this->Paginator->paginate();
    }
	
	public function findRequest($data,$prevModel) {
		$model = $this->modelClass;
		$conditions = array(
        	'Supplier.name LIKE' =>'%'.$data[$model]['supplier'].'%',
        	$prevModel.'.number LIKE' =>'%'.trim($data[$model]['number']).'%',
        	$prevModel.'.jangka_pembayaran LIKE' =>'%'.$data[$model]['jangka_pembayaran'].'%',
        	'User.username LIKE' =>'%'.$data[$model]['username'].'%',
        	
        	);
		if(!empty($data[$model]['date_from']) && !empty($data[$model]['date_from'])){
			$conditions[$prevModel.'.date  BETWEEN ? AND ?'] =  array( $data[$model]['date_from'], $data[$model]['date_to']);
		}
        $this->Paginator->settings['conditions'] = array(
        	'AND' => $conditions
		);
        return $this->Paginator->paginate($prevModel);
    }
	
	public function preview($modelTo,$modelFrom,$id = null) {
		//echo $modelFrom; exit;
		if (!$this->$modelFrom->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
	
		$warehouses = NULL;
		if($this->request->is(array('post', 'put' ))) {
			$docNumber = $this->request->data[$modelTo]['number'];
			unset($this->request->data[$modelTo]['number']);
			//var_dump($this->request->data); exit;
			
			if ($this->$modelTo->saveAssociated($this->request->data,array('deep'=>TRUE))) {
			$dataPR = array(
			'id' => $id,
			$this->$modelFrom->belongsTo[$modelTo]['foreignKey'] => $this->$modelTo->getLastInsertId(),
			'status' => 'posted',
			);
			//var_dump($dataPR); exit;
			
			if($this->$modelFrom->save($dataPR)){
				$this->Session->setFlash(__('The purchase order has been saved.'));
				if($modelTo == 'FixedPurchaseOrder'){
					$this->pushToWareHouse($this->request->data);
				}
				
				$this->Session->setFlash(__('Dokumen '.$modelFrom.' dengan nomor '.$docNumber.' Telah dikonfirmasi untuk selanjutnya diajukan menjadi '.$modelTo));
				return $this->redirect(array('action' => 'getAll'));
			}
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
			
			
		} else {
			
			switch($modelTo){
				case 'PurchaseOrder' : $trTableTo = 'TrPo';
									   $trTableFrom = 'TrRequest';
									   break;
				case 'GrNote' :  $trTableTo = 'TrGrnote';
							     $trTableFrom = 'TrPo';
								 $wareHouses = $this->Stock->TrWarehouse->Warehouse->find('all');
								 foreach($wareHouses as $key=>$val){
								 	$warehouses[$val['Warehouse']['id']] = $val['Warehouse']['name'];
								 }
								 break;
				case 'FixedPurchaseOrder' :  $trTableTo = 'TrFixPurchaseOrder';
											 $trTableFrom = 'TrGrnote';
											 
											 break;
			}
			
			$options = array('conditions' => array($modelFrom.'.' . $this->$modelFrom->primaryKey => $id));
			$data = $this->$modelFrom->find('first', $options);
			$this->request->data = $data;
			$this->request->data[$modelTo] = $data[$modelFrom];
			$this->request->data[$trTableTo] = $data[$trTableFrom];
		}
		$suppliers = $this->$modelFrom->Supplier->find('list');
		$users = $this->$modelFrom->User->find('list');
		
		$bigUnits = $this->Stock->BigUnit->find('list');
		$stocks = $this->Stock->find('list');
		
		$this->set(compact('suppliers', 'users','stocks','bigUnits','warehouses'));
	}
}

