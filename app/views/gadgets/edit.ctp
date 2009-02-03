<div class="gadgets form">
<?php echo $form->create('Gadget');?>
	<fieldset>
 		<legend><?php __('Edit Gadget');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('url');
		echo $form->input('owner');
		echo $form->input('Layout');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Gadget.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Gadget.id'))); ?></li>
		<li><?php echo $html->link(__('List Gadgets', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Layouts', true), array('controller'=> 'layouts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add')); ?> </li>
	</ul>
</div>
