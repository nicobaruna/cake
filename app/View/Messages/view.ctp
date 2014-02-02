<div class="messages view">
<h2><?php echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['From']['id'], array('controller' => 'users', 'action' => 'view', $message['From']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['To']['id'], array('controller' => 'users', 'action' => 'view', $message['To']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($message['Message']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($message['Message']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New From'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
