<?php 
/* SVN FILE: $Id$ */
/* Specialty Fixture generated on: 2009-01-10 12:01:26 : 1231608026*/

class SpecialtyFixture extends CakeTestFixture {
	var $name = 'Specialty';
	var $table = 'specialties';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
			'description' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
			'job_title_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'job_title_id'  => 1
			));
}
?>