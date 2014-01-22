<div class="col-md-10 stocks view">

	<div class="block">
		
		<div class="col-md-8">
			<div class="block">
				
				<div class="stocks-detail">
					<h2><?php echo __('Stock'); ?></h2>
					<dl>
						<dt><?php echo __('Id'); ?></dt>
						<dd>
							<?php echo h($stock['Stock']['id']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Name'); ?></dt>
						<dd>
							<?php echo h($stock['Stock']['name']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Unit'); ?></dt>
						<dd>
							<?php echo $this->Html->link($stock['Unit']['name'], array('controller' => 'units', 'action' => 'view', $stock['Unit']['id'])); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Warehouse'); ?></dt>
						<dd>
							<?php echo $this->Html->link($stock['Warehouse']['name'], array('controller' => 'warehouses', 'action' => 'view', $stock['Warehouse']['id'])); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Status'); ?></dt>
						<dd>
							<?php echo h($stock['Stock']['status']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Qty'); ?></dt>
						<dd>
							<?php echo h($stock['Stock']['qty']); ?>
							&nbsp;
						</dd>
					</dl>
				</div>
			</div>
		</div>

		<div class="actions col-md-4">
			<div class="block">
				<h3><?php echo __('Actions'); ?></h3>
				<div>
					<span class="btn btn-default"><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </span>
					<span class="btn btn-default"><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Big Units'), array('controller' => 'big_units', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Fix Puchase Orders'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Grnotes'), array('controller' => 'tr_grnotes', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Pos'), array('controller' => 'tr_pos', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('List Tr Requests'), array('controller' => 'tr_requests', 'action' => 'index')); ?> </span>
					<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'big_units', 'action' => 'view', $bigUnit['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'big_units', 'action' => 'edit', $bigUnit['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'big_units', 'action' => 'delete', $bigUnit['id']), null, __('Are you sure you want to delete # %s?', $bigUnit['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Big Unit'), array('controller' => 'big_units', 'action' => 'add')); ?> </span>
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'view', $trFixPuchaseOrder['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'edit', $trFixPuchaseOrder['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'delete', $trFixPuchaseOrder['id']), null, __('Are you sure you want to delete # %s?', $trFixPuchaseOrder['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Fix Puchase Order'), array('controller' => 'tr_fix_puchase_orders', 'action' => 'add')); ?> </span>
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_grnotes', 'action' => 'view', $trGrnote['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_grnotes', 'action' => 'edit', $trGrnote['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_grnotes', 'action' => 'delete', $trGrnote['id']), null, __('Are you sure you want to delete # %s?', $trGrnote['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Grnote'), array('controller' => 'tr_grnotes', 'action' => 'add')); ?> </span>
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_pos', 'action' => 'view', $trPo['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_pos', 'action' => 'edit', $trPo['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_pos', 'action' => 'delete', $trPo['id']), null, __('Are you sure you want to delete # %s?', $trPo['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Po'), array('controller' => 'tr_pos', 'action' => 'add')); ?> </span>
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
							<?php echo $this->Html->link(__('View'), array('controller' => 'tr_requests', 'action' => 'view', $trRequest['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'tr_requests', 'action' => 'edit', $trRequest['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tr_requests', 'action' => 'delete', $trRequest['id']), null, __('Are you sure you want to delete # %s?', $trRequest['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
			<div class="footer">
				<div class="actions">
					<div>
						<span class="btn btn-default"><?php echo $this->Html->link(__('New Tr Request'), array('controller' => 'tr_requests', 'action' => 'add')); ?> </span>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>