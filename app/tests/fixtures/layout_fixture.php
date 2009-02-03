<?php 
/* SVN FILE: $Id$ */
/* Layout Fixture generated on: 2009-01-07 10:01:19 : 1231343539*/

class LayoutFixture extends CakeTestFixture {
	var $name = 'Layout';
	var $table = 'layouts';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'member_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
			'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 120),
			'default' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 1),
			'type' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 1),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'member_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'default'  => 'Lorem ipsum dolor sit ame',
			'type'  => 'Lorem ipsum dolor sit ame'
			));
}
?>