<div class="suppliers view col-md-10">
	
	<div class="suppliers-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Supplier'); ?></h2>
			</div>
			<div class="content">
				<div class="col-md-3"><?php echo __('Id'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['id']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Name'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['name']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Description'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['description']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Address'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['address']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Phone'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['phone']); ?>
					&nbsp;
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="actions">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?> 
				<?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Supplier'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'purchase_requests', 'action' => 'view', $purchaseRequest['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchase_requests', 'action' => 'edit', $purchaseRequest['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchase_requests', 'action' => 'delete', $purchaseRequest['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $purchaseRequest['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
