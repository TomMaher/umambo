<div class="galleries form">
<?php echo $form->create('Gallery');?>
	<fieldset>
 		<legend><?php __('Add Gallery');?></legend>
	<?php
		echo $form->input('member_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Galleries', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Members', true), array('controller'=> 'members', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Member', true), array('controller'=> 'members', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Images', true), array('controller'=> 'images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('controller'=> 'images', 'action'=>'add')); ?> </li>
	</ul>
</div>
