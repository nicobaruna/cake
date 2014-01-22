<div class="suppliers add col-md-10">

	<div class="col-md-8">
		<div class="suppliers-detail form">
		<?php echo $this->Form->create('Supplier'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Supplier'); ?></h2>
				</div>
				<div class="content">
					<?php
						echo $this->Form->input('name');
						echo $this->Form->input('description');
						echo $this->Form->input('address');
						echo $this->Form->input('phone');
					?>
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
