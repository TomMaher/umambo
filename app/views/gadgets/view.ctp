<div class="gadgets view">
<h2><?php  __('Gadget');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Owner'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['owner']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gadget['Gadget']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Gadget', true), array('action'=>'edit', $gadget['Gadget']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Gadget', true), array('action'=>'delete', $gadget['Gadget']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gadget['Gadget']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Gadgets', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gadget', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Layouts', true), array('controller'=> 'layouts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Layouts');?></h3>
	<?php if (!empty($gadget['Layout'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Default'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gadget['Layout'] as $layout):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $layout['id'];?></td>
			<td><?php echo $layout['member_id'];?></td>
			<td><?php echo $layout['title'];?></td>
			<td><?php echo $layout['default'];?></td>
			<td><?php echo $layout['type'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'layouts', 'action'=>'view', $layout['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'layouts', 'action'=>'edit', $layout['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'layouts', 'action'=>'delete', $layout['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $layout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
