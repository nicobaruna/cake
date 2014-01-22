<div class="trGrnotes add col-md-10">
	
	<div class="col-md-8">
		<div class="trGrnotes form">
			<?php echo $this->Form->create('TrGrnote'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Tr Grnote'); ?></h2>
				</div>
				<div class="content">
					<?php
						echo $this->Form->input('gr_note_id');
						echo $this->Form->input('stock_id');
						echo $this->Form->input('qty');
						echo $this->Form->input('harga');
					?>
				</div>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Tr Grnotes'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div>
