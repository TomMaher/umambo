<?php 
/* SVN FILE: $Id$ */
/* AlbumsController Test cases generated on: 2009-01-05 11:01:15 : 1231171755*/
App::import('Controller', 'Albums');

class TestAlbums extends AlbumsController {
	var $autoRender = false;
}

class AlbumsControllerTest extends CakeTestCase {
	var $Albums = null;

	function setUp() {
		$this->Albums = new TestAlbums();
		$this->Albums->constructClasses();
	}

	function testAlbumsControllerInstance() {
		$this->assertTrue(is_a($this->Albums, 'AlbumsController'));
	}

	function tearDown() {
		unset($this->Albums);
	}
}
?>