<div class="suppliers add col-md-10">

	<div class="col-md-9">
		<div class="suppliers-detail form">
		<?php echo $this->Form->create('Supplier'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Supplier'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Name
						</div>
						<div class="col-md-9">
							<!-- insert name input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Description
						</div>
						<div class="col-md-9">
							<!-- insert description input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Address
						</div>
						<div class="col-md-9">
							<!-- insert address input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Phone
						</div>
						<div class="col-md-9">
							<!-- insert phone input here -->
						</div>
					</div>
					<!-- 
					<?php
						echo $this->Form->input('name');
						echo $this->Form->input('description');
						echo $this->Form->input('address');
						echo $this->Form->input('phone');
					?>
					-->
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
