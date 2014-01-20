<div class="grNotes view">
<h2><?php echo __('Gr Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Id'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['supplier_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grNote['User']['id'], array('controller' => 'users', 'action' => 'view', $grNote['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fixed Purchase Order Id'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['fixed_purchase_order_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jangka Pembayaran'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['jangka_pembayaran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Received By'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['received_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($grNote['GrNote']['discount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gr Note'), array('action' => 'edit', $grNote['GrNote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gr Note'), array('action' => 'delete', $grNote['GrNote']['id']), null, __('Are you sure you want to delete # %s?', $grNote['GrNote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gr Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gr Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tr Requests'); ?></h3>
	<?php if (!empty($grNote['TrRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Purchase Request Id'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Harga'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grNote['TrRequest'] as $trRequest): ?>
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
