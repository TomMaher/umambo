<?php
class Gadget extends AppModel {

	var $name = 'Gadget';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
			'Layout' => array('className' => 'Layout',
						'joinTable' => 'gadgets_layouts',
						'foreignKey' => 'gadget_id',
						'associationForeignKey' => 'layout_id',
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