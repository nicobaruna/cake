<div class="suppliers form col-md-6">
	<?php echo $this->Form->create('Supplier'); ?>
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Supplier'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('description');
				echo $this->Form->input('address');
				echo $this->Form->input('phone');
			?>
		</div>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>

		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Supplier.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Supplier.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
	</div>
</div>
