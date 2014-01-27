<div class="trRequests view col-md-10">

	<div class="trRequests-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Request'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($trRequest['TrRequest']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Purchase Request'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trRequest['PurchaseRequest']['id'], array('controller' => 'purchase_requests', 'action' => 'view', $trRequest['PurchaseRequest']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Stock'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trRequest['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trRequest['Stock']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Qty'); ?></div>
					<div class="col-md-9">
						<?php echo h($trRequest['TrRequest']['qty']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Harga'); ?></div>
					<div class="col-md-9">
						<?php echo h($trRequest['TrRequest']['harga']); ?>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Tr Request'), array('action' => 'edit', $trRequest['TrRequest']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Tr Request'), array('action' => 'delete', $trRequest['TrRequest']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $trRequest['TrRequest']['id'])); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
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