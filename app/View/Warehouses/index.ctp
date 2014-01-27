<div class="warehouses col-md-10">
	
	<div class="warehouses-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Warehouses'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('type'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($warehouses as $warehouse): ?>
				<tr>
					<td><?php echo h($warehouse['Warehouse']['id']); ?>&nbsp;</td>
					<td><?php echo h($warehouse['Warehouse']['name']); ?>&nbsp;</td>
					<td><?php echo h($warehouse['Warehouse']['type']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $warehouse['Warehouse']['id']),array('class'=>'btn btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $warehouse['Warehouse']['id']),array('class'=>'btn btn-info')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $warehouse['Warehouse']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])); ?>
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
		<div class="block actions">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('New Warehouse'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
