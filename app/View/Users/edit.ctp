<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
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
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Requests'), array('controller' => 'purchase_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Request'), array('controller' => 'purchase_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purhcase Orders'), array('controller' => 'purhcase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purhcase Order'), array('controller' => 'purhcase_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
