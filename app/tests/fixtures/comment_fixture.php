<?php 
/* SVN FILE: $Id$ */
/* Comment Fixture generated on: 2009-01-05 08:01:44 : 1231163864*/

class CommentFixture extends CakeTestFixture {
	var $name = 'Comment';
	var $table = 'comments';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'member_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'to_member_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'message' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'member_id'  => 1,
			'to_member_id'  => 1,
			'created'  => '2009-01-05 08:57:44',
			'message'  => 'Lorem ipsum dolor sit amet'
			));
}
?>