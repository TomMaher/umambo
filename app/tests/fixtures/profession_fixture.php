<?php 
/* SVN FILE: $Id$ */
/* Profession Fixture generated on: 2008-12-30 18:12:08 : 1230678608*/

class ProfessionFixture extends CakeTestFixture {
	var $name = 'Profession';
	var $table = 'professions';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'profession' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
			'description' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'profession'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet'
			));
}
?>