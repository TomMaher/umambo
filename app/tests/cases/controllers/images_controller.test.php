<?php 
/* SVN FILE: $Id$ */
/* ImagesController Test cases generated on: 2009-01-05 11:01:36 : 1231171896*/
App::import('Controller', 'Images');

class TestImages extends ImagesController {
	var $autoRender = false;
}

class ImagesControllerTest extends CakeTestCase {
	var $Images = null;

	function setUp() {
		$this->Images = new TestImages();
		$this->Images->constructClasses();
	}

	function testImagesControllerInstance() {
		$this->assertTrue(is_a($this->Images, 'ImagesController'));
	}

	function tearDown() {
		unset($this->Images);
	}
}
?>