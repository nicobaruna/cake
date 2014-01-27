<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	//public $actsAs = array('Search.Searchable');
	
	public $filterArgs = array(
        'supllier' => array('type' => 'like' , 'field' => 'Supplier.name'),
        'status' => array('type' => 'value'),
        'jangka_pembayaran' => array('type' => 'value'),
        'date' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'date BETWEEN ? AND ?'),
        
    );
	
	
	public function findByTags($data = array()) {
        $this->Tagged->Behaviors->attach('Containable', array('autoFields' => false));
        $this->Tagged->Behaviors->attach('Search.Searchable');
        $query = $this->Tagged->getQuery('all', array(
            'conditions' => array('Tag.name'  => $data['tags']),
            'fields' => array('foreign_key'),
            'contain' => array('Tag')
        ));
        return $query;
    }

    public function orConditions($data = array()) {
        $filter = $data['filter'];
        $cond = array(
            'OR' => array(
                $this->alias . '.title LIKE' => '%' . $filter . '%',
                $this->alias . '.body LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
	
	
	public function beforFilter(){
		
	}
}
