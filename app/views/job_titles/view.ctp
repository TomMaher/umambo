<div class="jobTitles view">
<h2><?php  __('JobTitle');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobTitle['JobTitle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobTitle['JobTitle']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Profession'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($jobTitle['Profession']['title'], array('controller'=> 'professions', 'action'=>'view', $jobTitle['Profession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit JobTitle', true), array('action'=>'edit', $jobTitle['JobTitle']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete JobTitle', true), array('action'=>'delete', $jobTitle['JobTitle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobTitle['JobTitle']['id'])); ?> </li>
		<li><?php echo $html->link(__('List JobTitles', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New JobTitle', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Professions', true), array('controller'=> 'professions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Profession', true), array('controller'=> 'professions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('controller'=> 'specialties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Specialties');?></h3>
	<?php if (!empty($jobTitle['Specialty'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Specialty'); ?></th>
		<th><?php __('Job Title Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobTitle['Specialty'] as $specialty):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $specialty['id'];?></td>
			<td><?php echo $specialty['title'];?></td>
			<td><?php echo $specialty['job_title_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'specialties', 'action'=>'view', $specialty['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'specialties', 'action'=>'edit', $specialty['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'specialties', 'action'=>'delete', $specialty['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $specialty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
