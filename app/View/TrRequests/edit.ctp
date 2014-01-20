<div class="trRequests form">
<?php echo $this->Form->create('TrRequest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tr Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('purchase_request_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrRequest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrRequest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </li>
	</ul>
</div>
