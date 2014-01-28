<div class="purchaseRequests edit col-md-10">
	
	<div class="purchaseRequests-detail form col-md-9">
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
					<div class="col-md-6">
						<!-- insert supplier input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Note
					</div>
					<div class="col-md-6">
						<!-- insert nore input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Jangka Pembayaran
					</div>
					<div class="col-md-6">
						<!-- insert jangka pembayaran input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Ordered By
					</div>
					<div class="col-md-6">
						<!-- insert ordered by input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Status
					</div>
					<div class="col-md-6">
						<!-- insert status input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Made By
					</div>
					<div class="col-md-6">
						<!-- insert made by input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Discount
					</div>
					<div class="col-md-6">
						<!-- insert discount input here -->
					</div>
				</div>
				<!--
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
				?>
				-->
				<div class="header">
					<h2>Items</h2>
				</div>
				<div class="content">
					<div class="items content">
						<?php 
						foreach ($this->request->data['TrRequest'] as $key => $value) {
						}
							echo $this->Form->input('TrRequest.'.$key.'.stock_id',array('label'=>'item','value'=>$stocks,'empty'=>'please choose one'));
							echo $this->Form->input('TrRequest.'.$key.'.qty',array('label'=>'Qty'));
							echo $this->Form->input('TrRequest.'.$key.'.big_unit_id',array('label'=>'Unit','value'=>$bigUnits,'empty'=>'please choose one'));
							echo $this->Form->input('TrRequest.'.$key.'.harga',array('label'=>'Harga'));
						?>
					</div>
					<button type="button" class="btn more btn-info right">
						add more item
					</button>
					<button type="button" class="btn less btn-warning right">
						less item
					</button>
				</div>
			</div>

			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
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
				<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>

<div class="hidden">
		<div id="item" data-indexnumber="1">
			<div class="item{number} wrapper" > 
		<?php 
			echo $this->Form->input('TrRequest.{number}.stock_id',array('label'=>'item','value'=>$stocks,'empty'=>'please choose one'));
			echo $this->Form->input('TrRequest.{number}.qty',array('label'=>'Qty'));
			echo $this->Form->input('TrRequest.{number}.big_unit_id',array('label'=>'Unit','value'=>$bigUnits,'empty'=>'please choose one'));
			echo $this->Form->input('TrRequest.{number}.harga',array('label'=>'Harga'));
		?>
		</div>
		</div>
	</div>