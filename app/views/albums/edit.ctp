<div class="albums form">
<?php echo $form->create('Album');?>
	<fieldset>
 		<legend><?php __('Edit Album');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('member_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Album.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Album.id'))); ?></li>
		<li><?php echo $html->link(__('List Albums', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Members', true), array('controller'=> 'members', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Member', true), array('controller'=> 'members', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Images', true), array('controller'=> 'images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('controller'=> 'images', 'action'=>'add')); ?> </li>
	</ul>
</div>
