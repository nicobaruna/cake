<div class="stocks form">
<?php echo $this->Form->create('Stock'); ?>
	<fieldset>
		<legend><?php echo __('Edit Stock'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('unit_id');
		echo $this->Form->input('warehouse_id');
		echo $this->Form->input('status');
		echo $this->Form->input('qty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stock.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Stock.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Big Units'), array('controller' => 'big_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Fix Puchase Orders'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Grnotes'), array('controller' => 'tr_grnotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Pos'), array('controller' => 'tr_pos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
