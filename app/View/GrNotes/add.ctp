<div class="grNotes add col-md-10">

	<div class="col-md-9">
		<div class="grNotes-detail form">
			<?php echo $this->Form->create('GrNote'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Gr Note'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert supplier input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							User
						</div>
						<div class="col-md-9">
							<!-- insert user input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Date
						</div>
						<div class="col-md-9">
							<!-- insert date input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert note input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Fixed Purchase Order
						</div>
						<div class="col-md-9">
							<!-- insert fixed purchase order here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert jangka pembayaran input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Receiver By
						</div>
						<div class="col-md-9">
							<!-- insert received by input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Status
						</div>
						<div class="col-md-9">
							<!-- insert status input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Discount
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
						</div>
					</div>
					<!--
					<?php
						echo $this->Form->input('supplier_id');
						echo $this->Form->input('user_id');
						echo $this->Form->input('date');
						echo $this->Form->input('note');
						echo $this->Form->input('fixed_purchase_order_id');
						echo $this->Form->input('jangka_pembayaran');
						echo $this->Form->input('received_by');
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
	</div>


	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Gr Notes'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
