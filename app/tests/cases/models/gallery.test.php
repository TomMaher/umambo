<?php 
/* SVN FILE: $Id$ */
/* Gallery Test cases generated on: 2009-01-07 10:01:10 : 1231342630*/
App::import('Model', 'Gallery');

class GalleryTestCase extends CakeTestCase {
	var $Gallery = null;
	var $fixtures = array('app.gallery', 'app.member', 'app.image');

	function startTest() {
		$this->Gallery =& ClassRegistry::init('Gallery');
	}

	function testGalleryInstance() {
		$this->assertTrue(is_a($this->Gallery, 'Gallery'));
	}

	function testGalleryFind() {
		$this->Gallery->recursive = -1;
		$results = $this->Gallery->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Gallery' => array(
			'id'  => 1,
			'member_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>