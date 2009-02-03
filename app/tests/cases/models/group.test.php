<?php 
/* SVN FILE: $Id$ */
/* Group Test cases generated on: 2009-01-19 12:01:40 : 1232385460*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $Group = null;
	var $fixtures = array('app.group');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function testGroupInstance() {
		$this->assertTrue(is_a($this->Group, 'Group'));
	}

	function testGroupFind() {
		$this->Group->recursive = -1;
		$results = $this->Group->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Group' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-19 12:17:38',
			'modified'  => '2009-01-19 12:17:38'
			));
		$this->assertEqual($results, $expected);
	}
}
?>