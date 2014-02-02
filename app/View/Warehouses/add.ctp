<div class="warehouses add col-md-10">
	
	<div class="col-md-9">
		<div class="warehouses-detail form">
			<?php echo $this->Form->create('Warehouse'); ?>
				<div class="block">
					<div class="header">
						<h2><?php echo __('Add Warehouse'); ?></h2>
					</div>
					<div class="content">
						<div class="form-row">
							<div class="col-md-3">
								Name
							</div>
							<div class="col-md-6">
								<!-- insert type input here -->
								<?php echo $this->Form->input('name',array('label'=>FALSE)); ?>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								Keterangan
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('type',array('label'=>FALSE)); ?>
							</div>
						</div>
						<!--
						<?php
							echo $this->Form->input('name');
							echo $this->Form->input('type');
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
				<?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
