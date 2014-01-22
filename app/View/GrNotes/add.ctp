<div class="grNotes add col-md-10">

	<div class="col-md-8">
		<div class="grNotes-detail form">
			<?php echo $this->Form->create('GrNote'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Gr Note'); ?></h2>
				</div>
				<div class="content">
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
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>


	<div class="col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
