<div class="professions view">
<h2><?php  __('Profession');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profession['Profession']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Profession'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profession['Profession']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profession['Profession']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Profession', true), array('action'=>'edit', $profession['Profession']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Profession', true), array('action'=>'delete', $profession['Profession']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profession['Profession']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Professions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Profession', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Titles', true), array('controller'=> 'job_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Job Titles');?></h3>
	<?php if (!empty($profession['JobTitle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Profession Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($profession['JobTitle'] as $jobTitle):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $jobTitle['id'];?></td>
			<td><?php echo $jobTitle['title'];?></td>
			<td><?php echo $jobTitle['profession_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'job_titles', 'action'=>'view', $jobTitle['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'job_titles', 'action'=>'edit', $jobTitle['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'job_titles', 'action'=>'delete', $jobTitle['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobTitle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
