<div class="users form edit col-md-6">
	<?php echo $this->Form->create('User'); ?>	
	<div class="block">
		<div class="header">
			<h2><?php echo __('Edit User'); ?></h2>
		</div>
		<div class="content">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username');
				echo $this->Form->input('password');
				echo $this->Form->input('email');
				echo $this->Form->input('firstname');
				echo $this->Form->input('lastname');
				echo $this->Form->input('last_login');
				echo $this->Form->input('role');
			?>
		</div>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div>
		<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('List Purhcase Orders'), array('controller' => 'purhcase_orders', 'action' => 'index')); ?> </span>
		<span class="btn btn-default"><?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add')); ?> </span>
	</div>
</div>
