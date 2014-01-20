<div class="bigUnits view">
<h2><?php echo __('Big Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bigUnit['BigUnit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bigUnit['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $bigUnit['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bigUnit['BigUnit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equivalent'); ?></dt>
		<dd>
			<?php echo h($bigUnit['BigUnit']['equivalent']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Big Unit'), array('action' => 'edit', $bigUnit['BigUnit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Big Unit'), array('action' => 'delete', $bigUnit['BigUnit']['id']), null, __('Are you sure you want to delete # %s?', $bigUnit['BigUnit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Big Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Big Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
