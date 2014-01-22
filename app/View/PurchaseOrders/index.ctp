<div class="col-md-10 purchaseOrders index">
	
	<div class="purchaseOrders-detail">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Unconfirm Purchase Orders'); ?></h2>
			</div>
			<div class="content">
				
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('note'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('jangka_pembayaran'); ?></th>
						<th><?php echo $this->Paginator->sort('ordered_by'); ?></th>
						<th><?php echo $this->Paginator->sort('confirm_by'); ?></th>
						<th><?php echo $this->Paginator->sort('discount'); ?></th>
						
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($purchaseOrders as $purchaseOrder): ?>
				<tr>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($purchaseOrder['User']['id'], array('controller' => 'users', 'action' => 'view', $purchaseOrder['User']['id'])); ?>
					</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['date']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['note']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['status']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['jangka_pembayaran']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['ordered_by']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['made_by']); ?>&nbsp;</td>
					<td><?php echo h($purchaseOrder['PurchaseRequest']['discount']); ?>&nbsp;</td>

					<td class="actions">
						<?php echo $this->Html->link(__('Confirm'), array('action' => 'preview', 'PurchaseOrder','PurchaseRequest',$purchaseOrder['PurchaseRequest']['id'])); ?>
						<?php echo $this->Form->postLink(__('Cancel'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?>
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
						echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
					?>
				</div>
				
			</div>
		</div>
	</div>


	<div class="actions">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>


</div>
