<div class="fixedPurchaseOrders form col-md-6">
	<?php echo $this->Form->create('FixedPurchaseOrder'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Fixed Purchase Order'); ?></h2>
			</div>
			<div class="content">
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('supplier_id');
					echo $this->Form->input('user_id');
					echo $this->Form->input('date');
					echo $this->Form->input('note');
					echo $this->Form->input('jangka_pembayaran');
					echo $this->Form->input('made_by');
					echo $this->Form->input('status');
					echo $this->Form->input('discount');
				?>
			<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
</div>

<div class="block">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<div>
			<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FixedPurchaseOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FixedPurchaseOrder.id'))); ?></span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Fixed Purchase Orders'), array('action' => 'index')); ?></span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
		</div>
	</div>
</div>
