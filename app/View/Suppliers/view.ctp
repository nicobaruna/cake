<div class="suppliers view col-md-10">
	
	<div class="suppliers-detail col-md-9">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Supplier'); ?></h2>
			</div>
			<div class="content">
				<div class="col-md-3"><?php echo __('Id'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['id']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Name'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['name']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Description'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['description']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Address'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['address']); ?>
					&nbsp;
				</div>
				<div class="col-md-3"><?php echo __('Phone'); ?></div>
				<div class="col-md-9">
					<?php echo h($supplier['Supplier']['phone']); ?>
					&nbsp;
				</div>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="actions">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id']),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?> 
				<?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Supplier'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
				 
			</div>
		</div>
	</div>

	
</div>
