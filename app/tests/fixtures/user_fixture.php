<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2009-01-23 10:01:06 : 1232725506*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'username' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
			'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 80),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'username'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet'
			));
}
?>