<div class="stock index col-md-10">
	
	<div class="stocks-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Stocks'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
						<th><?php echo $this->Paginator->sort('warehouse_id'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('qty'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stocks as $stock): ?>
				<tr>
					<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
					<td><?php echo h($stock['Stock']['name']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($stock['Unit']['name'], array('controller' => 'units', 'action' => 'view', $stock['Unit']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($stock['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $stock['Warehouse']['id'])); ?>
					</td>
					<td><?php echo h($stock['Stock']['status']); ?>&nbsp;</td>
					<td><?php echo h($stock['Stock']['qty']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id']),array('class'=>'btn btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id']),array('class'=>'btn btn-info')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?>
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
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('New Stock'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Big Units'), array('controller' => 'big_units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Fix Puchase Orders'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Grnotes'), array('controller' => 'tr_grnotes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Pos'), array('controller' => 'tr_pos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
