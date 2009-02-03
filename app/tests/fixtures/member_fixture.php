<?php 
/* SVN FILE: $Id$ */
/* Member Fixture generated on: 2009-01-19 11:01:42 : 1232383542*/

class MemberFixture extends CakeTestFixture {
	var $name = 'Member';
	var $table = 'members';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'username' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'password' => array('type'=>'string', 'null' => false, 'length' => 80),
			'email' => array('type'=>'string', 'null' => false, 'length' => 50),
			'name' => array('type'=>'string', 'null' => false, 'length' => 100),
			'lastname' => array('type'=>'string', 'null' => false, 'length' => 100),
			'date' => array('type'=>'date', 'null' => false, 'default' => '0000-00-00'),
			'display_name' => array('type'=>'string', 'null' => false, 'length' => 100),
			'gender' => array('type'=>'string', 'null' => false, 'length' => 10),
			'url' => array('type'=>'string', 'null' => false, 'length' => 120),
			'birthday' => array('type'=>'string', 'null' => false, 'length' => 60),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'username'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'name'  => 'Lorem ipsum dolor sit amet',
			'lastname'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-01-19',
			'display_name'  => 'Lorem ipsum dolor sit amet',
			'gender'  => 'Lorem ip',
			'url'  => 'Lorem ipsum dolor sit amet',
			'birthday'  => 'Lorem ipsum dolor sit amet'
			));
}
?>