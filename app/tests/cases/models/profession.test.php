<?php 
/* SVN FILE: $Id$ */
/* Profession Test cases generated on: 2008-12-30 18:12:11 : 1230678611*/
App::import('Model', 'Profession');

class ProfessionTestCase extends CakeTestCase {
	var $Profession = null;
	var $fixtures = array('app.profession', 'app.job_title');

	function startTest() {
		$this->Profession =& ClassRegistry::init('Profession');
	}

	function testProfessionInstance() {
		$this->assertTrue(is_a($this->Profession, 'Profession'));
	}

	function testProfessionFind() {
		$this->Profession->recursive = -1;
		$results = $this->Profession->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Profession' => array(
			'id'  => 1,
			'profession'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>