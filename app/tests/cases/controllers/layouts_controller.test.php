<?php 
/* SVN FILE: $Id$ */
/* LayoutsController Test cases generated on: 2009-01-05 11:01:57 : 1231171917*/
App::import('Controller', 'Layouts');

class TestLayouts extends LayoutsController {
	var $autoRender = false;
}

class LayoutsControllerTest extends CakeTestCase {
	var $Layouts = null;

	function setUp() {
		$this->Layouts = new TestLayouts();
		$this->Layouts->constructClasses();
	}

	function testLayoutsControllerInstance() {
		$this->assertTrue(is_a($this->Layouts, 'LayoutsController'));
	}

	function tearDown() {
		unset($this->Layouts);
	}
}
?>