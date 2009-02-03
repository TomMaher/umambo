<div class="specialties view">
<h2><?php  __('Specialty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $specialty['Specialty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Specialty'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $specialty['Specialty']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $specialty['Specialty']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Job Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($specialty['JobTitle']['title'], array('controller'=> 'job_titles', 'action'=>'view', $specialty['JobTitle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Specialty', true), array('action'=>'edit', $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Specialty', true), array('action'=>'delete', $specialty['Specialty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Titles', true), array('controller'=> 'job_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Members', true), array('controller'=> 'members', 'action'=>'index')); ?> </li>
	//	<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'members', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Members');?></h3>
	<?php if (!empty($specialty['Member'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Display Name'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Email'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($specialty['Member'] as $member):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $member['display_name'];?></td>
			<td><?php echo $member['gender'];?></td>
			<td><?php echo $member['email'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'members', 'action'=>'view', $member['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'members', 'action'=>'edit', $member['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'members', 'action'=>'delete', $member['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'members', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
