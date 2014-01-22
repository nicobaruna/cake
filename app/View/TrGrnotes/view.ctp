<div class="trGrnotes view col-md-10">
	
	<div class="trGrnotes view col-md-8">
		<div class="block">
			<h2><?php echo __('Tr Grnote'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($trGrnote['TrGrnote']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Gr Note'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trGrnote['GrNote']['id'], array('controller' => 'gr_notes', 'action' => 'view', $trGrnote['GrNote']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Stock'); ?></dt>
				<dd>
					<?php echo $this->Html->link($trGrnote['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trGrnote['Stock']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Qty'); ?></dt>
				<dd>
					<?php echo h($trGrnote['TrGrnote']['qty']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Harga'); ?></dt>
				<dd>
					<?php echo h($trGrnote['TrGrnote']['harga']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Tr Grnote'), array('action' => 'edit', $trGrnote['TrGrnote']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Tr Grnote'), array('action' => 'delete', $trGrnote['TrGrnote']['id']), null, __('Are you sure you want to delete # %s?', $trGrnote['TrGrnote']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Grnote'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
