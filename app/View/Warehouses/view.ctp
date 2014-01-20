<div class="warehouses view">
<h2><?php echo __('Warehouse'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($warehouse['Warehouse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($warehouse['Warehouse']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($warehouse['Warehouse']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Warehouse'), array('action' => 'edit', $warehouse['Warehouse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Warehouse'), array('action' => 'delete', $warehouse['Warehouse']['id']), null, __('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stocks'); ?></h3>
	<?php if (!empty($warehouse['Stock'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Warehouse Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($warehouse['Stock'] as $stock): ?>
		<tr>
			<td><?php echo $stock['id']; ?></td>
			<td><?php echo $stock['name']; ?></td>
			<td><?php echo $stock['unit_id']; ?></td>
			<td><?php echo $stock['warehouse_id']; ?></td>
			<td><?php echo $stock['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stock['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stock['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stock['id']), null, __('Are you sure you want to delete # %s?', $stock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
