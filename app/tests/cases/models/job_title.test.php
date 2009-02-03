<?php 
/* SVN FILE: $Id$ */
/* JobTitle Test cases generated on: 2008-12-30 18:12:40 : 1230678640*/
App::import('Model', 'JobTitle');

class JobTitleTestCase extends CakeTestCase {
	var $JobTitle = null;
	var $fixtures = array('app.job_title', 'app.profession', 'app.specialty');

	function startTest() {
		$this->JobTitle =& ClassRegistry::init('JobTitle');
	}

	function testJobTitleInstance() {
		$this->assertTrue(is_a($this->JobTitle, 'JobTitle'));
	}

	function testJobTitleFind() {
		$this->JobTitle->recursive = -1;
		$results = $this->JobTitle->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('JobTitle' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor ',
			'profession_id'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>