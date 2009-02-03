<?php 
/* SVN FILE: $Id$ */
/* Specialty Test cases generated on: 2009-01-10 12:01:30 : 1231608030*/
App::import('Model', 'Specialty');

class SpecialtyTestCase extends CakeTestCase {
	var $Specialty = null;
	var $fixtures = array('app.specialty', 'app.job_title');

	function startTest() {
		$this->Specialty =& ClassRegistry::init('Specialty');
	}

	function testSpecialtyInstance() {
		$this->assertTrue(is_a($this->Specialty, 'Specialty'));
	}

	function testSpecialtyFind() {
		$this->Specialty->recursive = -1;
		$results = $this->Specialty->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Specialty' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'job_title_id'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>