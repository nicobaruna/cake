<div class="col-md-10">

	<div class="block">
		<div class="col-md-9">
			<div class="grNotes view">
				<div class="header">
					<h2><?php echo __('Gr Note'); ?></h2>
				</div>
				<div class="content">
					
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Supplier Id'); ?></div>
						<div class="col-md-9">
							
							<?php echo $this->Html->link($grNote['Supplier']['name'],array('controller'=>'suppliers','action'=>'view',$grNote['Supplier']['id']),array('class'=>'btn btn-success'))?>
							&nbsp;
						</div>
					</div>
					
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Date'); ?></div>
						<div class="col-md-9">
							<?php echo h(date('d M Y',strtotime($grNote['GrNote']['date']))); ?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Note'); ?></div>
						<div class="col-md-9">
							<?php echo h($grNote['GrNote']['note']); ?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Fixed Purchase Order Id'); ?></div>
						<div class="col-md-9">
							<?php echo $this->Html->link('Click to view Fix purchase ID',array('controller'=>'fixedpurchaseorders','action'=>'view',$grNote['FixedPurchaseOrder']['id']),array('class'=>'btn btn-success'))?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Jangka Pembayaran'); ?></div>
						<div class="col-md-9">
							<?php echo h($grNote['GrNote']['jangka_pembayaran']); ?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Received By'); ?></div>
						<div class="col-md-9">
							<?php echo h($grNote['GrNote']['received_by']); ?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Status'); ?></div>
						<div class="col-md-9">
							<?php echo h($grNote['GrNote']['status']); ?>
							&nbsp;
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3"><?php echo __('Discount'); ?></div>
						<div class="col-md-9">
							<?php echo h($grNote['GrNote']['discount']); ?>
							&nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<!-- block actions start -->
			<div class="block actions">
				<div class="header">
					<h2><?php echo __('Actions'); ?></h2>
				</div>
				<div class="content list-group">
					<?php echo $this->Html->link(__('Edit Gr Note'), array('action' => 'edit', $grNote['GrNote']['id']),array('class'=>'list-group-item')); ?>
					<?php echo $this->Form->postLink(__('Delete Gr Note'), array('action' => 'delete', $grNote['GrNote']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $grNote['GrNote']['id'])); ?>
					<?php echo $this->Html->link(__('List Gr Notes'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('New Gr Note'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?>
				</div>
			</div>
			<!-- block actions end -->
		</div>
	</div>

	<div class="related col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Item'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($grNote['TrGrnote'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					
				
					<th><?php echo __('Stock Name'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Unit'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<!-- <th class="actions"><?php echo __('Actions'); ?></th> -->
				</tr>
				<?php $total = 0; foreach ($grNote['TrGrnote'] as $trRequest): ?>
					<tr>
					

						<td><?php echo $trRequest['Stock']['name']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['BigUnit']['name']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
					<!--	<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
					</td> -->
					</tr>
				<?php
					 $subtotal = $total + ($trRequest['harga'] * $trRequest['qty']);
					 endforeach; 
				?>
				<?php
								$discount = $subtotal * ($grNote['GrNote']['discount'] / 100);
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
			<div class="footer actions">
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'btn btn-default')); ?>
			</div>
		</div>
	</div>

</div>