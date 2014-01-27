<div class="fixedPurchaseOrders view col-md-10">
	
	<div class="fixedPurchaseOrders-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Fixed Purchase Order'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Supplier'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($fixedPurchaseOrder['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $fixedPurchaseOrder['Supplier']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('User'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($fixedPurchaseOrder['User']['id'], array('controller' => 'users', 'action' => 'view', $fixedPurchaseOrder['User']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Date'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['date']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Note'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['note']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Jangka Pembayaran'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['jangka_pembayaran']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Made By'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['made_by']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Status'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['status']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Discount'); ?></div>
					<div class="col-md-9">
						<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['discount']); ?>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="actions col-md-3">
		<div class="header">
			<h2><?php echo __('Actions'); ?></h2>
		</div>
		<div class="content list-group">
			<?php echo $this->Html->link(__('Edit Fixed Purchase Order'), array('action' => 'edit', $fixedPurchaseOrder['FixedPurchaseOrder']['id']),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Form->postLink(__('Delete Fixed Purchase Order'), array('action' => 'delete', $fixedPurchaseOrder['FixedPurchaseOrder']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?> 
			<?php echo $this->Html->link(__('List Fixed Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('New Fixed Purchase Order'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
		</div>
	</div>

</div>
