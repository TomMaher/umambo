<?php
class Specialty extends AppModel {

	var $name = 'Specialty';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'JobTitle' => array('className' => 'JobTitle',
								'foreignKey' => 'job_title_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'Member' => array('className' => 'Member',
						'joinTable' => 'members_specialties',
						'foreignKey' => 'specialty_id',
						'associationForeignKey' => 'member_id',
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