<div class="trWarehouses index col-md-10">
	
	<div class="trWarehouses-detail">
		<div class="block">
			<h2><?php echo __('Tr Warehouse'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($trWarehouse['TrWarehouse']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Stock'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trWarehouse['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trWarehouse['Stock']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Warehouse'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trWarehouse['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $trWarehouse['Warehouse']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Date'); ?></dt>
				<dd>
					<?php echo h($trWarehouse['TrWarehouse']['date']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Tr Warehouse'), array('action' => 'edit', $trWarehouse['TrWarehouse']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Tr Warehouse'), array('action' => 'delete', $trWarehouse['TrWarehouse']['id']), null, __('Are you sure you want to delete # %s?', $trWarehouse['TrWarehouse']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Warehouses'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Warehouse'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>