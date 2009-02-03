<?php 
/* SVN FILE: $Id$ */
/* PeopleController Test cases generated on: 2009-01-05 11:01:07 : 1231171987*/
App::import('Controller', 'People');

class TestPeople extends PeopleController {
	var $autoRender = false;
}

class PeopleControllerTest extends CakeTestCase {
	var $People = null;

	function setUp() {
		$this->People = new TestPeople();
		$this->People->constructClasses();
	}

	function testPeopleControllerInstance() {
		$this->assertTrue(is_a($this->People, 'PeopleController'));
	}

	function tearDown() {
		unset($this->People);
	}
}
?>