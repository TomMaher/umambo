<?php 
/* SVN FILE: $Id$ */
/* Image Test cases generated on: 2009-01-07 10:01:37 : 1231342657*/
App::import('Model', 'Image');

class ImageTestCase extends CakeTestCase {
	var $Image = null;
	var $fixtures = array('app.image', 'app.gallery', 'app.album');

	function startTest() {
		$this->Image =& ClassRegistry::init('Image');
	}

	function testImageInstance() {
		$this->assertTrue(is_a($this->Image, 'Image'));
	}

	function testImageFind() {
		$this->Image->recursive = -1;
		$results = $this->Image->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Image' => array(
			'id'  => 1,
			'url'  => 'Lorem ipsum dolor sit amet',
			'gallery_id'  => 1,
			'album_id'  => 1,
			'head_shot'  => 'Lorem ipsum dolor sit ame',
			'created'  => '2009-01-07 10:37:36'
			));
		$this->assertEqual($results, $expected);
	}
}
?>