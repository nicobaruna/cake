<div class="trRequests add col-md-10">
	
	<div class="col-md-9">
		<div class="trRequests-detail form">
			<?php echo $this->Form->create('TrRequest'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Tr Request'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Purchase Request
						</div>
						<div class="col-md-6">
							<!-- input purchase request input here -->
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
							<!-- insert qty input here -->
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
						echo $this->Form->input('purchase_request_id');
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
	</div>

	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Tr Requests'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>