<?php
class Group extends AppModel {

	var $name = 'Group';
   	var $actsAs = array('Acl' => array('requester'));

	function parentNode() {
		return null;
	}
}
?>