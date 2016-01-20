<div class="forms view">
<h2><?php echo __('Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($form['Form']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($form['Form']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($form['Form']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($form['Form']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($form['Image']['name'], array('controller' => 'images', 'action' => 'view', $form['Image']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form'), array('action' => 'edit', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form'), array('action' => 'delete', $form['Form']['id']), array(), __('Are you sure you want to delete # %s?', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
