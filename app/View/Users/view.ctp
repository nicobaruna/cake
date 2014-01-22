<div class="users view col-md-10">
	
	<div class="users-detail col-md-8">
		<div class="block">
			<h2><?php echo __('User'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($user['User']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Username'); ?></dt>
				<dd>
					<?php echo h($user['User']['username']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Firstname'); ?></dt>
				<dd>
					<?php echo h($user['User']['firstname']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Lastname'); ?></dt>
				<dd>
					<?php echo h($user['User']['lastname']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Last Login'); ?></dt>
				<dd>
					<?php echo h($user['User']['last_login']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($user['User']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Role'); ?></dt>
				<dd>
					<?php echo h($user['User']['role']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purhcase Orders'), array('controller' => 'purhcase_orders', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Gr Notes'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($user['GrNote'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('User Id'); ?></th>
					<th><?php echo __('Date'); ?></th>
					<th><?php echo __('Note'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($user['GrNote'] as $grNote): ?>
					<tr>
						<td><?php echo $grNote['id']; ?></td>
						<td><?php echo $grNote['user_id']; ?></td>
						<td><?php echo $grNote['date']; ?></td>
						<td><?php echo $grNote['note']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'gr_notes', 'action' => 'view', $grNote['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'gr_notes', 'action' => 'edit', $grNote['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gr_notes', 'action' => 'delete', $grNote['id']), null, __('Are you sure you want to delete # %s?', $grNote['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Purchase Requests'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($user['PurchaseRequest'])): ?>
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
				<?php foreach ($user['PurchaseRequest'] as $purchaseRequest): ?>
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

	<div class="related col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Purhcase Orders'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($user['PurhcaseOrder'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('User Id'); ?></th>
					<th><?php echo __('Date'); ?></th>
					<th><?php echo __('Note'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($user['PurhcaseOrder'] as $purhcaseOrder): ?>
					<tr>
						<td><?php echo $purhcaseOrder['id']; ?></td>
						<td><?php echo $purhcaseOrder['user_id']; ?></td>
						<td><?php echo $purhcaseOrder['date']; ?></td>
						<td><?php echo $purhcaseOrder['note']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'purhcase_orders', 'action' => 'view', $purhcaseOrder['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'purhcase_orders', 'action' => 'edit', $purhcaseOrder['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purhcase_orders', 'action' => 'delete', $purhcaseOrder['id']), null, __('Are you sure you want to delete # %s?', $purhcaseOrder['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>