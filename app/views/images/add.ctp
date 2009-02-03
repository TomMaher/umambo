<div class="images form">
<?php echo $form->create('Image');?>
	<fieldset>
 		<legend><?php __('Add Image');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Images', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Galleries', true), array('controller'=> 'galleries', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Albums', true), array('controller'=> 'albums', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add')); ?> </li>
	</ul>
</div>
