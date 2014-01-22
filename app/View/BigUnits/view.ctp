<div class="bigUnits view col-md-10">
	
	<div class="bigUnits-detail col-md-8">
		<div class="block">
			<h2><?php echo __('Big Unit'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($bigUnit['BigUnit']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Stock'); ?></dt>
				<dd>
					<?php echo $this->Html->link($bigUnit['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $bigUnit['Stock']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($bigUnit['BigUnit']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Equivalent'); ?></dt>
				<dd>
					<?php echo h($bigUnit['BigUnit']['equivalent']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>

	<div class="actions col-md-4">
		<div class="block">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Big Unit'), array('action' => 'edit', $bigUnit['BigUnit']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Big Unit'), array('action' => 'delete', $bigUnit['BigUnit']['id']), null, __('Are you sure you want to delete # %s?', $bigUnit['BigUnit']['id'])); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Big Units'), array('action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Big Unit'), array('action' => 'add')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
