<div class="purchaseRequests col-md-10">

	<div class="col-md-8">
		<!-- purchase block start -->
		<div class="puchaseRequest-detail form">
		<?php echo $this->Form->create('PurchaseRequest'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Purchase Request'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert supplier input here -->
							
							<?php
								echo $this->Form->hidden('user_id',array('value'=>$this->Session->read('Auth.User.id'))); 
								echo $this->Form->input('supplier_id',array('label'=>FALSE,'div'=>FALSE,'empty'=>'Please choose one','class'=>'select2', 'style'=>'width:100%')); 
								?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert note input here -->
							<?php echo $this->Form->input('note',array('type'=>'textarea','class'=>'cle','label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert jangka pembayaran input here -->
							<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE)); ?>
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
					<?php 
						echo $this->Form->hidden('purchase_order_id');
						echo $this->Form->hidden('status',array('value'=>'draft'));
						echo $this->Form->hidden('date',array('value'=>date('Y-m-d')));
					?>
					
				</div>
				<div class="header">
					<h2>Items</h2>
				</div>
				<!-- items table start -->
				<div class="content item-table" data-items="0" data-model="TrRequest">
					<div class="content">
						<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>Item Name</th>
									<th>Qty</th>
									<th>Unit</th>
									<th>Harga</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
								
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
				<!-- items table end -->
				<div class="footer">
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
		<!-- purchase request block end -->
	</div>

	<div class="col-md-4">
		<!-- actions block start -->
		<div class="actions block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				
			</div>
		</div>
		<!-- actions block end -->
	</div>

	


</div>

