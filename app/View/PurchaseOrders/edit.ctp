<div class="purchaseOrder edit col-md-10">
	
	<div class="purchaseOrder-detail form col-md-9">
		<?php echo $this->Form->create('PurchaseOrder'); ?>
			
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Purchase Order'); ?></h2>
			</div>
			<div class="content controls">
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Supplier'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('supplier_id',array('label'=>FALSE)); ?>
					</div>
				</div>
				
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Note'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('note',array('class'=>'cle','label'=>FALSE)); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Jangka Pembayaran'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE)); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Ordered By'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('ordered_by',array('label'=>FALSE)); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Confirm By'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('confirm_by',array('label'=>FALSE)); ?>
					</div>
				</div>
				
				<div class=form-row>
					<div class=col-md-3>
						<?php echo __('Discount (%)'); ?>
					</div>
					<div class=col-md-9>
						<?php echo $this->Form->input('discount',array('label'=>FALSE)); ?> 
					</div>
				</div>
			</div>
				
				<?php
					echo $this->Form->hidden('user_id');
					echo $this->Form->hidden('date');
					echo $this->Form->hidden('gr_note_id');
				?>

			<div class="content item-table" data-items="">
				<div class="content">
					<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Item Name</th>
								<th>Qty</th>
								<th>Unit</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 0;
							foreach ($this->request->data['TrPo'] as $item) {
							?>
							<tr class="item">
								<td><?php echo $this->Form->input('TrPo.'.$count.'.stock_id',array('label'=>FALSE)); ?></td>
								<td><?php echo $this->Form->input('TrPo.'.$count.'.qty',array('label'=>FALSE)); ?></td>
								<td><?php echo $this->Form->input('TrPo.'.$count.'.big_unit_id',array('label'=>FALSE,'options'=>$bigUnits,'default'=>$item['big_unit_id'])); ?></td>
								<td><?php echo $this->Form->input('TrPo.'.$count.'.harga',array('label'=>FALSE)); ?></td>
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
				<?php echo $this -> Form -> postLink(__('Delete'), array('action' => 'delete', $this -> Form -> value('PurchaseOrder.id')), array('class' => 'list-group-item'), __('Are you sure you want to delete # %s?', $this -> Form -> value('PurchaseOrder.id'))); ?>
				<?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>