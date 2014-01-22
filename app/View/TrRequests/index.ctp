<div class="trRequests index col-md-10">
	
	<div class="trRequests-detail">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Requests'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('purchase_request_id'); ?></th>
						<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
						<th><?php echo $this->Paginator->sort('qty'); ?></th>
						<th><?php echo $this->Paginator->sort('harga'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($trRequests as $trRequest): ?>
				<tr>
					<td><?php echo h($trRequest['TrRequest']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($trRequest['PurchaseRequest']['id'], array('controller' => 'purchase_requests', 'action' => 'view', $trRequest['PurchaseRequest']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($trRequest['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trRequest['Stock']['id'])); ?>
					</td>
					<td><?php echo h($trRequest['TrRequest']['qty']); ?>&nbsp;</td>
					<td><?php echo h($trRequest['TrRequest']['harga']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $trRequest['TrRequest']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trRequest['TrRequest']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trRequest['TrRequest']['id']), null, __('Are you sure you want to delete # %s?', $trRequest['TrRequest']['id'])); ?>
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
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
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
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('action' => 'add')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
