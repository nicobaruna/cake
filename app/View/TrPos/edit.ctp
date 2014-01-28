<div class="col-md-10">
	<div class="trPos form edit col-md-9">
	<?php echo $this->Form->create('TrPo'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Tr Po'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3">
						Purchase Order
					</div>
					<div class="col-md-6">
						<!-- insert puchase order input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Stock
					</div>
					<div class="col-md-6">
						<!-- insert stock input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Qty
					</div>
					<div class="col-md-6">
						<!-- insert Qty input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Harga
					</div>
					<div class="col-md-6">
						<!-- insert harga input here -->
					</div>
				</div>
				<!--
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('purchase_order_id');
					echo $this->Form->input('stock_id');
					echo $this->Form->input('qty');
					echo $this->Form->input('harga');
				?>
				-->
			</div>
			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrPo.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrPo.id'))); ?>
				<?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>
</div>