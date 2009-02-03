<?php 
/* SVN FILE: $Id$ */
/* Image Fixture generated on: 2009-01-07 10:01:36 : 1231342656*/

class ImageFixture extends CakeTestFixture {
	var $name = 'Image';
	var $table = 'images';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'url' => array('type'=>'string', 'null' => false, 'length' => 120),
			'gallery_id' => array('type'=>'integer', 'null' => false, 'default' => '0'),
			'album_id' => array('type'=>'integer', 'null' => false, 'default' => '0'),
			'head_shot' => array('type'=>'string', 'null' => false, 'length' => 1),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'url'  => 'Lorem ipsum dolor sit amet',
			'gallery_id'  => 1,
			'album_id'  => 1,
			'head_shot'  => 'Lorem ipsum dolor sit ame',
			'created'  => '2009-01-07 10:37:36'
			));
}
?>