<div class="gadgets index">
<h2><?php __('Gadgets');?></h2>
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
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('owner');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($gadgets as $gadget):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $gadget['Gadget']['id']; ?>
		</td>
		<td>
			<?php echo $gadget['Gadget']['title']; ?>
		</td>
		<td>
			<?php echo $gadget['Gadget']['description']; ?>
		</td>
		<td>
			<?php echo $gadget['Gadget']['url']; ?>
		</td>
		<td>
			<?php echo $gadget['Gadget']['owner']; ?>
		</td>
		<td>
			<?php echo $gadget['Gadget']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $gadget['Gadget']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $gadget['Gadget']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $gadget['Gadget']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gadget['Gadget']['id'])); ?>
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
		<li><?php echo $html->link(__('New Gadget', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Layouts', true), array('controller'=> 'layouts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add')); ?> </li>
	</ul>
</div>
