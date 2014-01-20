<div class="trPos view">
<h2><?php echo __('Tr Po'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trPo['TrPo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trPo['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $trPo['PurchaseOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trPo['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trPo['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($trPo['TrPo']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Harga'); ?></dt>
		<dd>
			<?php echo h($trPo['TrPo']['harga']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tr Po'), array('action' => 'edit', $trPo['TrPo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tr Po'), array('action' => 'delete', $trPo['TrPo']['id']), null, __('Are you sure you want to delete # %s?', $trPo['TrPo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Po'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
