<div class="members form">
<?php echo $form->create('Member');?>
	<fieldset>
 		<legend><?php __('Add Member');?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('Group');
		echo $form->input('email');
		echo $form->input('name');
		echo $form->input('lastname');
		echo $form->input('date');
		echo $form->input('display_name');
		echo $form->input('gender');
		echo $form->input('url');
		echo $form->input('birthday');
		echo $form->input('Specialty');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Members', true), array('action'=>'index'));?></li>
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
