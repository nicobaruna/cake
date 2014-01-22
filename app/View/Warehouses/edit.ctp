<div class="warehouses edit form col-md-6">
	<?php echo $this->Form->create('Warehouse'); ?>
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Warehouse'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('type');
			?>
		</div>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Warehouse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Warehouse.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
	</div>
</div>
