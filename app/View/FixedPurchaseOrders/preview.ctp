<div class="purchaseOrders content col-md-6">
<?php echo $this->Form->create('FixedPurchaseOrder'); ?>
	<div class="block">
		<div class="content">
			<div class="header">
				<h2><?php echo __('Confirm Fixed Purchase Order'); ?></h2>
			</div>
			<div class="content">
				
				<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->hidden('number',array('label'=>FALSE)); ?>
							<?php echo $this->Form->input('supplier_id',array('label'=>FALSE)); ?>
						</div>
					</div>
				
				<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('note',array('label'=>FALSE,'type'=>'textarea','class'=>'cle')); ?>
						</div>
					</div>
				
				<div class="form-row">
						<div class="col-md-3">
							jangka pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE)); ?>
						</div>
					</div>
					
				<div class="form-row">
						<div class="col-md-3">
							Discount (%)
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('discount',array('label'=>FALSE)); ?>
						</div>
					</div>	
					
				<div class="form-row">
						<div class="col-md-3">
							Dibuat oleh
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('made_by',array('label'=>FALSE)); ?>
						</div>
					</div>				
				
			</div>
		
	<?php

		echo $this->Form->hidden('user_id',array('value'=>$this->Session->read('Auth.User.id')));
		echo $this->Form->hidden('date');
		
		
		echo $this->Form->hidden('status',array('value'=>'posted'));
		
	?>
	</div>
	</div>
	<fieldset>
		<!-- items block start -->
			<div class="block">
				<div class="header">
					<h2>Items</h2>
				</div>
				<div class="content item-table" data-items="<?php echo count($this->request->data['TrFixPurchaseOrder']) ?>" data-total="<?php echo count($this->request->data['TrFixPurchaseOrder']) ?>">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Item</th>
								<th>qty</th>
								<th>Unit</th>
								<th>Price</th>
								<th>action</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							$count = 0;
							foreach ($this->request->data['TrFixPurchaseOrder'] as $item) {
						?>
							<tr class="item">
								<td><?php echo $this->Form->input('TrFixPurchaseOrder.'.$count.'.stock_id',array('label'=>false,'class'=>'stock select2')); ?></td>
								<td><?php echo $this->Form->input('TrFixPurchaseOrder.'.$count.'.qty',array('label'=>false));?></td>
								<td><?php echo $this->Form->input('TrFixPurchaseOrder.'.$count.'.big_unit_id',array('label'=>False,'options'=>$bigUnits,'default'=>$item['big_unit_id'],'class'=>'bigUnit select2')); ?></td>
								<td><?php echo $this->Form->input('TrFixPurchaseOrder.'.$count.'.harga',array('label'=>false)); ?></td>
								<td><?php echo $this->Html->link(__('Delete'), array('controller'=>'TrRequests','action' => 'delete', $item['id']),array('class'=>'btn delete btn-danger'), null, __('Are you sure you want to delete # %s?', $item['id']));?></td>
							</tr>
						<?php $count++; } ?>
						</tbody>
					</table>
				</div>
				
				<div class="footer">
					<button type="button" class="btn more btn-info right">
						add more item
					</button>
					<button type="button" class="btn less btn-warning right">
						less item
					</button>
				</div>
				
			</div>
			<!-- items block end -->
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!-- actions block start -->
<div class="actions col-md-3">
	<div class="block">
		<div class="header">
			<h2><?php echo __('Actions'); ?></h2>
		</div>
		<div class="content list-group">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?>
			<?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'getAll'),array('class'=>'list-group-item')); ?>
			 
		</div>
	</div>
</div>
<!-- actions block end -->
