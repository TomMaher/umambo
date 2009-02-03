<div class="featuredVideos form">
<?php echo $form->create('FeaturedVideo');?>
	<fieldset>
 		<legend><?php __('Edit FeaturedVideo');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('video_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('FeaturedVideo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('FeaturedVideo.id'))); ?></li>
		<li><?php echo $html->link(__('List FeaturedVideos', true), array('action'=>'index'));?></li>
	</ul>
</div>
