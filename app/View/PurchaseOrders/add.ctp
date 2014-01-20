<div class="purchaseOrders form">
<?php echo $this->Form->create('PurchaseOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Purchase Order'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('note');
		echo $this->Form->input('status');
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->input('ordered_by');
		echo $this->Form->input('confirm_by');
		echo $this->Form->input('discount');
		echo $this->Form->input('gr_note_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
