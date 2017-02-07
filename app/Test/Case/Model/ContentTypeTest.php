<?php
App::uses('ContentType', 'Model');

/**
 * ContentType Test Case
 */
class ContentTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.content_type',
		'app.content'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContentType = ClassRegistry::init('ContentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContentType);

		parent::tearDown();
	}

}
