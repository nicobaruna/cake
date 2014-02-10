<div class="purchaseOrders view col-md-10">
	
	<div class="block">	
		<div class="purchaseOrders-detail col-md-9">
			<div class="block">
				<div class="header">
					<h2>Purchase Order</h2>
				</div>
				
				<div class="content controls">
					
					
					
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
							<?php echo html_entity_decode($purchaseOrder['PurchaseOrder']['note']); ?>
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
							<?php echo $this->Html->link($purchaseOrder['User']['username'], array('controller' => 'users', 'action' => 'view', $purchaseOrder['PurchaseOrder']['confirm_by']),array('class'=>'btn btn-default')); ?>
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
							<?php echo $this->Html->link('Click to view Gr Notes',array('controller'=>'grnotes','action'=>'view',$purchaseOrder['PurchaseOrder']['gr_note_id']),array('class'=>'btn btn-success'))?>
						</div>
					</div>
					
					
				</div>
				
			</div>
		</div>


		<div class="col-md-3">
			<!-- actions block start -->
			<div class="actions block">
				<div class="header">
					<h3><?php echo __('Actions'); ?></h3>
				</div>
				<div class="content list-group">
					<?php echo $this->Html->link(__('Edit Purchase Order'), array('action' => 'edit', $purchaseOrder['PurchaseOrder']['id']),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Form->postLink(__('Delete Purchase Order'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), array('class'=>'list-group-item'), __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?> 
					<?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'getAll'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				</div>
			</div>
			<!-- actions block end -->
		</div>
	</div>

	<div class="block">
			<!-- item list block start -->
		<div class="col-md-12">
			<div class="item-list block">
				<div class="header">
					<h2><?php echo __('Item list'); ?></h2>
				</div>
				<div class="content">
					
					<?php if (!empty($purchaseOrder['TrPo'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
					<tr>
						
						
						<th><?php echo __('Item'); ?></th>
						<th><?php echo __('Qty'); ?></th>
						<th><?php echo __('Unit'); ?></th>
						<th><?php echo __('Harga'); ?></th>
						
					</tr>
					
					<?php $total = 0; foreach ($purchaseOrder['TrPo'] as $trRequest): ?>
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
								$discount = $subtotal * ($purchaseOrder['PurchaseOrder']['discount'] / 100);
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
				<div class="footer">
					<div class="actions">
						<div>
							<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'btn btn-default')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- item list block end -->
	</div>

</div>
