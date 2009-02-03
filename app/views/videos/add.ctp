<div class="videos form">
<?php echo $form->create('Video');?>
	<fieldset>
 		<legend><?php __('Add Video');?></legend>
	<?php
		echo $form->input('member_id');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('url');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Videos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Featured Videos', true), array('controller'=> 'featured_videos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Featured Video', true), array('controller'=> 'featured_videos', 'action'=>'add')); ?> </li>
	</ul>
</div>
