<div class="col-md-10">
	
	<div class="col-md-8">
		<div class="block">
			<div class="purchaseRequests edit form">

			<?php echo $this->Form->create('PurchaseRequest'); ?>
				<div class="block">
					<div class="header">
						<h2><?php echo __('Edit Purchase Request'); ?></h2>
					</div>
					<div class="content">
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
							<fieldset>
						<legend>Items</legend>
						<div class="items">
							<?php 
							foreach ($this->request->data['TrRequest'] as $key => $value) {
								
							}
								echo $this->Form->input('TrRequest.'.$key.'.stock_id',array('label'=>'item','value'=>$stocks,'empty'=>'please choose one'));
								echo $this->Form->input('TrRequest.'.$key.'.qty',array('label'=>'Qty'));
								echo $this->Form->input('TrRequest.'.$key.'.big_unit_id',array('label'=>'Unit','value'=>$bigUnits,'empty'=>'please choose one'));
								echo $this->Form->input('TrRequest.'.$key.'.harga',array('label'=>'Harga'));
							?>
						</div>
					</fieldset>
					<button type="button" class="btn more btn-info right">
						add more item
					</button>
					<button type="button" class="btn less btn-warning right">
						less item
					</button>
					</div>
				</div>
			<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="block">
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<div>
					<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseRequest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseRequest.id'))); ?></span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('action' => 'index')); ?></span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
				</div>
			</div>
		</div>
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