<div class="forms form">
<?php echo $this->Form->create('Form'); ?>
	<fieldset>
		<legend><?php echo __('Add Form'); ?></legend>
	<?php
		echo $this->Form->input('text');
		echo $this->Form->input('image_id');
		echo $this->Form->input('create_img_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
