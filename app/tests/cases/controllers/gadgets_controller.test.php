<?php 
/* SVN FILE: $Id$ */
/* GadgetsController Test cases generated on: 2009-01-05 11:01:00 : 1231171860*/
App::import('Controller', 'Gadgets');

class TestGadgets extends GadgetsController {
	var $autoRender = false;
}

class GadgetsControllerTest extends CakeTestCase {
	var $Gadgets = null;

	function setUp() {
		$this->Gadgets = new TestGadgets();
		$this->Gadgets->constructClasses();
	}

	function testGadgetsControllerInstance() {
		$this->assertTrue(is_a($this->Gadgets, 'GadgetsController'));
	}

	function tearDown() {
		unset($this->Gadgets);
	}
}
?>