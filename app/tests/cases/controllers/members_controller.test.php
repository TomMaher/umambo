<?php 
/* SVN FILE: $Id$ */
/* MembersController Test cases generated on: 2009-01-19 11:01:54 : 1232383794*/
App::import('Controller', 'Members');

class TestMembers extends MembersController {
	var $autoRender = false;
}

class MembersControllerTest extends CakeTestCase {
	var $Members = null;

	function setUp() {
		$this->Members = new TestMembers();
		$this->Members->constructClasses();
	}

	function testMembersControllerInstance() {
		$this->assertTrue(is_a($this->Members, 'MembersController'));
	}

	function tearDown() {
		unset($this->Members);
	}
}
?>