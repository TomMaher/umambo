<?php 
/* SVN FILE: $Id$ */
/* FeaturedVideo Fixture generated on: 2009-01-20 10:01:07 : 1232465167*/

class FeaturedVideoFixture extends CakeTestFixture {
	var $name = 'FeaturedVideo';
	var $table = 'featured_videos';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'video_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'video_id'  => 1
			));
}
?>