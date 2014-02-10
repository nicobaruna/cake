<div class="col-md-10">
	<div class="col-md-9">
		<div class="block">
			
			<div class="header">
				<h2><?php echo __('Fix Purchase Orders'); ?></h2>
			</div>
		<div class="content">
		<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('number'); ?></th>
				<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('date'); ?></th>
				
			
				
				<th><?php echo $this->Paginator->sort('status'); ?></th>
				
				<th class="actions"><?php echo 'Actions'; ?></th>
		</tr>
		</thead>
		<tbody>
			<?php foreach ($fixedPurchaseOrders as $PurchaseOrder): ?>
			<tr>
				<td><?php echo h($PurchaseOrder['FixedPurchaseOrder']['number']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($PurchaseOrder['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $PurchaseOrder['Supplier']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($PurchaseOrder['User']['username'], array('controller' => 'users', 'action' => 'view', $PurchaseOrder['User']['id'])); ?>
				</td>
				<td><?php echo h(date('d M Y', strtotime($PurchaseOrder['FixedPurchaseOrder']['date']))); ?>&nbsp;</td>
				
				
			
				<td>
					<?php 
						switch ($PurchaseOrder['FixedPurchaseOrder']['status']) {
							case 'posted':
								$class = 'success';
								break;
							
							default:
								$class = "warning";
								break;
						}
					?>
					<span class="label label-<?php echo $class; ?>">
						<?php echo h($PurchaseOrder['FixedPurchaseOrder']['status']); ?>&nbsp;
					
				</td>
				
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $PurchaseOrder['FixedPurchaseOrder']['id']),array('class'=>'btn btn-default')); ?>
					<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $PurchaseOrder['FixedPurchaseOrder']['id']),array('class'=>'btn btn-info')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $PurchaseOrder['FixedPurchaseOrder']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $PurchaseOrder['FixedPurchaseOrder']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
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
					echo $this->element('search', array(
				    "model" => 'PurchaseRequest', 
					));
				?>
			</div>
		</div>
		<!-- search block end -->
		<!-- actions block start -->
		<div class="actions block">
			<!-- <div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('New Purchase order'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this -> Html -> link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div> -->
		</div>
		<!-- actions block end -->
	</div>


</div>