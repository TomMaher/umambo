<div class="professions form">
<?php echo $form->create('Profession');?>
	<fieldset>
 		<legend><?php __('Add Profession');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Professions', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Job Titles', true), array('controller'=> 'job_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
