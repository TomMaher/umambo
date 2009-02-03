<?php 
/* SVN FILE: $Id$ */
/* Album Fixture generated on: 2009-01-07 10:01:06 : 1231340586*/

class AlbumFixture extends CakeTestFixture {
	var $name = 'Album';
	var $table = 'albums';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'member_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'member_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet'
			));
}
?>