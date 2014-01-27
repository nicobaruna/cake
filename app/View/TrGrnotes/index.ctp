<div class="trGrnotes index col-md-10">
	
	<div class="trGrnotes-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Grnotes'); ?></h2>
			</div>
			<div class="content">
				<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('gr_note_id'); ?></th>
						<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
						<th><?php echo $this->Paginator->sort('qty'); ?></th>
						<th><?php echo $this->Paginator->sort('harga'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($trGrnotes as $trGrnote): ?>
				<tr>
					<td><?php echo h($trGrnote['TrGrnote']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($trGrnote['GrNote']['id'], array('controller' => 'gr_notes', 'action' => 'view', $trGrnote['GrNote']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($trGrnote['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trGrnote['Stock']['id'])); ?>
					</td>
					<td><?php echo h($trGrnote['TrGrnote']['qty']); ?>&nbsp;</td>
					<td><?php echo h($trGrnote['TrGrnote']['harga']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $trGrnote['TrGrnote']['id']),array('class'=>'btn btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trGrnote['TrGrnote']['id']),array('class'=>'btn btn-info')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trGrnote['TrGrnote']['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trGrnote['TrGrnote']['id'])); ?>
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
					echo $this->Paginator->numbers(array('separator' => ''),array('class'=>'btn btn-default'));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
				?>
				</div>
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
				<?php echo $this->Html->link(__('New Tr Grnote'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
		<!-- actions block end -->
	</div>

</div>
