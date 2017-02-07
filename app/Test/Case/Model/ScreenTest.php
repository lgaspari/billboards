<?php
App::uses('Screen', 'Model');

/**
 * Screen Test Case
 */
class ScreenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.screen',
		'app.content',
		'app.content_type',
		'app.contents_screen',
		'app.tag',
		'app.screens_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Screen = ClassRegistry::init('Screen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Screen);

		parent::tearDown();
	}

}
