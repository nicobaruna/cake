<div class="trPos form">
<?php echo $this->Form->create('TrPo'); ?>
	<fieldset>
		<legend><?php echo __('Add Tr Po'); ?></legend>
	<?php
		echo $this->Form->input('purchase_order_id');
		echo $this->Form->input('stock_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('harga');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
