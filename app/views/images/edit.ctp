<div class="images form">
<?php echo $form->create('Image');?>
	<fieldset>
 		<legend><?php __('Edit Image');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('url');
		echo $form->input('gallery_id');
		echo $form->input('album_id');
		echo $form->input('head_shot');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Image.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Image.id'))); ?></li>
		<li><?php echo $html->link(__('List Images', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Galleries', true), array('controller'=> 'galleries', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Albums', true), array('controller'=> 'albums', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add')); ?> </li>
	</ul>
</div>
