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
        'Session',
        'Acl',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );
	
	
	public function getLastQuery() {
	  $dbo = $this->getDatasource();
	  $logs = $dbo->getLog();
	  $lastLog = end($logs['log']);
	  return $lastLog['query'];
	}

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
		$this->loadModel('Aro');
		
		//$this->initAcl();
		//$this->setPermission();
    }
	
	public function preview($modelTo,$modelFrom,$id = null) {
		//echo $modelFrom; exit;
		if (!$this->$modelFrom->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
	
		$warehouses = NULL;
		if($this->request->is(array('post', 'put' ))) {
			var_dump($this->request->data); exit;
			
			if ($this->$modelTo->saveAssociated($this->request->data,array('deep'=>TRUE))) {
			$dataPR = array(
			'id' => $id,
			$this->$modelFrom->belongsTo[$modelTo]['foreignKey'] => $this->$modelTo->getLastInsertId(),
			'status' => 'posted',
			);
			//var_dump($dataPR); exit;
			if($this->$modelFrom->save($dataPR)){
				$this->Session->setFlash(__('The purchase order has been saved.'));
				if($modelTo == 'GrNote'){
					$this->pushToWareHouse($this->request->data);
				}
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

