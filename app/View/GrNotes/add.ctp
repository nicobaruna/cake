<div class="grNotes form">
<?php echo $this->Form->create('GrNote'); ?>
	<fieldset>
		<legend><?php echo __('Add Gr Note'); ?></legend>
	<?php
		echo $this->Form->input('supplier_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('note');
		echo $this->Form->input('fixed_purchase_order_id');
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->input('received_by');
		echo $this->Form->input('status');
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gr Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
