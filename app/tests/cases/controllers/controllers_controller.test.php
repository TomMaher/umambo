<?php 
/* SVN FILE: $Id$ */
/* ControllersController Test cases generated on: 2008-12-30 16:12:36 : 1230671076*/
App::import('Controller', 'Controllers');

class TestControllers extends ControllersController {
	var $autoRender = false;
}

class ControllersControllerTest extends CakeTestCase {
	var $Controllers = null;

	function setUp() {
		$this->Controllers = new TestControllers();
		$this->Controllers->constructClasses();
	}

	function testControllersControllerInstance() {
		$this->assertTrue(is_a($this->Controllers, 'ControllersController'));
	}

	function tearDown() {
		unset($this->Controllers);
	}
}
?>