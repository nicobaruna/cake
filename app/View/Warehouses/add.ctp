<div class="warehouses add col-md-10">
	
	<div class="col-md-8">
		<div class="warehouses-detail form">
			<?php echo $this->Form->create('Warehouse'); ?>
				<div class="block">
					<div class="header">
						<h2><?php echo __('Add Warehouse'); ?></h2>
					</div>
					<div class="content">
						<?php
							echo $this->Form->input('name');
							echo $this->Form->input('type');
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
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
