<div class="trWarehouses add col-md-10">	

	<div class="col-md-8">
		<div class="trWarehouses-detail form">
			<?php echo $this->Form->create('TrWarehouse'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Tr Warehouse'); ?></h2>
				</div>
				<div class="content">	
					<?php
						echo $this->Form->input('stock_id');
						echo $this->Form->input('warehouse_id');
						echo $this->Form->input('date');
					?>
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">	
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Warehouses'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>