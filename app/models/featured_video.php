<?php
class FeaturedVideo extends AppModel {

	var $name = 'FeaturedVideo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Video' => array('className' => 'Video',
								'foreignKey' => 'video_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
}
?>