<?php
App::uses('Slip', 'Model');

/**
 * Slip Test Case
 *
 */
class SlipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.slip',
		'app.staff',
		'app.journal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Slip = ClassRegistry::init('Slip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Slip);

		parent::tearDown();
	}

}
