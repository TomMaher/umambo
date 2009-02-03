<?php 
/* SVN FILE: $Id$ */
/* Album Test cases generated on: 2009-01-07 10:01:33 : 1231340673*/
App::import('Model', 'Album');

class AlbumTestCase extends CakeTestCase {
	var $Album = null;
	var $fixtures = array('app.album', 'app.member', 'app.image');

	function startTest() {
		$this->Album =& ClassRegistry::init('Album');
	}

	function testAlbumInstance() {
		$this->assertTrue(is_a($this->Album, 'Album'));
	}

	function testAlbumFind() {
		$this->Album->recursive = -1;
		$results = $this->Album->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Album' => array(
			'id'  => 1,
			'member_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>