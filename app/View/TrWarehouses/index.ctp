<div class="trWarehouses index">
	<h2><?php echo __('Tr Warehouses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('warehouse_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trWarehouses as $trWarehouse): ?>
	<tr>
		<td><?php echo h($trWarehouse['TrWarehouse']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trWarehouse['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trWarehouse['Stock']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trWarehouse['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $trWarehouse['Warehouse']['id'])); ?>
		</td>
		<td><?php echo h($trWarehouse['TrWarehouse']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trWarehouse['TrWarehouse']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trWarehouse['TrWarehouse']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trWarehouse['TrWarehouse']['id']), null, __('Are you sure you want to delete # %s?', $trWarehouse['TrWarehouse']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tr Warehouse'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </li>
	</ul>
</div>
