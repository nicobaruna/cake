<div class="trGrnotes add col-md-10">
	
	<div class="col-md-8">
		<div class="trGrnotes form">
			<?php echo $this->Form->create('TrGrnote'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Tr Grnote'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							GR Notes
						</div>
						<div class="col-md-6">
							<!-- input GR Notes input here -->
						</div>
					</div>
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
							Qty
						</div>
						<div class="col-md-6">
							<!-- insert qty input here -->
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Harga
						</div>
						<div class="col-md-6">
							<!-- insert harga input here -->
						</div>
					</div>
					<!--
					<?php
						echo $this->Form->input('gr_note_id');
						echo $this->Form->input('stock_id');
						echo $this->Form->input('qty');
						echo $this->Form->input('harga');
					?>
					-->
				</div>
				<div class="footer">
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="actions block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</ul>
		</div>
	</div>

</div>
