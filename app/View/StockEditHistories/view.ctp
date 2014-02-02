<div class="stockEditHistories view">
<h2><?php echo __('Stock Edit History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stockEditHistory['StockEditHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockEditHistory['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $stockEditHistory['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($stockEditHistory['StockEditHistory']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($stockEditHistory['StockEditHistory']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock Edit History'), array('action' => 'edit', $stockEditHistory['StockEditHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock Edit History'), array('action' => 'delete', $stockEditHistory['StockEditHistory']['id']), null, __('Are you sure you want to delete # %s?', $stockEditHistory['StockEditHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stock Edit Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock Edit History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
