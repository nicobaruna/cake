<div class="trGrnotes view col-md-10">
	
	<div class="trGrnotes view col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Tr Grnote'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($trGrnote['TrGrnote']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Gr Note'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trGrnote['GrNote']['id'], array('controller' => 'gr_notes', 'action' => 'view', $trGrnote['GrNote']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Stock'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($trGrnote['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trGrnote['Stock']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Qty'); ?></div>
					<div class="col-md-9">
						<?php echo h($trGrnote['TrGrnote']['qty']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Harga'); ?></div>
					<div class="col-md-9">
						<?php echo h($trGrnote['TrGrnote']['harga']); ?>
						&nbsp;
					</div>
				</div>
			</dl>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h3><?php echo __('Actions'); ?></h3>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Tr Grnote'), array('action' => 'edit', $trGrnote['TrGrnote']['id']),array('class'=>'list-group-item')); ?>
				<?php echo $this->Form->postLink(__('Delete Tr Grnote'), array('action' => 'delete', $trGrnote['TrGrnote']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $trGrnote['TrGrnote']['id'])); ?> 
				<?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Grnote'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
