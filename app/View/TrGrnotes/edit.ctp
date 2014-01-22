<div class="trGrnotes form">
<?php echo $this->Form->create('TrGrnote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tr Grnote'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gr_note_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrGrnote.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrGrnote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>