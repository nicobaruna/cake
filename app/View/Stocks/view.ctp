<div class="col-md-10 stocks view">

	<div class="block">
		
		<div class="col-md-9">
			<div class="block">
				
				<div class="stocks-detail">
					<div class="header">
						<h2><?php echo __('Stock'); ?></h2>
					</div>
					<div class="content">
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Id'); ?></div>
							<div class="col-md-9">
								<?php echo h($stock['Stock']['id']); ?>
								&nbsp;
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Name'); ?></div>
							<div class="col-md-9">
								<?php echo h($stock['Stock']['name']); ?>
								&nbsp;
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Unit'); ?></div>
							<div class="col-md-9">
								<?php echo $this->Html->link($stock['Unit']['name'], array('controller' => 'units', 'action' => 'view', $stock['Unit']['id'])); ?>
								&nbsp;
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Warehouse'); ?></div>
							<div class="col-md-9">
								<?php echo $this->Html->link($stock['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $stock['Warehouse']['id'])); ?>
								&nbsp;
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Status'); ?></div>
							<div class="col-md-9">
								<?php echo h($stock['Stock']['status']); ?>
								&nbsp;
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3"><?php echo __('Qty'); ?></div>
							<div class="col-md-9">
								<?php echo h($stock['Stock']['qty']); ?>
								&nbsp;
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="actions col-md-3">
			<div class="block">
				<div class="header">
					<h2><?php echo __('Actions'); ?></h2>
				</div>
				<div class="content list-group">
					<?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id']),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> 
					<?php echo $this->Html->link(__('List Stocks'), array('action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('New Stock'), array('action' => 'add'),array('class'=>'list-group-item')); ?> 
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

	<div class="related">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Related Big Units'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($stock['BigUnit'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Name'); ?></th>
					<th><?php echo __('Equivalent'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stock['BigUnit'] as $bigUnit): ?>
					<tr>
						<td><?php echo $bigUnit['id']; ?></td>
						<td><?php echo $bigUnit['stock_id']; ?></td>
						<td><?php echo $bigUnit['name']; ?></td>
						<td><?php echo $bigUnit['equivalent']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'big_units', 'action' => 'view', $bigUnit['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'big_units', 'action' => 'edit', $bigUnit['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'big_units', 'action' => 'delete', $bigUnit['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $bigUnit['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block">
		<div class="related">
			<div class="header">
				<h2><?php echo __('Related Tr Fix Puchase Orders'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($stock['TrFixPuchaseOrder'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Fixed Puchase Order Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th><?php echo __('Big Unit Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stock['TrFixPuchaseOrder'] as $trFixPuchaseOrder): ?>
					<tr>
						<td><?php echo $trFixPuchaseOrder['id']; ?></td>
						<td><?php echo $trFixPuchaseOrder['fixed_puchase_order_id']; ?></td>
						<td><?php echo $trFixPuchaseOrder['stock_id']; ?></td>
						<td><?php echo $trFixPuchaseOrder['qty']; ?></td>
						<td><?php echo $trFixPuchaseOrder['harga']; ?></td>
						<td><?php echo $trFixPuchaseOrder['big_unit_id']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'view', $trFixPuchaseOrder['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'edit', $trFixPuchaseOrder['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'delete', $trFixPuchaseOrder['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trFixPuchaseOrder['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block">
		<div class="related">
			<div class="header">
				<h2><?php echo __('Related Tr Grnotes'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($stock['TrGrnote'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Gr Note Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th><?php echo __('Big Unit Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stock['TrGrnote'] as $trGrnote): ?>
					<tr>
						<td><?php echo $trGrnote['id']; ?></td>
						<td><?php echo $trGrnote['gr_note_id']; ?></td>
						<td><?php echo $trGrnote['stock_id']; ?></td>
						<td><?php echo $trGrnote['qty']; ?></td>
						<td><?php echo $trGrnote['harga']; ?></td>
						<td><?php echo $trGrnote['big_unit_id']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_grnotes', 'action' => 'view', $trGrnote['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_grnotes', 'action' => 'edit', $trGrnote['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_grnotes', 'action' => 'delete', $trGrnote['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trGrnote['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block">
		<div class="related">
			<div class="header">
				<h2><?php echo __('Related Tr Pos'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($stock['TrPo'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Purchase Order Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th><?php echo __('Big Unit Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stock['TrPo'] as $trPo): ?>
					<tr>
						<td><?php echo $trPo['id']; ?></td>
						<td><?php echo $trPo['purchase_order_id']; ?></td>
						<td><?php echo $trPo['stock_id']; ?></td>
						<td><?php echo $trPo['qty']; ?></td>
						<td><?php echo $trPo['harga']; ?></td>
						<td><?php echo $trPo['big_unit_id']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_pos', 'action' => 'view', $trPo['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_pos', 'action' => 'edit', $trPo['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_pos', 'action' => 'delete', $trPo['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trPo['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block">
		<div class="related">
			<div class="header">
				<h2><?php echo __('Related Tr Requests'); ?></h2>
			</div>
			<div class="content">
				<?php if (!empty($stock['TrRequest'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Purchase Request Id'); ?></th>
					<th><?php echo __('Stock Id'); ?></th>
					<th><?php echo __('Qty'); ?></th>
					<th><?php echo __('Harga'); ?></th>
					<th><?php echo __('Big Unit Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($stock['TrRequest'] as $trRequest): ?>
					<tr>
						<td><?php echo $trRequest['id']; ?></td>
						<td><?php echo $trRequest['purchase_request_id']; ?></td>
						<td><?php echo $trRequest['stock_id']; ?></td>
						<td><?php echo $trRequest['qty']; ?></td>
						<td><?php echo $trRequest['harga']; ?></td>
						<td><?php echo $trRequest['big_unit_id']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id']),array('class'=>'btn btn-info')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']),array('class'=>'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add'),array('class'=>'btn btn-default')); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>


</div>