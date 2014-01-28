<div class="col-md-10">
	<div class="fixedPurchaseOrders form col-md-9">
		<?php echo $this->Form->create('FixedPurchaseOrder'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Edit Fixed Purchase Order'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-6">
							<!-- insert supplier input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Date
						</div>
						<div class="col-md-6">
							<!-- insert date input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-6">
							<!-- insert note input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-6">
							<!-- insert jangka pembayaran by input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							made By
						</div>
						<div class="col-md-6">
							<!-- insert made by input here -->
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
							Discount
						</div>
						<div class="col-md-6">
							<!-- insert discount input here -->
						</div>
					</div>
					<!--
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
					-->
				</div>
				<div class="footer">
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
	</div>

	<div class="col-md-3">
		<div class="block actions">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FixedPurchaseOrder.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('FixedPurchaseOrder.id'))); ?>
				<?php echo $this->Html->link(__('List Fixed Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>
</div>