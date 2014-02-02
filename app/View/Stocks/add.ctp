<div class="stocks add col-md-10">	

	<div class="col-md-9">
		<div class="stocks-detail form">
			<?php echo $this->Form->create('Stock'); ?>
			<div class="block">
				<div class="header">
					<h2><?php echo __('Add Stock'); ?></h2>
				</div>
				<div class="content">
					<div class="form-row">
						<div class="col-md-3">
							Name
						</div>
						<div class="col-md-9">
							<!-- insert name input here -->
							<?php echo $this->Form->input('name',array('label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Unit Satuan
						</div>
						<div class="col-md-9">
							<!-- insert unit input here -->
							<?php echo $this->Form->input('unit_id',array('label'=>FALSE,'class'=>'unit','empty'=>'please select one')); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Warehouse
						</div>
						<div class="col-md-9">
							<!-- insert warehouse input here -->
							<?php echo $this->Form->input('warehouse_id',array('label'=>FALSE,'empty'=>'please select one')); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							status
						</div>
						<div class="col-md-9">
							<!-- insert status input here -->
							<?php echo $this->Form->input('status',array('value'=>array('in stock','out of stock'),'empty'=>'please choose one','label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Qty
						</div>
						<div class="col-md-9">
							<!-- insert qty input here -->
							<?php echo $this->Form->input('qty',array('label'=>FALSE)); ?>
						</div>
					</div>
				
				
				<div class="header">
					<h2>Big Units</h2>
				</div>
				<div class="content item-table" data-items="" data-total="">
				<div class="content">
					<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Unit Name</th>
								<th>Setara dengan</th>
								<th>Unit Satuan</th>
							</tr>
						</thead>
						<tbody>
							
							<tr class="item">
								<td><?php echo $this->Form->input('BigUnit.0.name',array('label'=>FALSE)); ?></td>
								<td><?php echo $this->Form->input('BigUnit.0.equivalent',array('label'=>FALSE)); ?> </td>
								<td><span class="unitLabel">unit satuan</span></td>
								
							</tr> 
							
						</tbody>						
					</table>
				</div>
				<div class="footer">
					<button type="button" class="btn more btn-info right">
						add more item
					</button>
					<button type="button" class="btn less btn-warning right">
						less item
					</button>
				</div>
			</div>
				
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
				<?php echo $this->Html->link(__('List Stocks'), array('action' => 'index'),array('class'=>'list-group-item'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Big Units'), array('controller' => 'big_units', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Fix Puchase Orders'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Grnotes'), array('controller' => 'tr_grnotes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Pos'), array('controller' => 'tr_pos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</div>
		</div>
	</div>

</div>
