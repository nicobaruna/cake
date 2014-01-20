<div class="suppliers form">
<?php echo $this->Form->create('Supplier'); ?>
	<fieldset>
		<legend><?php echo __('Add Supplier'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
