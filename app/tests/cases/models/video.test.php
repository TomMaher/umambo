<?php 
/* SVN FILE: $Id$ */
/* Video Test cases generated on: 2009-01-20 11:01:19 : 1232468479*/
App::import('Model', 'Video');

class VideoTestCase extends CakeTestCase {
	var $Video = null;
	var $fixtures = array('app.video', 'app.featured_video');

	function startTest() {
		$this->Video =& ClassRegistry::init('Video');
	}

	function testVideoInstance() {
		$this->assertTrue(is_a($this->Video, 'Video'));
	}

	function testVideoFind() {
		$this->Video->recursive = -1;
		$results = $this->Video->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Video' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'is_featured'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>