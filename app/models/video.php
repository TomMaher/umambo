<?php
class Video extends AppModel {

	var $name = 'Video';
	var $validate = array(
		'id' => array('notempty'),
		'member_id' => array('notempty'),
		'title' => array('notempty'),
		'description' => array('notempty'),
		'url' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
			'FeaturedVideo' => array('className' => 'FeaturedVideo',
								'foreignKey' => 'video_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
			
	var $belongsTo = array(
			'Member'		=> array('className' => 'Member',
								'foreignKey' => 'member_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
			
	);
	
}
?>