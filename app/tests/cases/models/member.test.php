<?php 
/* SVN FILE: $Id$ */
/* Member Test cases generated on: 2009-01-19 11:01:43 : 1232383543*/
App::import('Model', 'Member');

class MemberTestCase extends CakeTestCase {
	var $Member = null;
	var $fixtures = array('app.member', 'app.album', 'app.comment', 'app.gallery', 'app.layout', 'app.network');

	function startTest() {
		$this->Member =& ClassRegistry::init('Member');
	}

	function testMemberInstance() {
		$this->assertTrue(is_a($this->Member, 'Member'));
	}

	function testMemberFind() {
		$this->Member->recursive = -1;
		$results = $this->Member->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Member' => array(
			'id'  => 1,
			'username'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'name'  => 'Lorem ipsum dolor sit amet',
			'lastname'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-01-19',
			'display_name'  => 'Lorem ipsum dolor sit amet',
			'gender'  => 'Lorem ip',
			'url'  => 'Lorem ipsum dolor sit amet',
			'birthday'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>