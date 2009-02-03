<div class="featuredVideos form">
<?php echo $form->create('FeaturedVideo');?>
	<fieldset>
 		<legend><?php __('Add FeaturedVideo');?></legend>
	<?php
		echo $form->input('video_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List FeaturedVideos', true), array('action'=>'index'));?></li>
	</ul>
</div>
