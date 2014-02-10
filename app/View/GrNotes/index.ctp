<div class="col-md-10 grNotes index">
	
	<div class="grNotes-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Unconfirm Gr Notes'); ?></h2>
			</div>
			<div class="content">
			<?php if(!empty($GrNotes)) { ?>
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('number'); ?></th>
						<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
					
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						
						<th><?php echo $this->Paginator->sort('jangka_pembayaran'); ?></th>

						<th><?php echo $this->Paginator->sort('status'); ?></th>
						
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($GrNotes as $grNote): ?>
				<tr>
					<td><?php echo h($grNote['PurchaseOrder']['number']); ?>&nbsp;</td>
					<td><?php echo h($grNote['Supplier']['name']); ?>&nbsp;</td>
					
					<td><?php echo h($grNote['PurchaseOrder']['date']); ?>&nbsp;</td>
					
					<td><?php echo h($grNote['PurchaseOrder']['jangka_pembayaran']); ?>&nbsp;</td>
					
					<td><?php $class = ($grNote['PurchaseOrder']['status'] == 'draft') ? 'label-warning' : 'label-success'; echo '<span class="label '.$class.'">'.h($grNote['PurchaseOrder']['status']).'</span>'; ?>&nbsp;</td>

					<td class="actions">
						<?php echo $this->Html->link(__('Confirm'), array('action' => 'preview','GrNote','PurchaseOrder', $grNote['PurchaseOrder']['id']),array('class'=>'btn btn-success')); ?>
						
						<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'PurchaseOrders','action' => 'delete', $grNote['PurchaseOrder']['id'],'GrNotes','index'),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $grNote['PurchaseOrder']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
				</table>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
				<div class="paging">
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-default'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
				?>
				</div>
				<?php } else { ?>
						<div class="alert alert-warning">
						 	 There's no unconfirm GR Notes , <?php echo $this->Html->link(__('View All GR Notes'),array('action'=>'getAll'),array('class'=>'btn btn-success')) ?>
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<!-- search block start -->
		<div class="search block">
			<div class="header">
				<h2>Search</h2>
			</div>
			<div class="content">
				<?php
					echo $this->element('search_request', array(
				    "model" => 'PurchaseRequest', 
					));
				?>
			</div>
		</div>
		<!-- search block end -->
		<!-- actions block start -->
		<div class="actions block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				
				<?php echo $this->Html->link(__('List GrNotes'), array('action' => 'getAll'),array('class'=>'list-group-item')); ?> 
				
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
