<div class="purchaseRequests col-md-10">

	<div class="col-md-8">
		<div class="puchaseRequest-detail form">
		<?php echo $this->Form->create('PurchaseRequest'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Purchase Request'); ?></h2>
				</div>
				<div class="content">
					<?php
						echo $this->Form->input('supplier_id');
						echo $this->Form->hidden('user_id',array('value'=>$this->Session->read('Auth.User.id')));
						echo $this->Form->hidden('date',array('value'=>date('Y-m-d')));
						echo $this->Form->input('note',array('type'=>'textarea'));
						echo $this->Form->hidden('purchase_order_id');
						echo $this->Form->input('jangka_pembayaran');
						echo $this->Form->input('ordered_by');
						echo $this->Form->hidden('status',array('value'=>'draft'));
						echo $this->Form->input('made_by');
						echo $this->Form->input('discount');
					?>
					<fieldset>
						<legend>Items</legend>
						<div class="items">
							<?php 
								echo $this->Form->input('TrRequest.0.stock_id',array('label'=>'item','value'=>$stocks,'empty'=>'please choose one'));
								echo $this->Form->input('TrRequest.0.qty',array('label'=>'Qty'));
								echo $this->Form->input('TrRequest.0.big_unit_id',array('label'=>'Unit','value'=>$bigUnits,'empty'=>'please choose one'));
								echo $this->Form->input('TrRequest.0.harga',array('label'=>'Harga'));
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
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
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


</div>