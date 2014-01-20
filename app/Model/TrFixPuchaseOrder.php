<?php
App::uses('AppModel', 'Model');
/**
 * TrFixPuchaseOrder Model
 *
 * @property FixedPuchaseOrder $FixedPuchaseOrder
 * @property Stock $Stock
 * @property BigUnit $BigUnit
 */
class TrFixPuchaseOrder extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fixed_puchase_order_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'harga' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'big_unit_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FixedPuchaseOrder' => array(
			'className' => 'FixedPuchaseOrder',
			'foreignKey' => 'fixed_puchase_order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'stock_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BigUnit' => array(
			'className' => 'BigUnit',
			'foreignKey' => 'big_unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
