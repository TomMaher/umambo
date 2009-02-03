<?php 
/* SVN FILE: $Id$ */
/* FeaturedVideo Test cases generated on: 2009-01-20 10:01:07 : 1232465167*/
App::import('Model', 'FeaturedVideo');

class FeaturedVideoTestCase extends CakeTestCase {
	var $FeaturedVideo = null;
	var $fixtures = array('app.featured_video', 'app.video');

	function startTest() {
		$this->FeaturedVideo =& ClassRegistry::init('FeaturedVideo');
	}

	function testFeaturedVideoInstance() {
		$this->assertTrue(is_a($this->FeaturedVideo, 'FeaturedVideo'));
	}

	function testFeaturedVideoFind() {
		$this->FeaturedVideo->recursive = -1;
		$results = $this->FeaturedVideo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('FeaturedVideo' => array(
			'id'  => 1,
			'video_id'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>