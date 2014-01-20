<?php
App::uses('Supplier', 'Model');

/**
 * Supplier Test Case
 *
 */
class SupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier',
		'app.purchase_request',
		'app.stock',
		'app.unit',
		'app.warehouse',
		'app.tr_request',
		'app.purchase_order',
		'app.gr_note',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supplier = ClassRegistry::init('Supplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supplier);

		parent::tearDown();
	}

}
