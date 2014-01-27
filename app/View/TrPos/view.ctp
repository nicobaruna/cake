<div class="trPos view col-md-10">

	<div class="trPos-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Po'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($trPo['TrPo']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Purchase Order'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trPo['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $trPo['PurchaseOrder']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Stock'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trPo['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trPo['Stock']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Qty'); ?></div>
					<div class="col-md-9">
						<?php echo h($trPo['TrPo']['qty']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Harga'); ?></div>
					<div class="col-md-9">
						<?php echo h($trPo['TrPo']['harga']); ?>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Tr Po'), array('action' => 'edit', $trPo['TrPo']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Tr Po'), array('action' => 'delete', $trPo['TrPo']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $trPo['TrPo']['id'])); ?> 
				<?php echo $this->Html->link(__('List Tr Pos'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Po'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
