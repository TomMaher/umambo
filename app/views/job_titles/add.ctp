<div class="jobTitles form">
<?php echo $form->create('JobTitle');?>
	<fieldset>
 		<legend><?php __('Add JobTitle');?></legend>
	<?php
		echo $form->input('profession_id');
		echo $form->input('title');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List JobTitles', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Professions', true), array('controller'=> 'professions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Profession', true), array('controller'=> 'professions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('controller'=> 'specialties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add')); ?> </li>
	</ul>
</div>

