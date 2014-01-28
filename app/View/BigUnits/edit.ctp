<div class="col-md-10">
	<div class="bigUnits edit form col-md-9">
		<?php echo $this->Form->create('BigUnit'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Big Unit'); ?></h2>
			</div>
			<div class="content">	
				<div class="form-row">
					<div class="col-md-3">
						Stock
					</div>
					<div class="col-md-6">
						<!-- insert stock input here -->
					</div>
				</div>
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
						Equivalent
					</div>
					<div class="col-md-9">
						<!-- inset equivalent input here -->
					</div>
				</div>
				<!--
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('stock_id');
					echo $this->Form->input('name');
					echo $this->Form->input('equivalent');
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
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BigUnit.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('BigUnit.id'))); ?>
				<?php echo $this->Html->link(__('List Big Units'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>
</div>