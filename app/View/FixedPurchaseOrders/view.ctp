<div class="fixedPurchaseOrders view col-md-10">
	
	<div class="fixedPurchaseOrders-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Fixed Purchase Order'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Supplier'); ?></dt>
				<dd>
					<?php echo $this->Html->link($fixedPurchaseOrder['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $fixedPurchaseOrder['Supplier']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('User'); ?></dt>
				<dd>
					<?php echo $this->Html->link($fixedPurchaseOrder['User']['id'], array('controller' => 'users', 'action' => 'view', $fixedPurchaseOrder['User']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Date'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['date']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Note'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['note']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Jangka Pembayaran'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['jangka_pembayaran']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Made By'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['made_by']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Status'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['status']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Discount'); ?></dt>
				<dd>
					<?php echo h($fixedPurchaseOrder['FixedPurchaseOrder']['discount']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>


	<div class="actions col-md-4">
		<h3><?php echo __('Actions'); ?></h3>
		<div>
			<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Fixed Purchase Order'), array('action' => 'edit', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?> </span>
			<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Fixed Purchase Order'), array('action' => 'delete', $fixedPurchaseOrder['FixedPurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $fixedPurchaseOrder['FixedPurchaseOrder']['id'])); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Fixed Purchase Orders'), array('action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New Fixed Purchase Order'), array('action' => 'add')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
		</div>
	</div>

</div>
