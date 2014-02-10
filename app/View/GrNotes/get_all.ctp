<div class="col-md-10">
	<div class="col-md-9">
		<div class="block">
			
			<div class="header">
				<h2><?php echo __('Purchase Requests'); ?></h2>
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
			<?php foreach ($GrNotes as $grNote): ?>
			<tr>
				<td><?php echo h($grNote['GrNote']['number']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($grNote['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $grNote['Supplier']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($grNote['User']['username'], array('controller' => 'users', 'action' => 'view', $grNote['User']['id']),array('class'=>'btn btn-success')); ?>
				</td>
				<td><?php echo h(date('d M Y', strtotime($grNote['GrNote']['date']))); ?>&nbsp;</td>
				
				
			
				<td>
					<?php 
						switch ($grNote['GrNote']['status']) {
							case 'posted':
								$class = 'success';
								break;
							
							default:
								$class = "warning";
								$grNote['GrNote']['status'] = 'Diajukan menjadi Fixed Purchase Order';
								break;
						}
					?>
					<span class="label label-<?php echo $class; ?>">
						<?php echo h($grNote['GrNote']['status']); ?>&nbsp;
					</span>
				</td>
				
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $grNote['GrNote']['id']),array('class'=>'btn btn-default')); ?>
					
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grNote['GrNote']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $grNote['GrNote']['id'])); ?>
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
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				
				<?php echo $this->Html->link(__('Unconfirm GrNote'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				 
			</div>
		</div>
	</div>


</div>