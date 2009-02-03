<?php
class Person extends AppModel {

	var $name = 'Person';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
			'Network' => array('className' => 'Network',
						'joinTable' => 'networks_people',
						'foreignKey' => 'person_id',
						'associationForeignKey' => 'person_id',
						'unique' => true,
						'conditions' => '',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			)
	);

}
?>