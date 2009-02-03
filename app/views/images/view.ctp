<div class="images view">
<h2><?php  __('Image');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gallery'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($image['Gallery']['title'], array('controller'=> 'galleries', 'action'=>'view', $image['Gallery']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Album'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($image['Album']['title'], array('controller'=> 'albums', 'action'=>'view', $image['Album']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Head Shot'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['head_shot']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Image', true), array('action'=>'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Image', true), array('action'=>'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Images', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Galleries', true), array('controller'=> 'galleries', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Gallery', true), array('controller'=> 'galleries', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Albums', true), array('controller'=> 'albums', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Album', true), array('controller'=> 'albums', 'action'=>'add')); ?> </li>
	</ul>
</div>
