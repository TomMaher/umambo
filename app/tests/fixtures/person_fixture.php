<?php 
/* SVN FILE: $Id$ */
/* Person Fixture generated on: 2009-01-07 10:01:36 : 1231342596*/

class PersonFixture extends CakeTestFixture {
	var $name = 'Person';
	var $table = 'people';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'length' => 100),
			'email' => array('type'=>'string', 'null' => false, 'length' => 100),
			'category' => array('type'=>'string', 'null' => false, 'length' => 100),
			'date' => array('type'=>'date', 'null' => false, 'default' => '0000-00-00'),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'category'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-01-07'
			));
}
?>