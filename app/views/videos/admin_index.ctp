<div class="videos index">
<h2><?php __('Videos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('member_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($videos as $video):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $video['Video']['id']; ?>
		</td>
		<td>
			<?php echo $video['Video']['member_id']; ?>
		</td>
		<td>
			<?php echo $video['Video']['title']; ?>
		</td>
		<td>
			<?php echo $video['Video']['description']; ?>
		</td>
		<td>
			<?php echo $video['Video']['url']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $video['Video']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $video['Video']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $video['Video']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $video['Video']['id'])); ?>
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
		<li><?php echo $html->link(__('New Video', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Featured Videos', true), array('controller'=> 'featured_videos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Featured Video', true), array('controller'=> 'featured_videos', 'action'=>'add')); ?> </li>
	</ul>
</div>
