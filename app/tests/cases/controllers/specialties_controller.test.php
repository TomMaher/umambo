<?php 
/* SVN FILE: $Id$ */
/* SpecialtiesController Test cases generated on: 2009-01-02 09:01:28 : 1230906628*/
App::import('Controller', 'Specialties');

class TestSpecialties extends SpecialtiesController {
	var $autoRender = false;
}

class SpecialtiesControllerTest extends CakeTestCase {
	var $Specialties = null;

	function setUp() {
		$this->Specialties = new TestSpecialties();
		$this->Specialties->constructClasses();
	}

	function testSpecialtiesControllerInstance() {
		$this->assertTrue(is_a($this->Specialties, 'SpecialtiesController'));
	}

	function tearDown() {
		unset($this->Specialties);
	}
}
?>