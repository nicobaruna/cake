<div class="fixedPurchaseOrders index col-md-10">

	<div class="block">
		<div class="fixedPurchaseOrders-detail">

			<div class="header">
				<h2><?php echo __('Fixed Purchase Orders'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('note'); ?></th>
						<th><?php echo $this->Paginator->sort('jangka_pembayaran'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('discount'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($fixedPurchaseOrders as $fixedPurchaseOrder): ?>
				<tr>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($fixedPurchaseOrder['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $fixedPurchaseOrder['Supplier']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($fixedPurchaseOrder['User']['id'], array('controller' => 'users', 'action' => 'view', $fixedPurchaseOrder['User']['id'])); ?>
					</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['date']); ?>&nbsp;</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['note']); ?>&nbsp;</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['jangka_pembayaran']); ?>&nbsp;</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['status']); ?>&nbsp;</td>
					<td><?php echo h($fixedPurchaseOrder['GrNote']['discount']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Confirm'), array('action' => 'preview','FixedPurchaseOrder','GrNote', $fixedPurchaseOrder['GrNote']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fixedPurchaseOrder['FixedPurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?>
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


	<div class="block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Fixed Purchase Order'), array('action' => 'add')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>


</div>
