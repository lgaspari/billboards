<?php
App::uses('ContentsScreen', 'Model');

/**
 * ContentsScreen Test Case
 */
class ContentsScreenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contents_screen',
		'app.content',
		'app.screen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContentsScreen = ClassRegistry::init('ContentsScreen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContentsScreen);

		parent::tearDown();
	}

}
