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
							<?php echo html_entity_decode($purchaseRequest['PurchaseRequest']['note']); ?>	
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Purchase Order'); ?></div>
						<div class="col-md-9">
							<?php echo $this->Html->link("click to see purchase order", array('controller' => 'purchase_orders', 'action' => 'view', $purchaseRequest['PurchaseOrder']['id'])); ?>	
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

	
	<div class="related col-md-9">
		<div class="block">
			
			<div class="header">
				<h2><?php echo __('Items'); ?></h2>
			</div>
			<div class="content">
				
				<?php if (!empty($purchaseRequest['TrRequest'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					
					
					<th><?php echo __('Stock'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Unit'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					
				</tr>
				<?php $total = 0; foreach ($purchaseRequest['TrRequest'] as $trRequest): ?>
					<tr>
						
						<td><?php echo $trRequest['Stock']['name']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['BigUnit']['name']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
						
					</tr>
				<?php
					 $subtotal = $total + ($trRequest['harga'] * $trRequest['qty']);
					 endforeach; 
				?>
				<?php
								$discount = $subtotal * ($purchaseRequest['PurchaseRequest']['discount'] / 100);
								$total = $subtotal - $discount;
								$ppn = $total * (10/100);
								$grandTotal = $ppn + $total;
							 ?>
							 <tr>
								<td colspan="3">Sub Total</td>
								<td>Rp. <?php echo $subtotal; ?></td>
								<!--<td></td> -->
							</tr>
							<tr>
								<td colspan="3">Discount</td>
								<td>Rp. <?php echo $discount; ?></td>
								<!--<td></td> -->
							</tr>
							<tr>
								<td colspan="3">Total dengan discount</td>
								<td>Rp. <?php echo $total; ?></td>
								<!--<td></td> -->
							</tr>
							<tr>
								<td colspan="3">PPN</td>
								<td>Rp. <?php echo $ppn; ?></td>
								<!--<td></td> -->
							</tr>
							
							<tr>
								<td colspan="3">Grand Total</td>
								<td>Rp. <?php echo $grandTotal; ?></td>
								<!--<td></td> -->
							</tr>
				</table>
				<?php endif; ?>

			</div>
			

		</div>
	</div>

</div>