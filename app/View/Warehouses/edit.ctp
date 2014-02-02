<div class="col-md-10">
	<div class="warehouses edit form col-md-9">
		<?php echo $this->Form->create('Warehouse'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Warehouse'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
					<div class="col-md-3">
						Name
					</div>
					<div class="col-md-6">
						<!-- insert name input here -->
						<?php echo $this->Form->input('name',array('label'=>FALSE)); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						Keterangan
					</div>
					<div class="col-md-6">
						<!-- insert type input here -->
						<?php echo $this->Form->input('type',array('label'=>FALSE)); ?>
					</div>
				</div>
					
				<?php
					echo $this->Form->input('id');
					
				?>
			
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
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Warehouse.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('Warehouse.id'))); ?>
				<?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>
</div>