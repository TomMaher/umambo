<?php 
/* SVN FILE: $Id$ */
/* Video Fixture generated on: 2009-01-20 11:01:19 : 1232468479*/

class VideoFixture extends CakeTestFixture {
	var $name = 'Video';
	var $table = 'videos';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 255, 'key' => 'primary'),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'description' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'url' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'is_featured' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'is_featured'  => 1
			));
}
?>