<div class="featuredVideos view">
<h2><?php  __('FeaturedVideo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $featuredVideo['FeaturedVideo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Video Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $featuredVideo['FeaturedVideo']['video_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit FeaturedVideo', true), array('action'=>'edit', $featuredVideo['FeaturedVideo']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete FeaturedVideo', true), array('action'=>'delete', $featuredVideo['FeaturedVideo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $featuredVideo['FeaturedVideo']['id'])); ?> </li>
		<li><?php echo $html->link(__('List FeaturedVideos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New FeaturedVideo', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
