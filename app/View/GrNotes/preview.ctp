<div class="grnotes content col-md-8">
	<div class="block">
		<div class="content">
		<?php echo $this->Form->create('GrNote'); ?>
			<!-- GR notes block start -->
			<div class="block">
				<div class="header">
					<h2><?php echo __('Confirm GR Note'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert supplier ID input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert note input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert jangka pembayaran input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Received By
						</div>
						<div class="col-md-9">
							<!-- insert received by input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Discount
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
						</div>
					</div>
					<!--
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
					-->
				</div>
			</div>
			<!-- GR Notes block end -->
			<!-- items block start -->
			<div class="block">
				<div class="header">
					<h2>Items</h2>
				</div>
				<div class="content">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Item</th>
								<th>qty</th>
								<th>Unit</th>
								<th>Price</th>
								<th>Warehouse</th>
								
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
								<td><?php 
										  echo $this->Form->hidden('TrWarehouse.'.$count.'.stock_id',array('label'=>false,'value'=>$item['stock_id']));
										  echo $this->Form->hidden('TrWarehouse.'.$count.'.qty',array('label'=>false,'value'=>$item['qty']));
										  echo $this->Form->input('TrWarehouse.'.$count.'.warehouse_id',array('label'=>false,'options'=>$warehouses,'empty'=>'Please select one')); ?></td>
							
							</tr>
						<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- items block end -->
			<!-- submit button start -->
			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
			<!-- submit button end -->
		</div>
	</div>
</div>

<!-- actions block start -->
<div class="actions col-md-2">
	<div class="block">
		<div class="header">
			<h2><?php echo __('Actions'); ?></h2>
		</div>
		<div class="content list-group">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?>
			<?php echo $this->Html->link(__('List Gr Note'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
			<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
		</div>
	</div>
</div>
<!-- actions block end -->

