<div class="purchaseRequests form">
<?php echo $this->Form->create('PurchaseRequest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Purchase Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('supplier_id');
		echo $this->Form->hidden('user_id');
		echo $this->Form->hidden('date',array('value'=>$this->request->data['PurchaseRequest']['date']));
		echo $this->Form->input('note');
		echo $this->Form->hidden('purchase_order_id');
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->input('ordered_by');
		echo $this->Form->input('status');
		echo $this->Form->input('made_by');
		echo $this->Form->input('discount');
		$count = 0;
		foreach ($this->request->data['TrRequest'] as $item) {
			echo $this->Form->input('TrRequest.'.$count.'.id',array('label'=>'item'));
			echo $this->Form->input('TrRequest.'.$count.'.purchase_request_id',array('label'=>'item'));
			echo $this->Form->input('TrRequest.'.$count.'.stock_id',array('label'=>'item'));
			echo $this->Form->input('TrRequest.'.$count.'.qty',array('label'=>'Qty'));
			echo $this->Form->input('TrRequest.'.$count.'.big_unit_id',array('label'=>'Unit','options'=>$bigUnits,'default'=>$item['big_unit_id']));
			echo $this->Form->input('TrRequest.'.$count.'.harga',array('label'=>'Harga'));
			$count++;
		}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseRequest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseRequest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>