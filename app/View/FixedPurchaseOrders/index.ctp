<div class="fixedPurchaseOrders index col-md-10">

	<div class="col-md-9">
		<div class="fixedPurchaseOrders-detail block">

			<div class="header">
				<h2><?php echo __('Unconfirm Fixed Purchase Orders'); ?></h2>
			</div>
			<div class="content">
				<?php if(!empty($fixedPurchaseOrders)) { ?>
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('jangka_pembayaran'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($fixedPurchaseOrders as $fixedPurchaseOrder): ?>
				<tr>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($fixedPurchaseOrder['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $fixedPurchaseOrder['Supplier']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($fixedPurchaseOrder['User']['username'], array('controller' => 'users', 'action' => 'view', $fixedPurchaseOrder['User']['id'])); ?>
					</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['date']); ?>&nbsp;</td>
					
					<td><?php echo h($fixedPurchaseOrder['GrNote']['jangka_pembayaran']); ?>&nbsp;</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['status']); ?>&nbsp;</td>
					
					<td class="actions">
						<?php echo $this->Html->link(__('Confirm'), array('action' => 'preview','FixedPurchaseOrder','GrNote', $fixedPurchaseOrder['GrNote']['id']),array('class'=>'btn btn-success')); ?>
						
						<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'GrNotes','action' => 'delete', $fixedPurchaseOrder['GrNote']['id'],'FixedPurchaseOrders','index'),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
				</table>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
				<div class="paging">
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-default'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
				?>
				</div>
				<?php } else { ?>
					<div class="alert alert-warning">
						 	 There's no unconfirm Fixed Purchase Orders , <?php echo $this->Html->link(__('View Fixed Purchase Orders'),array('action'=>'getAll'),array('class'=>'btn btn-success')) ?>
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
						</div>
				<?php } ?>
			</div>

		</div>
	</div>


	<div class="col-md-3">
		<!-- search block start -->
		<div class="search block">
			<div class="header">
				<h2>Search</h2>
			</div>
			<div class="content">
				<?php
					echo $this->element('search_request', array(
				    "model" => 'PurchaseRequest', 
					));
				?>
			</div>
		</div>
		<!-- search block end -->
		<!-- actions block start -->
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List FixPO'), array('action' => 'getAll'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				 
			</div>
		</div>
		<!-- actions block end -->
	</div>


</div>
