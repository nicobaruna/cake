<div class="suppliers view col-md-10">
	
	<div class="suppliers-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Supplier'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($supplier['Supplier']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($supplier['Supplier']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Description'); ?></dt>
				<dd>
					<?php echo h($supplier['Supplier']['description']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Address'); ?></dt>
				<dd>
					<?php echo h($supplier['Supplier']['address']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Phone'); ?></dt>
				<dd>
					<?php echo h($supplier['Supplier']['phone']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Purchase Requests'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($supplier['PurchaseRequest'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Supplier Id'); ?></th>
					<th><?php echo __('User Id'); ?></th>
					<th><?php echo __('Date'); ?></th>
					<th><?php echo __('Note'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($supplier['PurchaseRequest'] as $purchaseRequest): ?>
					<tr>
						<td><?php echo $purchaseRequest['id']; ?></td>
						<td><?php echo $purchaseRequest['stock_id']; ?></td>
						<td><?php echo $purchaseRequest['supplier_id']; ?></td>
						<td><?php echo $purchaseRequest['user_id']; ?></td>
						<td><?php echo $purchaseRequest['date']; ?></td>
						<td><?php echo $purchaseRequest['note']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'purchase_requests', 'action' => 'view', $purchaseRequest['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchase_requests', 'action' => 'edit', $purchaseRequest['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchase_requests', 'action' => 'delete', $purchaseRequest['id']), null, __('Are you sure you want to delete # %s?', $purchaseRequest['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
