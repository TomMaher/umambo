<?php 
/* SVN FILE: $Id$ */
/* Gallery Fixture generated on: 2009-01-07 10:01:09 : 1231342629*/

class GalleryFixture extends CakeTestFixture {
	var $name = 'Gallery';
	var $table = 'galleries';
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