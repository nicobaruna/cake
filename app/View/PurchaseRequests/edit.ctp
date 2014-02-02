	
	<div class="purchaseRequests-detail form col-md-7">
		<div class="block">
			<?php echo $this->Form->create('PurchaseRequest'); ?>
			<div class="header">
				<h2><?php echo __('Edit Purchase Request'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3">
						Supplier
					</div>
					<div class="col-md-9">
						<!-- insert supplier input here -->
						<?php
							echo $this->Form->input('id');
							echo $this->Form->hidden('user_id');
							echo $this->Form->hidden('date',array('value'=>$this->request->data['PurchaseRequest']['date']));
							echo $this->Form->input('supplier_id',array('label'=>FALSE)); 
							echo $this->Form->hidden('purchase_order_id');
						?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Note
					</div>
					<div class="col-md-9">
						<!-- insert nore input here -->
						<?php echo $this->Form->input('note',array('label'=>FALSE,'type'=>'textarea','class'=>'cle')); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Jangka Pembayaran
					</div>
					<div class="col-md-9">
						<!-- insert jangka pembayaran input here -->
						<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE));  ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Ordered By
					</div>
					<div class="col-md-9">
						<!-- insert ordered by input here -->
						<?php echo $this->Form->input('ordered_by',array('label'=>FALSE));  ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Status
					</div>
					<div class="col-md-9">
						<!-- insert status input here -->
						<?php echo $this->Form->input('status',array('label'=>FALSE)); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Made By
					</div>
					<div class="col-md-9">
						<!-- insert made by input here -->
						<?php echo $this->Form->input('made_by',array('label'=>FALSE));  ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Discount
					</div>
					<div class="col-md-9">
						<!-- insert discount input here -->
						<?php echo $this->Form->input('discount',array('label'=>FALSE));  ?>
					</div>
				</div>
	
				<div class="header">
					<h2>Items</h2>
				</div>
				
				<div class="content item-table" data-items="" data-total="">
					<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Item Name</th>
								<th>Qty</th>
								<th>Unit</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 0;
							$data = (count($this->request->data['TrRequest'])) ? $this->request->data['TrRequest'] : array(1);
							$flag = (count($this->request->data['TrRequest'])) ? 1 : 0;
							foreach ($data as $item) {
								
								
							?>
							<tr class="item">
								<td><?php echo $this->Form->input('TrRequest.'.$count.'.id'); echo $this->Form->input('TrRequest.'.$count.'.stock_id',array('label'=>FALSE,'empty'=>'Please choose one','class'=>'stock')); ?></td>
								<td><?php echo $this->Form->input('TrRequest.'.$count.'.qty',array('label'=>FALSE)); ?></td>
								<td><?php  if($flag){ echo $this->requestAction(array('controller'=>'bigunits','action'=>'view',$item['stock_id'],$count,'TrRequest',$item['big_unit_id']),array(TRUE)); }else{ echo $this->Form->select('bigunit_id',array(0=>'please choose one'),array('class'=>'bigUnit')); } ?></td>
								<td><?php echo $this->Form->input('TrRequest.'.$count.'.harga',array('label'=>FALSE)); ?></td>
								<td><?php if($flag){echo $this->Html->link(__('Delete'), array('controller'=>'TrRequests','action' => 'delete', $item['id']),array('class'=>'btn delete btn-danger'), null, __('Are you sure you want to delete # %s?', $item['id'])); } ?></td>
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
	
			</div>

			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>


	<div class="col-md-3">
		<!-- actions block start -->
		<div class="actions block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseRequest.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseRequest.id'))); ?>
				<?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>

