<div class="videos view">
<h2><?php  __('Video');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Member Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['member_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['url']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Video', true), array('action'=>'edit', $video['Video']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Video', true), array('action'=>'delete', $video['Video']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $video['Video']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Videos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Video', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Featured Videos', true), array('controller'=> 'featured_videos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Featured Video', true), array('controller'=> 'featured_videos', 'action'=>'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Featured Videos');?></h3>
	<?php if (!empty($video['FeaturedVideo'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $video['FeaturedVideo']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Video Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $video['FeaturedVideo']['video_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Featured Video', true), array('controller'=> 'featured_videos', 'action'=>'edit', $video['FeaturedVideo']['id'])); ?></li>
			</ul>
		</div>
	</div>
	