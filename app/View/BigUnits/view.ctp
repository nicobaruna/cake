<div class="bigUnits view col-md-10">
	
	<div class="bigUnits-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Big Unit'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Id'); ?></div>
					<div class="col-md-9">
						<?php echo h($bigUnit['BigUnit']['id']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Stock'); ?></div>
					<div class="col-md-9">
						<?php echo $this->Html->link($bigUnit['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $bigUnit['Stock']['id'])); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Name'); ?></div>
					<div class="col-md-9">
						<?php echo h($bigUnit['BigUnit']['name']); ?>
						&nbsp;
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3"><?php echo __('Equivalent'); ?></div>
					<div class="col-md-9">
						<?php echo h($bigUnit['BigUnit']['equivalent']); ?>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Big Unit'), array('action' => 'edit', $bigUnit['BigUnit']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Big Unit'), array('action' => 'delete', $bigUnit['BigUnit']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $bigUnit['BigUnit']['id'])); ?> 
				<?php echo $this->Html->link(__('List Big Units'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Big Unit'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
