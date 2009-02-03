<?php 
/* SVN FILE: $Id$ */
/* GalleriesController Test cases generated on: 2009-01-05 11:01:18 : 1231171878*/
App::import('Controller', 'Galleries');

class TestGalleries extends GalleriesController {
	var $autoRender = false;
}

class GalleriesControllerTest extends CakeTestCase {
	var $Galleries = null;

	function setUp() {
		$this->Galleries = new TestGalleries();
		$this->Galleries->constructClasses();
	}

	function testGalleriesControllerInstance() {
		$this->assertTrue(is_a($this->Galleries, 'GalleriesController'));
	}

	function tearDown() {
		unset($this->Galleries);
	}
}
?>