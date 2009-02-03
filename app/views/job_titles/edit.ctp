<div class="jobTitles form">
<?php echo $form->create('JobTitle');?>
	<fieldset>
 		<legend><?php __('Edit JobTitle');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('profession_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('JobTitle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('JobTitle.id'))); ?></li>
		<li><?php echo $html->link(__('List JobTitles', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Professions', true), array('controller'=> 'professions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Profession', true), array('controller'=> 'professions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('controller'=> 'specialties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add')); ?> </li>
	</ul>
</div>
