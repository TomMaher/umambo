<div class="gadgets form">
<?php echo $form->create('Gadget');?>
	<fieldset>
 		<legend><?php __('Add Gadget');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Gadgets', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Layouts', true), array('controller'=> 'layouts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add')); ?> </li>
	</ul>
</div>
