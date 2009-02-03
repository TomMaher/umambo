<div class="specialties form">
<?php echo $form->create('Specialty');?>
	<fieldset>
 		<legend><?php __('Edit Specialty');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('specialty');
		echo $form->input('description');
		echo $form->input('job_title_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Specialty.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Specialty.id'))); ?></li>
		<li><?php echo $html->link(__('List Specialties', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Job Titles', true), array('controller'=> 'job_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Members', true), array('controller'=> 'members', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'members', 'action'=>'add')); ?> </li>
	</ul>
</div>
