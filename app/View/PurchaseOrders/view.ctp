<div class="purchaseOrders view col-md-10">
	
	<div class="purchaseOrders-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Purchase Order'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('User'); ?></dt>
				<dd>
					<?php echo $this->Html->link($purchaseOrder['User']['id'], array('controller' => 'users', 'action' => 'view', $purchaseOrder['User']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Date'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['date']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Note'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['note']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Status'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['status']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Jangka Pembayaran'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['jangka_pembayaran']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Ordered By'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['ordered_by']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Confirm By'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['confirm_by']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Discount'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['discount']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Gr Note Id'); ?></dt>
				<dd>
					<?php echo h($purchaseOrder['PurchaseOrder']['gr_note_id']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>


	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Purchase Order'), array('action' => 'edit', $purchaseOrder['PurchaseOrder']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Purchase Order'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>


	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Tr Requests'); ?></h2>
			</div>
			<div class="content">
				
				<?php if (!empty($purchaseOrder['TrRequest'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Purchase Request Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($purchaseOrder['TrRequest'] as $trRequest): ?>
					<tr>
						<td><?php echo $trRequest['id']; ?></td>
						<td><?php echo $trRequest['purchase_request_id']; ?></td>
						<td><?php echo $trRequest['stock_id']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>

			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
