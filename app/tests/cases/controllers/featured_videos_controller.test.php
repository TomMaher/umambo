<?php 
/* SVN FILE: $Id$ */
/* FeaturedVideosController Test cases generated on: 2009-01-20 11:01:04 : 1232467864*/
App::import('Controller', 'FeaturedVideos');

class TestFeaturedVideos extends FeaturedVideosController {
	var $autoRender = false;
}

class FeaturedVideosControllerTest extends CakeTestCase {
	var $FeaturedVideos = null;

	function setUp() {
		$this->FeaturedVideos = new TestFeaturedVideos();
		$this->FeaturedVideos->constructClasses();
	}

	function testFeaturedVideosControllerInstance() {
		$this->assertTrue(is_a($this->FeaturedVideos, 'FeaturedVideosController'));
	}

	function tearDown() {
		unset($this->FeaturedVideos);
	}
}
?>