<div class="people form">
<?php echo $form->create('Person');?>
	<fieldset>
 		<legend><?php __('Edit Person');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('category');
		echo $form->input('date');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Person.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Person.id'))); ?></li>
		<li><?php echo $html->link(__('List People', true), array('action'=>'index'));?></li>
	</ul>
</div>
