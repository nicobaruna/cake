<div class="trGrnotes edit form cold-md-6">
	<?php echo $this->Form->create('TrGrnote'); ?>
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Tr Grnote'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('gr_note_id');
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
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrGrnote.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrGrnote.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
	</div>
</div>
