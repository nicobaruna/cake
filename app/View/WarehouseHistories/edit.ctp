<div class="warehouseHistories form edit col-md-6">
	<?php echo $this->Form->create('WarehouseHistory'); ?>
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Warehouse History'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('stock_id');
				echo $this->Form->input('warehouse_id');
				echo $this->Form->input('action');
				echo $this->Form->input('date');
			?>
		</div>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WarehouseHistory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WarehouseHistory.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouse Histories'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </span>
	</div>
</div>
