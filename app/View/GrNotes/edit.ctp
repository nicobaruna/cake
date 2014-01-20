<div class="purchaseOrders content col-md-8">
<?php echo $this->Form->create('GrNote'); ?>
	<div class="block">
		<div class="content">
			<div class="header">
				<h2><?php echo __('Confirm GR Note'); ?></h2>
			</div>
		
	<?php
		echo $this->Form->input('supplier_id');
		echo $this->Form->hidden('user_id');
		echo $this->Form->hidden('date');
		echo $this->Form->input('note');
		echo $this->Form->input('jangka_pembayaran');
		echo $this->Form->input('received_by');
		echo $this->Form->hidden('status',array('value'=>'draft'));
		echo $this->Form->input('discount');
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
							<th>Item</th>
							<th>qty</th>
							<th>Unit</th>
							<th>Price</th>
							
							
						</tr>
					</thead>
					<tbody>
					<?php
						$count = 0;
						foreach ($this->request->data['TrGrnote'] as $item) {
					?>
						<tr>
							<td><?php echo $this->Form->input('TrGrnote.'.$count.'.stock_id',array('label'=>false)); ?></td>
							<td><?php echo $this->Form->input('TrGrnote.'.$count.'.qty',array('label'=>false));?></td>
							<td><?php echo $this->Form->input('TrGrnote.'.$count.'.big_unit_id',array('label'=>False,'options'=>$bigUnits,'default'=>$item['big_unit_id'])); ?></td>
							<td><?php echo $this->Form->input('TrGrnote.'.$count.'.harga',array('label'=>false)); ?></td>
							
						
						</tr>
					<?php $count++; } ?>
					</tbody>
				</table>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions col-md-2">
	<div class="block">
	<div class="content">
		<div class="header">
			<h2><?php echo __('Actions'); ?></h2>
		</div>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Gr Note'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		
	</ul>
	</div>
	</div>
</div>

