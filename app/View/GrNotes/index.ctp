<div class="col-md-10 grNotes index">
	
	<div class="grNotes-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Gr Notes'); ?></h2>
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
						<th><?php echo $this->Paginator->sort('received_by'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('discount'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($grNotes as $grNote): ?>
				<tr>
					<td><?php echo h($grNote['PurchaseOrder']['id']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['supplier_id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($grNote['User']['id'], array('controller' => 'users', 'action' => 'view', $grNote['User']['id'])); ?>
					</td>
					<td><?php echo h($grNote['PurchaseOrder']['date']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['note']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['jangka_pembayaran']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['confirm_by']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['status']); ?>&nbsp;</td>
					<td><?php echo h($grNote['PurchaseOrder']['discount']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Confirm'), array('action' => 'preview','GrNote','PurchaseOrder', $grNote['PurchaseOrder']['id']),array('class'=>'btn btn-success')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grNote['PurchaseOrder']['id']),array('class'=>'btn btn-info')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grNote['GrNote']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $grNote['GrNote']['id'])); ?>
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
				<?php echo $this->Html->link(__('New Gr Note'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
