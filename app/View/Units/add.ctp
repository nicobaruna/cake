<!-- <div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Add Unit hahaha'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
 -->
<div class="units add col-md-10">
	
	<div class="col-md-9">
		<div class="units-detail form">
			<?php echo $this->Form->create('Unit'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Unit'); ?></h2>
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
	</div>

	<div class="col-md-3">
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Units'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
