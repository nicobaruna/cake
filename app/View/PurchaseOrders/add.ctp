<div class="purchaseOrders add col-md-10">

	<div class="col-md-9">
		<div class="purchaseOrders-detail form">
			<?php echo $this->Form->create('PurchaseOrder'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Purchase Order'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							User
						</div>
						<div class="col-md-9">
							<!-- insert user_id input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Date
						</div>
						<div class="col-md-9">
							<!-- input date input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert note input field here  -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Status
						</div>
						<div class="col-md-9">
							<!-- insert status input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- input jangka_pembayaran input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Ordered By
						</div>
						<div class="col-md-9">
							<!-- insert ordered_by input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Confirm By
						</div>
						<div class="col-md-9">
							<!-- insert confirm_by input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Discount
						</div>
						<div class="col-md-9">
							<!-- insert discount input field here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Gr Notes
						</div>
						<div class="col-md-9">
							<!-- insert gr_notes input field here -->
						</div>
					</div>
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="block actions">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
					<?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?>
			</div>
		</div>
	</div>

</div>