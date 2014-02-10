<div class="purchaseOrders content col-md-6">
<?php echo $this->Form->create('PurchaseOrder'); ?>
	<div class="block">
		<div class="content">
			<div class="header">
				<h2><?php echo __('Confirm Purchase Order'); ?></h2>
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
							Diorder oleh
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('ordered_by',array('label'=>FALSE)); ?>
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
				<div class="form-row">
						<div class="col-md-3">
							Dikonfirmasi oleh
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
							<?php echo $this->Form->input('confirmed_by',array('label'=>FALSE,'value'=>$this->Session->read('Auth.User.username'),'readonly'=>'readonly')); ?>
						</div>
					</div>			
				
			</div>
		
	<?php

		echo $this->Form->hidden('user_id');
		echo $this->Form->hidden('date',array('value'=>date('Y-m-d')));
		echo $this->Form->hidden('confirm_by',array('value'=>$this->Session->read('Auth.User.id')));
		echo $this->Form->hidden('gr_note_id');
		echo $this->Form->hidden('status',array('value'=>'draft'));
		
	?>
	</div>
	</div>
	<fieldset>
		<!-- items block start -->
			<div class="block">
				<div class="header">
					<h2>Items</h2>
				</div>
				<div class="content item-table" data-items="<?php echo count($this->request->data['TrPo']) ?>" data-model="TrPo" data-total="<?php echo count($this->request->data['TrPo']) ?>">
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
							foreach ($this->request->data['TrPo'] as $item) {
						?>
							<tr class="item">
								<td class="col-md-3"><?php echo $this->Form->input('TrPo.'.$count.'.stock_id',array('label'=>false,'class'=>'stock select2','style'=>'width:100%')); ?></td>
								<td><?php echo $this->Form->input('TrPo.'.$count.'.qty',array('label'=>false));?></td>
								<td class="col-md-3"><?php echo $this->Form->input('TrPo.'.$count.'.big_unit_id',array('label'=>False,'options'=>$bigUnits,'default'=>$item['big_unit_id'],'style'=>'width:100%','class'=>'bigUnit select2')); ?></td>
								<td><?php echo $this->Form->input('TrPo.'.$count.'.harga',array('label'=>false)); ?></td>
								<td><?php echo $this->Html->link(__('Delete'), array('controller'=>'TrPo','action' => 'delete', $item['id']),array('class'=>'btn delete btn-danger'), null, __('Are you sure you want to delete # %s?', $item['id']));?></td>
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
			<?php echo $this->Html->link(__('List Uncomfirm Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
			 
		</div>
	</div>
</div>
<!-- actions block end -->



