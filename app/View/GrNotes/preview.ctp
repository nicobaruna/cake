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
							<?php echo $this->Form->hidden('number',array('label'=>FALSE)); ?>
							<?php echo $this->Form->input('supplier_id',array('label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Note
						</div>
						<div class="col-md-9">
							<!-- insert note input here -->
							<?php echo $this->Form->input('note',array('label'=>FALSE,'type'=>'textarea','class'=>'cle')); ?>
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
							Received By
						</div>
						<div class="col-md-9">
							<!-- insert received by input here -->
							<?php echo $this->Form->input('received_by',array('label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Discount (%)	
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('discount',array('label'=>FALSE)); ?>
						</div>
					</div>

					<?php
						
						echo $this->Form->hidden('user_id');
						echo $this->Form->hidden('date');
						echo $this->Form->hidden('status',array('value'=>'draft'));
						
					?>
	
				</div>
			</div>
			<!-- GR Notes block end -->
			<!-- items block start -->
			<div class="block">
				<div class="header">
					<h2>Items</h2>
				</div>
				<div class="content item-table" data-items="<?php echo count($this->request->data['TrGrnote']) ?>" data-total="<?php echo count($this->request->data['TrGrnote']) ?>">
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
							foreach ($this->request->data['TrGrnote'] as $item) {
						?>
							<tr class="item">
								<td><?php echo $this->Form->input('TrGrnote.'.$count.'.stock_id',array('label'=>false,'class'=>'stock')); ?></td>
								<td><?php echo $this->Form->input('TrGrnote.'.$count.'.qty',array('label'=>false));?></td>
								<td><?php echo $this->Form->input('TrGrnote.'.$count.'.big_unit_id',array('label'=>False,'options'=>$bigUnits,'default'=>$item['big_unit_id'],'class'=>'bigUnit')); ?></td>
								<td><?php echo $this->Form->input('TrGrnote.'.$count.'.harga',array('label'=>false)); ?></td>
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

