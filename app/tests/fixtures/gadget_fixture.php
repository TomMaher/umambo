<?php 
/* SVN FILE: $Id$ */
/* Gadget Fixture generated on: 2009-01-07 10:01:45 : 1231343565*/

class GadgetFixture extends CakeTestFixture {
	var $name = 'Gadget';
	var $table = 'gadgets';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
			'description' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'url' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 60),
			'owner' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'owner'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-07 10:52:45'
			));
}
?>