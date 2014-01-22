<div class="suppliers index col-md-10">
	
	<div class="suppliers-detail">
		<div class="block">
			
			<div class="header">
				<h2><?php echo __('Suppliers'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('description'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($suppliers as $supplier): ?>
				<tr>
					<td><?php echo h($supplier['Supplier']['id']); ?>&nbsp;</td>
					<td><?php echo h($supplier['Supplier']['name']); ?>&nbsp;</td>
					<td><?php echo h($supplier['Supplier']['description']); ?>&nbsp;</td>
					<td><?php echo h($supplier['Supplier']['address']); ?>&nbsp;</td>
					<td><?php echo h($supplier['Supplier']['phone']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $supplier['Supplier']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplier['Supplier']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?>
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
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
