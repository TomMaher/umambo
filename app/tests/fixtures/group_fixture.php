<?php 
/* SVN FILE: $Id$ */
/* Group Fixture generated on: 2009-01-19 12:01:38 : 1232385458*/

class GroupFixture extends CakeTestFixture {
	var $name = 'Group';
	var $table = 'groups';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 100),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-19 12:17:38',
			'modified'  => '2009-01-19 12:17:38'
			));
}
?>