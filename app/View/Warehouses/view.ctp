<div class="warehouses view col-md-10">

	<div class="warehouses-detail col-md-8">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Warehouse'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($warehouse['Warehouse']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Name'); ?></div>
					<div class="col-md-9">
						<?php echo h($warehouse['Warehouse']['name']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Type'); ?></div>
					<div class="col-md-9">
						<?php echo h($warehouse['Warehouse']['type']); ?>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Warehouse'), array('action' => 'edit', $warehouse['Warehouse']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Warehouse'), array('action' => 'delete', $warehouse['Warehouse']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])); ?> 
				<?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Warehouse'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h3><?php echo __('Related Stocks'); ?></h3>
			</div>
			<div class="content">
				<?php if (!empty($warehouse['Stock'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stock['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stock['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stock['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $stock['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'btn btn-default')); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>