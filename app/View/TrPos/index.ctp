<div class="trPos index col-md-10">
	
	<div class="trPos-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Pos'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('purchase_order_id'); ?></th>
						<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
						<th><?php echo $this->Paginator->sort('qty'); ?></th>
						<th><?php echo $this->Paginator->sort('harga'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($trPos as $trPo): ?>
				<tr>
					<td><?php echo h($trPo['TrPo']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($trPo['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $trPo['PurchaseOrder']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($trPo['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trPo['Stock']['id'])); ?>
					</td>
					<td><?php echo h($trPo['TrPo']['qty']); ?>&nbsp;</td>
					<td><?php echo h($trPo['TrPo']['harga']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $trPo['TrPo']['id']),array('class'=>'btn btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trPo['TrPo']['id']),array('class'=>'btn btn-info')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trPo['TrPo']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trPo['TrPo']['id'])); ?>
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
					echo $this->Paginator->numbers(array('separator' => ''),array('class'=>'btn btn-default'));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
				?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<!-- actions block start -->
		<div class="block actions">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('New Tr Po'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
