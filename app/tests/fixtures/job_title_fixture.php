<?php 
/* SVN FILE: $Id$ */
/* JobTitle Fixture generated on: 2008-12-30 18:12:39 : 1230678639*/

class JobTitleFixture extends CakeTestFixture {
	var $name = 'JobTitle';
	var $table = 'job_titles';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
			'profession_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor ',
			'profession_id'  => 1
			));
}
?>