<?php
class Profession extends AppModel {

	var $name = 'Profession';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'JobTitle' => array('className' => 'JobTitle',
								'foreignKey' => 'profession_id',
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