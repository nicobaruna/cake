<div class="warehouseHistories index col-md-10">
	
	<div class="warehouseHistories-detail">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Warehouse Histories'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
						<th><?php echo $this->Paginator->sort('warehouse_id'); ?></th>
						<th><?php echo $this->Paginator->sort('action'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($warehouseHistories as $warehouseHistory): ?>
				<tr>
					<td><?php echo h($warehouseHistory['WarehouseHistory']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($warehouseHistory['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $warehouseHistory['Stock']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($warehouseHistory['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $warehouseHistory['Warehouse']['id'])); ?>
					</td>
					<td><?php echo h($warehouseHistory['WarehouseHistory']['action']); ?>&nbsp;</td>
					<td><?php echo h($warehouseHistory['WarehouseHistory']['date']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $warehouseHistory['WarehouseHistory']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $warehouseHistory['WarehouseHistory']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $warehouseHistory['WarehouseHistory']['id']), null, __('Are you sure you want to delete # %s?', $warehouseHistory['WarehouseHistory']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
				</table>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
				<div class="paging">
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
				</div>
			</div>
		</div>
	</div>

	<div class="actions">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse History'), array('action' => 'add')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
