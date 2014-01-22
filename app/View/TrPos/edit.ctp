<div class="trPos form edit col-md-6">
<?php echo $this->Form->create('TrPo'); ?>
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Tr Po'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('purchase_order_id');
				echo $this->Form->input('stock_id');
				echo $this->Form->input('qty');
				echo $this->Form->input('harga');
			?>
		</div>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrPo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrPo.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
	</div>
</div>
