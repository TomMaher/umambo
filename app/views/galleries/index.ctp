<div class="galleries index">
<h2><?php __('Galleries');?></h2>
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
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($galleries as $gallery):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $gallery['Gallery']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($gallery['Member']['name'], array('controller'=> 'members', 'action'=>'view', $gallery['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $gallery['Gallery']['title']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $gallery['Gallery']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $gallery['Gallery']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?>
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
		<li><?php echo $html->link(__('New Gallery', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Members', true), array('controller'=> 'members', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Member', true), array('controller'=> 'members', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Images', true), array('controller'=> 'images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('controller'=> 'images', 'action'=>'add')); ?> </li>
	</ul>
</div>
