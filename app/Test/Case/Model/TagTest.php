<?php
App::uses('Tag', 'Model');

/**
 * Tag Test Case
 */
class TagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tag',
		'app.screen',
		'app.content',
		'app.content_type',
		'app.contents_screen',
		'app.screens_tag',
		'app.user',
		'app.tags_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tag = ClassRegistry::init('Tag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tag);

		parent::tearDown();
	}

}
