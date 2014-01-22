<div class="purchaseOrders view col-md-10">
	
		
	<div class="col-md-9">
		<div class="block">
			<div class="header">
				<h2>Purchase Order</h2>
			</div>
			
			<div class="content controls">
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('User'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Html->link($purchaseOrder['User']['username'], array('controller' => 'users', 'action' => 'view', $purchaseOrder['User']['id']),array('class'=>'btn btn-success')); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Date'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['date']); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Note'); ?>
					</div>
					<div class="col-md-9">
						<?php echo h($purchaseOrder['PurchaseOrder']['note']); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Status'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['status']); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Ordered by'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['ordered_by']); ?>
					</div>
				</div>
				
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('confirm by'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['confirm_by']); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('discount'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['discount']); ?>
					</div>
				</div>
				
				
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Gr Note Id'); ?>
					</div>
					<div class=col-md-9>
						<?php echo h($purchaseOrder['PurchaseOrder']['gr_note_id']); ?>
					</div>
				</div>
				
				
			</div>
			
		</div>
	</div>


	<div class="col-md-3">
		<div class="block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Purchase Order'), array('action' => 'edit', $purchaseOrder['PurchaseOrder']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Purchase Order'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), array('class'=>'list-group-item'), __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?> 
				<?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>


	<div class="col-md-12">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Item list'); ?></h2>
			</div>
			<div class="content">
				
				<?php if (!empty($purchaseOrder['TrPo'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					
					<th><?php echo __('Item'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Unit'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				
				<?php $total = 0; foreach ($purchaseOrder['TrPo'] as $trRequest): ?>
					<tr>
						<td><?php echo $trRequest['id']; ?></td>
						
						<td><?php echo $trRequest['Stock']['name']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['BigUnit']['name']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
						</td>
					</tr>
					<?php 
							$diskon = ($trRequest['qty'] * $trRequest['harga'] * ( $purchaseOrder['PurchaseOrder']['discount'] / 100 ));
							$total = $total + ( $trRequest['qty'] * $trRequest['harga'] - $diskon ) ; 
					?>
				<?php endforeach; ?>
					<tr>
						<td colspan="4">
							Total dengan diskon
						</td>
						<td>
							Rp. <?php echo number_format($total);  ?>
						</td>
						<td></td>
					</tr>
				</table>
				<?php endif; ?>

			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-success"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
