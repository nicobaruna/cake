<div class="stocks edit form col-md-10">

	<div class="stocks edit form col-md-9">
	<?php echo $this->Form->create('Stock'); ?>
		<div class="block">
			<div class="header">
				<h2><?php echo __('Edit Stock'); ?></h2>
			</div>
			<div class="content">
				<div class="form-row">
						<div class="col-md-3">
							Name
						</div>
						<div class="col-md-9">
							<?php echo $this->Form->input('id',array('label'=>FALSE)); ?>
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
							<?php echo $this->Form->input('status',array('label'=>FALSE)); ?>
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
			</div>
			
			<div class="header">
				<h2>Comment (why you edit this stock ?)</h2>
			</div>
			
			<div class="content">
				<div class="form-row">
						<div class="col-md-3">
							Comment
						</div>
						<div class="col-md-9">
							<!-- insert qty input here -->
							<?php echo $this->Form->hidden('StockEditHistory.0.user_id',array('value'=>$this->Session->read('Auth.User.id'))) ?>
							<?php echo $this->Form->hidden('StockEditHistory.0.date',array('value'=>date('Y-m-d H:i:s'))); ?>
							<?php echo $this->Form->input('StockEditHistory.0.comment',array('label'=>FALSE,'value'=>'','type'=>'textarea','class'=>'cle')); ?>
						</div>
					</div>
			</div>
			
			<div class="header">
					<h2>Big Unit</h2>
				</div>
				<div class="content item-table" data-items="" data-total="">
				<div class="content">
					<table cellpadding = "0" cellspacing = "0" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Unit Name</th>
								<th>Setara dengan</th>
								<th>Unit Satuan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 0;
							$data = (count($this->request->data['BigUnit'])) ? $this->request->data['BigUnit'] : array(1);
							$flag = (count($this->request->data['BigUnit'])) ? 1 : 0;
							foreach ($data as $item) {
							?>
							<tr class="item data">
								<td><?php echo $this->Form->input('BigUnit.'.$count.'.id',array('label'=>FALSE)); echo $this->Form->input('BigUnit.'.$count.'.name',array('label'=>FALSE)); ?></td>
								<td><?php echo $this->Form->input('BigUnit.'.$count.'.equivalent',array('label'=>FALSE)); ?> </td>
								<td><span class="unitLabel"><?php echo $this->request->data['Unit']['name'] ?></span></td>
								<td><?php if($flag){echo $this->Html->link(__('Delete'), array('controller'=>'bigunits','action' => 'delete', $item['id']),array('class'=>'btn delete btn-danger'), null, __('Are you sure you want to delete # %s?', $item['id'])); } ?></td>
							</tr> 
							<?php $count++; } ?>
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
			
			<div class="block block-drop-shadow">
						<div class=header>
							<h2>Histories</h2>
						</div>
						<div class="content list">
						<?php foreach ($this->request->data['StockEditHistory'] as $key => $value) { ?>
							<div class=list-item>
								<div class=list-datetime>
									<div class=date>
										<?php echo date('d M Y',strtotime($value['date'])); ?>
									</div>
									<div class=time>
										<?php echo date('H:i:s',strtotime($value['date'])); ?>
									</div>
								</div>
								<div class=list-text>
									<?php echo $this->Html->link(__($value['User']['username']),array('controller'=>'users','action'=>'view',$value['User']['id']),array('class'=>'list-text-name')) ?>
									<p>
										<?php echo $value['comment']; ?>
									</p>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
			
			<div class="footer">
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

	<div class="actions col-md-3">
		<div class="block">
			<div class="header">
				<h2><?php echo __('Actions'); ?></h2>
			</div>
			<div class="content list-group">
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stock.id')),array('class'=>'list-group-item'), null, __('Are you sure you want to delete # %s?', $this->Form->value('Stock.id'))); ?>
				<?php echo $this->Html->link(__('List Stocks'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
				 
			</div>
		</div>
	</div>

</div>
