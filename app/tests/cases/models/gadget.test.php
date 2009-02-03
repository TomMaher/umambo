<?php 
/* SVN FILE: $Id$ */
/* Gadget Test cases generated on: 2009-01-07 10:01:47 : 1231343567*/
App::import('Model', 'Gadget');

class GadgetTestCase extends CakeTestCase {
	var $Gadget = null;
	var $fixtures = array('app.gadget');

	function startTest() {
		$this->Gadget =& ClassRegistry::init('Gadget');
	}

	function testGadgetInstance() {
		$this->assertTrue(is_a($this->Gadget, 'Gadget'));
	}

	function testGadgetFind() {
		$this->Gadget->recursive = -1;
		$results = $this->Gadget->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Gadget' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'owner'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-07 10:52:45'
			));
		$this->assertEqual($results, $expected);
	}
}
?>