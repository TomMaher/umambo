<div class="images index">
<h2><?php __('Images');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('gallery_id');?></th>
	<th><?php echo $paginator->sort('album_id');?></th>
	<th><?php echo $paginator->sort('head_shot');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($images as $image):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $image['Image']['id']; ?>
		</td>
		<td>
			<?php echo $image['Image']['url']; ?>
		</td>
		<td>
			<?php echo $html->link($image['Gallery']['title'], array('controller'=> 'galleries', 'action'=>'view', $image['Gallery']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($image['Album']['title'], array('controller'=> 'albums', 'action'=>'view', $image['Album']['id'])); ?>
		</td>
		<td>
			<?php echo $image['Image']['head_shot']; ?>
		</td>
		<td>
			<?php echo $image['Image']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $image['Image']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $image['Image']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?>
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
		<li><?php echo $html->link(__('New Image', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Galleries', true), array('controller'=> 'galleries', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Albums', true), array('controller'=> 'albums', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add')); ?> </li>
	</ul>
</div>
