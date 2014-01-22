<div class="trRequests view col-md-10">

	<div class="trRequests-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Tr Request'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($trRequest['TrRequest']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Purchase Request'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trRequest['PurchaseRequest']['id'], array('controller' => 'purchase_requests', 'action' => 'view', $trRequest['PurchaseRequest']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Stock'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trRequest['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trRequest['Stock']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Qty'); ?></dt>
				<dd>
					<?php echo h($trRequest['TrRequest']['qty']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Harga'); ?></dt>
				<dd>
					<?php echo h($trRequest['TrRequest']['harga']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Tr Request'), array('action' => 'edit', $trRequest['TrRequest']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Tr Request'), array('action' => 'delete', $trRequest['TrRequest']['id']), null, __('Are you sure you want to delete # %s?', $trRequest['TrRequest']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>