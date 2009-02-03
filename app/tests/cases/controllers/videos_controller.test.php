<?php 
/* SVN FILE: $Id$ */
/* VideosController Test cases generated on: 2009-01-20 11:01:38 : 1232468858*/
App::import('Controller', 'Videos');

class TestVideos extends VideosController {
	var $autoRender = false;
}

class VideosControllerTest extends CakeTestCase {
	var $Videos = null;

	function setUp() {
		$this->Videos = new TestVideos();
		$this->Videos->constructClasses();
	}

	function testVideosControllerInstance() {
		$this->assertTrue(is_a($this->Videos, 'VideosController'));
	}

	function tearDown() {
		unset($this->Videos);
	}
}
?>