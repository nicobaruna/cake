<div class="col-md-10">
	<div class="units edit form col-md-9">
		<?php echo $this->Form->create('Unit'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Unit'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3">
						Name
					</div>
					<div class="col-md-6">
						<!-- insert name input here -->
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Status
					</div>
					<div class="col-md-6">
						<!-- insert status input here -->
					</div>
				</div>
				<!--
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('status');
				?>
				-->
			</div>
			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<hw><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unit.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('Unit.id'))); ?>
				<?php echo $this->Html->link(__('List Units'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>
</div>