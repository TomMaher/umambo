<?php
class JobTitle extends AppModel {

	var $name = 'JobTitle';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Profession' => array('className' => 'Profession',
								'foreignKey' => 'profession_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasMany = array(
			'Specialty' => array('className' => 'Specialty',
								'foreignKey' => 'job_title_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			)
	);

}
?>