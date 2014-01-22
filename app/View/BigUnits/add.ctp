<div class="bigUnits add col-md-10">
	
	<div class="col-md-8">
		<div class="bigUnits-detail form">
		<?php echo $this->Form->create('BigUnit'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Big Unit'); ?></h2>
				</div>
				<div class="content">
					<?php
						echo $this->Form->input('stock_id');
						echo $this->Form->input('name');
						echo $this->Form->input('equivalent');
					?>
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<div>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Big Units'), array('action' => 'index')); ?></span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </span>
				<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </span>
			</div>
		</div>
	</div>

</div>
