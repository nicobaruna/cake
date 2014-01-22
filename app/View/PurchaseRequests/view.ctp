<div class="purchaseRequests view">
<h2><?php echo __('Purchase Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseRequest['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $purchaseRequest['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseRequest['User']['id'], array('controller' => 'users', 'action' => 'view', $purchaseRequest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseRequest['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $purchaseRequest['PurchaseOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jangka Pembayaran'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['jangka_pembayaran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordered By'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['ordered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Made By'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['made_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($purchaseRequest['PurchaseRequest']['discount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchase Request'), array('action' => 'edit', $purchaseRequest['PurchaseRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchase Request'), array('action' => 'delete', $purchaseRequest['PurchaseRequest']['id']), null, __('Are you sure you want to delete # %s?', $purchaseRequest['PurchaseRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tr Requests'); ?></h3>
	<?php if (!empty($purchaseRequest['TrRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Purchase Request Id'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Harga'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($purchaseRequest['TrRequest'] as $trRequest): ?>
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>