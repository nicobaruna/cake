<div class="purchaseRequests view col-md-10">

	<div class="block">
		<!-- purchase request block start -->
		<div class="purchaseRequests-detail col-md-9">
			<div class="block">
				<div class="header">
					<h2><?php echo __('Purchase Request'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Id'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['id']); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Supplier'); ?></div>
						<div class="col-md-9">
							<?php echo $this->Html->link($purchaseRequest['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $purchaseRequest['Supplier']['id'])); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('User'); ?></div>
						<div class="col-md-9">
							<?php echo $this->Html->link($purchaseRequest['User']['username'], array('controller' => 'users', 'action' => 'view', $purchaseRequest['User']['id'])); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Date'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['date']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Note'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['note']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Purchase Order'); ?></div>
						<div class="col-md-9">
							<?php echo $this->Html->link($purchaseRequest['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $purchaseRequest['PurchaseOrder']['id'])); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Jangka Pembayaran'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['jangka_pembayaran']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Ordered By'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['ordered_by']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Status'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['status']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Made By'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['made_by']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Discount (%)'); ?></div>
						<div class="col-md-9">
							<?php echo h($purchaseRequest['PurchaseRequest']['discount']); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- purchase request block end -->

		<!-- actions block start -->
		<div class="col-md-3">
			<div class="actions block">
				<div class="header">
					<h2><?php echo __('Actions'); ?></h2>
				</div>
				<div class="content list-group">
					<?php echo $this->Html->link(__('Edit Purchase Request'), array('action' => 'edit', $purchaseRequest['PurchaseRequest']['id']),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Form->postLink(__('Delete Purchase Request'), array('action' => 'delete', $purchaseRequest['PurchaseRequest']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $purchaseRequest['PurchaseRequest']['id'])); ?> 
					<?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Purchase Request'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				</div>
			</div>
		</div>
		<!-- actions block end -->
	</div>

	
	<div class="related col-md-12">
		<div class="block">
			
			<div class="header">
				<h2><?php echo __('Related Tr Requests'); ?></h2>
			</div>
			<div class="content">
				
				<?php if (!empty($purchaseRequest['TrRequest'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Purchase Request Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Unit'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php $total = 0; foreach ($purchaseRequest['TrRequest'] as $trRequest): ?>
					<tr>
						<td><?php echo $trRequest['id']; ?></td>
						<td><?php echo $trRequest['purchase_request_id']; ?></td>
						<td><?php echo $trRequest['stock_id']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['BigUnit']['name']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']),array('class'=>'btn btn-danger	'), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
						</td>
					</tr>
				<?php 
				
					$total =  $total + ($trRequest['qty'] * $trRequest['harga']);
				
				?>
				<?php endforeach; ?>
				<?php
					$discount = $total * ($purchaseRequest['PurchaseRequest']['discount'] / 100);
					$total = $total - $discount;
				 ?>
				<tr>
					<td colspan="5">Total dengan discount</td>
					<td><?php echo $total; ?></td>
					<td></td>
				</tr>
				</table>
				<?php endif; ?>

			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>

		</div>
	</div>

</div>