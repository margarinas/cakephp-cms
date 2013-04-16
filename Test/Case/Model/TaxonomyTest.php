<?php
App::uses('Taxonomy', 'Cms.Model');

/**
 * Taxonomy Test Case
 *
 */
class TaxonomyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cms.taxonomy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taxonomy = ClassRegistry::init('Cms.Taxonomy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taxonomy);

		parent::tearDown();
	}

}
