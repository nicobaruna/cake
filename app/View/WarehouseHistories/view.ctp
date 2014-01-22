<div class="warehouseHistories view col-md-10">	

	<div class="warehouseHistories-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Warehouse History'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($warehouseHistory['WarehouseHistory']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Stock'); ?></dt>
				<dd>
					<?php echo $this->Html->link($warehouseHistory['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $warehouseHistory['Stock']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Warehouse'); ?></dt>
				<dd>
					<?php echo $this->Html->link($warehouseHistory['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $warehouseHistory['Warehouse']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Action'); ?></dt>
				<dd>
					<?php echo h($warehouseHistory['WarehouseHistory']['action']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Date'); ?></dt>
				<dd>
					<?php echo h($warehouseHistory['WarehouseHistory']['date']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Warehouse History'), array('action' => 'edit', $warehouseHistory['WarehouseHistory']['id'])); ?> </li>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Warehouse History'), array('action' => 'delete', $warehouseHistory['WarehouseHistory']['id']), null, __('Are you sure you want to delete # %s?', $warehouseHistory['WarehouseHistory']['id'])); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouse Histories'), array('action' => 'index')); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse History'), array('action' => 'add')); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </li>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </li>
			</div>
		</div>
	</div>

</div>