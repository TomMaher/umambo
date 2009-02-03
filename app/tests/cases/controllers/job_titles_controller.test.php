<?php 
/* SVN FILE: $Id$ */
/* JobTitlesController Test cases generated on: 2008-12-30 18:12:46 : 1230678706*/
App::import('Controller', 'JobTitles');

class TestJobTitles extends JobTitlesController {
	var $autoRender = false;
}

class JobTitlesControllerTest extends CakeTestCase {
	var $JobTitles = null;

	function setUp() {
		$this->JobTitles = new TestJobTitles();
		$this->JobTitles->constructClasses();
	}

	function testJobTitlesControllerInstance() {
		$this->assertTrue(is_a($this->JobTitles, 'JobTitlesController'));
	}

	function tearDown() {
		unset($this->JobTitles);
	}
}
?>