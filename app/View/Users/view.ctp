<div class="users view col-md-10">
	
	<div class="users-detail col-md-8">
		<div class="block">
			<div class="header">
				<h2><?php echo __('User'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Username'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['username']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Email'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['email']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Firstname'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['firstname']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Lastname'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['lastname']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Last Login'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['last_login']); ?>
						&nbsp;
					</div>
				</div>
				<div classclass="form-row">
					<div class="col-md-3"><?php echo __('Created'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['created']); ?>
						&nbsp;
					</div>
				</div>
				<div classclass="form-row">
					<div class="col-md-3"><?php echo __('Role'); ?></div>
					<div class="col-md-9">
						<?php echo h($user['User']['role']); ?>
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
				<?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> 
				<?php echo $this->Html->link(__('List Users'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purhcase Orders'), array('controller' => 'purhcase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'gr_notes', 'action' => 'view', $grNote['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'gr_notes', 'action' => 'edit', $grNote['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gr_notes', 'action' => 'delete', $grNote['id']), null, __('Are you sure you want to delete # %s?', $grNote['id']),array('class'=>'btn btn-danger')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
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
						<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'purhcase_orders', 'action' => 'view', $purhcaseOrder['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'purhcase_orders', 'action' => 'edit', $purhcaseOrder['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purhcase_orders', 'action' => 'delete', $purhcaseOrder['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $purhcaseOrder['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

</div>