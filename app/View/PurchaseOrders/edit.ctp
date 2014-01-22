<div class="purchaseOrders edit form col-md-6">
	<?php echo $this->Form->create('PurchaseOrder'); ?>
		
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit Purchase Order'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->hidden('user_id');
				echo $this->Form->hidden('date');
				echo $this->Form->input('supplier_id');
				echo $this->Form->input('note');
				echo $this->Form->input('jangka_pembayaran');
				echo $this->Form->input('ordered_by');
				echo $this->Form->hidden('confirm_by',array('value'=>$this->Session->read('Auth.User.id')));
				echo $this->Form->input('discount');
				echo $this->Form->hidden('gr_note_id');
			?>
			<fieldset>
				<legend>Items</legend>
					<?php
					$count = 0;
					foreach ($this->request->data['TrPo'] as $item) {
						
						echo $this->Form->input('TrPo.'.$count.'.stock_id');
						echo $this->Form->input('TrPo.'.$count.'.qty');
						echo $this->Form->input('TrPo.'.$count.'.big_unit_id',array('label'=>'Unit','options'=>$bigUnits,'default'=>$item['big_unit_id']));
						echo $this->Form->input('TrPo.'.$count.'.harga');
						$count++;
					}
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>

</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
	</div>
</div>
