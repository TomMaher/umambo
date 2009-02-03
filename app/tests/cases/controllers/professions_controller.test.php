<?php 
/* SVN FILE: $Id$ */
/* ProfessionsController Test cases generated on: 2008-12-30 18:12:27 : 1230678687*/
App::import('Controller', 'Professions');

class TestProfessions extends ProfessionsController {
	var $autoRender = false;
}

class ProfessionsControllerTest extends CakeTestCase {
	var $Professions = null;

	function setUp() {
		$this->Professions = new TestProfessions();
		$this->Professions->constructClasses();
	}

	function testProfessionsControllerInstance() {
		$this->assertTrue(is_a($this->Professions, 'ProfessionsController'));
	}

	function tearDown() {
		unset($this->Professions);
	}
}
?>