<div class="trPos form add col-md-10">

	<div class="col-md-8">
		<div class="trPos-detail form">
			<?php echo $this->Form->create('TrPo'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Tr Po'); ?></h2>
				</div>
				<div class="content">	
					<?php
						echo $this->Form->input('purchase_order_id');
						echo $this->Form->input('stock_id');
						echo $this->Form->input('qty');
						echo $this->Form->input('harga');
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
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
