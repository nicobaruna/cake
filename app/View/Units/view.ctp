<div class="units view col-md-10">
	
	<div class="units-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Unit'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($unit['Unit']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($unit['Unit']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Status'); ?></dt>
				<dd>
					<?php echo h($unit['Unit']['status']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), null, __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Stocks'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($unit['Stock'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Name'); ?></th>
					<th><?php echo __('Unit Id'); ?></th>
					<th><?php echo __('Warehouse Id'); ?></th>
					<th><?php echo __('Status'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($unit['Stock'] as $stock): ?>
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
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
