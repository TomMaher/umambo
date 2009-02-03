<div class="members view">
<h2><?php  __('Member');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['group_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lastname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['lastname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Display Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['display_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['birthday']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Member', true), array('action'=>'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Member', true), array('action'=>'delete', $member['Member']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['Member']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Members', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Member', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Groups', true), array('controller'=> 'groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller'=> 'groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Albums', true), array('controller'=> 'albums', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller'=> 'comments', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller'=> 'comments', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Galleries', true), array('controller'=> 'galleries', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Layouts', true), array('controller'=> 'layouts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Layout', true), array('controller'=> 'layouts', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Networks', true), array('controller'=> 'networks', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Network', true), array('controller'=> 'networks', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Specialties', true), array('controller'=> 'specialties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Specialty', true), array('controller'=> 'specialties', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Albums');?></h3>
	<?php if (!empty($member['Album'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Album'] as $album):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $album['id'];?></td>
			<td><?php echo $album['member_id'];?></td>
			<td><?php echo $album['title'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'albums', 'action'=>'view', $album['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'albums', 'action'=>'edit', $album['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'albums', 'action'=>'delete', $album['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $album['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Comments');?></h3>
	<?php if (!empty($member['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('To Member Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Message'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['member_id'];?></td>
			<td><?php echo $comment['to_member_id'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['message'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'comments', 'action'=>'view', $comment['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'comments', 'action'=>'edit', $comment['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'comments', 'action'=>'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Comment', true), array('controller'=> 'comments', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Galleries');?></h3>
	<?php if (!empty($member['Gallery'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Gallery'] as $gallery):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $gallery['id'];?></td>
			<td><?php echo $gallery['member_id'];?></td>
			<td><?php echo $gallery['title'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'galleries', 'action'=>'view', $gallery['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'galleries', 'action'=>'edit', $gallery['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'galleries', 'action'=>'delete', $gallery['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Layouts');?></h3>
	<?php if (!empty($member['Layout'])):?>
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
		foreach ($member['Layout'] as $layout):
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
<div class="related">
	<h3><?php __('Related Networks');?></h3>
	<?php if (!empty($member['Network'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('Friend Id'); ?></th>
		<th><?php __('Group'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Topnet'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Network'] as $network):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $network['id'];?></td>
			<td><?php echo $network['member_id'];?></td>
			<td><?php echo $network['friend_id'];?></td>
			<td><?php echo $network['group'];?></td>
			<td><?php echo $network['status'];?></td>
			<td><?php echo $network['topnet'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'networks', 'action'=>'view', $network['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'networks', 'action'=>'edit', $network['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'networks', 'action'=>'delete', $network['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $network['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Network', true), array('controller'=> 'networks', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Specialties');?></h3>
	<?php if (!empty($member['Specialty'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Job Title Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Specialty'] as $specialty):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $specialty['id'];?></td>
			<td><?php echo $specialty['title'];?></td>
			<td><?php echo $specialty['description'];?></td>
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
