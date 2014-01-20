<div class="bigUnits form">
<?php echo $this->Form->create('BigUnit'); ?>
	<fieldset>
		<legend><?php echo __('Add Big Unit'); ?></legend>
	<?php
		echo $this->Form->input('stock_id');
		echo $this->Form->input('name');
		echo $this->Form->input('equivalent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Big Units'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
