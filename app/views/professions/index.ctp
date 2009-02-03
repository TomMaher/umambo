<div class="professions index">
<h2><?php __('Professions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($professions as $profession):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $profession['Profession']['id']; ?>
		</td>
		<td>
			<?php echo $profession['Profession']['title']; ?>
		</td>
		<td>
			<?php echo $profession['Profession']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $profession['Profession']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $profession['Profession']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $profession['Profession']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profession['Profession']['id'])); ?>
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
		<li><?php echo $html->link(__('New Profession', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Job Titles', true), array('controller'=> 'job_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Title', true), array('controller'=> 'job_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
