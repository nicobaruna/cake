<div class="stocks edit form col-md-10">

	<div class="stocks edit form col-md-9">
	<?php echo $this->Form->create('Stock'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Stock'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3">
						Name
					</div>
					<div class="col-md-6">
						<!-- insert name input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Unit
					</div>
					<div class="col-md-6">
						<!-- insert unit input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Warehouse
					</div>
					<div class="col-md-6">
						<!-- insert warehouse input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Status
					</div>
					<div class="col-md-6">
						<!-- insert status input here -->
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
				<!--
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('unit_id');
					echo $this->Form->input('warehouse_id');
					echo $this->Form->input('status');
					echo $this->Form->input('qty');
				?>
				-->
			</div>
			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stock.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('Stock.id'))); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Big Units'), array('controller' => 'big_units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Fix Puchase Orders'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Grnotes'), array('controller' => 'tr_grnotes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Pos'), array('controller' => 'tr_pos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
