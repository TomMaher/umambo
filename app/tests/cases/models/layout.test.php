<?php 
/* SVN FILE: $Id$ */
/* Layout Test cases generated on: 2009-01-07 10:01:20 : 1231343540*/
App::import('Model', 'Layout');

class LayoutTestCase extends CakeTestCase {
	var $Layout = null;
	var $fixtures = array('app.layout', 'app.member');

	function startTest() {
		$this->Layout =& ClassRegistry::init('Layout');
	}

	function testLayoutInstance() {
		$this->assertTrue(is_a($this->Layout, 'Layout'));
	}

	function testLayoutFind() {
		$this->Layout->recursive = -1;
		$results = $this->Layout->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Layout' => array(
			'id'  => 1,
			'member_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'default'  => 'Lorem ipsum dolor sit ame',
			'type'  => 'Lorem ipsum dolor sit ame'
			));
		$this->assertEqual($results, $expected);
	}
}
?>