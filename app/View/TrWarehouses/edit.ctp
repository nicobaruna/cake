<div class="trWarehouses form">
<?php echo $this->Form->create('TrWarehouse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tr Warehouse'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('stock_id');
		echo $this->Form->input('warehouse_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrWarehouse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrWarehouse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tr Warehouses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </li>
	</ul>
</div>
