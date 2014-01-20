<div class="fixedPurchaseOrders form">
<?php echo $this->Form->create('FixedPurchaseOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Fixed Purchase Order'); ?></legend>
	<?php
		echo $this->Form->input('supplier_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('note');
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->input('made_by');
		echo $this->Form->input('status');
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fixed Purchase Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
