<?php 
/* SVN FILE: $Id$ */
/* Person Test cases generated on: 2009-01-07 10:01:37 : 1231342597*/
App::import('Model', 'Person');

class PersonTestCase extends CakeTestCase {
	var $Person = null;
	var $fixtures = array('app.person');

	function startTest() {
		$this->Person =& ClassRegistry::init('Person');
	}

	function testPersonInstance() {
		$this->assertTrue(is_a($this->Person, 'Person'));
	}

	function testPersonFind() {
		$this->Person->recursive = -1;
		$results = $this->Person->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Person' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'category'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-01-07'
			));
		$this->assertEqual($results, $expected);
	}
}
?>