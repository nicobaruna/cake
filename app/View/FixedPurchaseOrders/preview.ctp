<div class="purchaseOrders content col-md-6">
<?php echo $this->Form->create('FixedPurchaseOrder'); ?>
	<div class="block">
		<div class="content">
			<div class="header">
				<h2><?php echo __('Edit Fixed Purchase Order'); ?></h2>
			</div>
		
	<?php

		echo $this->Form->input('supplier_id');
		echo $this->Form->hidden('user_id',array('value'=>$this->Session->read('Auth.User.id')));
		echo $this->Form->hidden('date');
		echo $this->Form->input('note',array('type'=>'textarea','class'=>'cle'));
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->hidden('status',array('value'=>'posted'));
		echo $this->Form->input('discount');
		echo $this->Form->input('made_by');
	?>
	</div>
	</div>
	<fieldset>
		<div class="block">
			<div class="content">
				<div class="header">
					<h2>Items</h2>
				</div>
				
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Item Name</th>
							<th>qty</th>
							<th>Unit</th>
							<th>Price</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
						$count = 0;
						foreach ($this->request->data['TrFixPurhcaseOrder'] as $item) {
					?>
						<tr>
							<td><?php echo $this->Form->input('TrFixPurhcaseOrder.'.$count.'.stock_id',array('label'=>false)); ?></td>
							<td><?php echo $this->Form->input('TrFixPurhcaseOrder.'.$count.'.qty',array('label'=>false));?></td>
							<td><?php echo $this->Form->input('TrFixPurhcaseOrder.'.$count.'.big_unit_id',array('label'=>False,'options'=>$bigUnits,'default'=>$item['big_unit_id'])); ?></td>
							<td><?php echo $this->Form->input('TrFixPurhcaseOrder.'.$count.'.harga',array('label'=>false)); ?></td>
						
						</tr>
					<?php $count++; } ?>
					</tbody>
				</table>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions col-md-4">
	<div class="block">
	<div class="content">
		<div class="header">
			<h2><?php echo __('Actions'); ?></h2>
		</div>
		<div>
			<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?></span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Note'), array('action' => 'index')); ?></span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
			<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
		</div>
	</div>
	</div>
</div>
