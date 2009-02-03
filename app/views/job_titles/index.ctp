<div class="jobTitles index">
<h2><?php __('JobTitles');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('profession_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($jobTitles as $jobTitle):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $jobTitle['JobTitle']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($jobTitle['Profession']['title'], array('controller'=> 'professions', 'action'=>'view', $jobTitle['Profession']['id'])); ?>
		</td>
		<td>
			<?php echo $jobTitle['JobTitle']['title']; ?>
		</td>
		<td>
			<?php echo $jobTitle['JobTitle']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $jobTitle['JobTitle']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $jobTitle['JobTitle']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $jobTitle['JobTitle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobTitle['JobTitle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New JobTitle', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Professions', true), array('controller'=> 'professions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Profession', true), array('controller'=> 'professions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('controller'=> 'specialties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add')); ?> </li>
	</ul>
</div>
