<?php 
/* SVN FILE: $Id$ */
/* GroupsController Test cases generated on: 2009-01-19 11:01:50 : 1232381630*/
App::import('Controller', 'Groups');

class TestGroups extends GroupsController {
	var $autoRender = false;
}

class GroupsControllerTest extends CakeTestCase {
	var $Groups = null;

	function setUp() {
		$this->Groups = new TestGroups();
		$this->Groups->constructClasses();
	}

	function testGroupsControllerInstance() {
		$this->assertTrue(is_a($this->Groups, 'GroupsController'));
	}

	function tearDown() {
		unset($this->Groups);
	}
}
?>