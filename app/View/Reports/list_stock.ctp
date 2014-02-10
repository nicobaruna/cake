<div class="col-md-10">
	<div class="block">
		<div class="header">
			<h2>List Stock</h2>
			
		</div>
		
		<div class="content">
			<div class="form-row">
				<?php echo $this->Form->create('Reports',array('action'=>'listStock')); ?>
				<div class="col-md-1">Gudang</div>
				<div class="col-md-2">
					<?php echo $this->Form->input('gudang',array('options'=>$gudang,'empty'=>'please choose one','label'=>FALSE,'required'=>TRUE)) ?>
				</div>
				
				<div class="col-md-1">
					From
				</div>
				<div class="col-md-2">
							<!-- insert discount input here -->
							<div class="input-group">
							<div class="input-group-addon">
											<span class="icon-calendar-empty"></span>
										</div>
							<?php echo $this->Form->input('date_from', array('type'=>'text','div'=>FALSE,'label'=>FALSE,'class'=>'datepicker form-control','required'=>TRUE)); ?>

							</div>
							
						</div>
				<div class="col-md-1">
					To
				</div>
				<div class="col-md-2">
							<!-- insert discount input here -->
							<div class="input-group">
							<div class="input-group-addon">
											<span class="icon-calendar-empty"></span>
										</div>
							<?php echo $this->Form->input('date_to', array('type'=>'text','required'=>TRUE,'div'=>FALSE,'label'=>FALSE,'class'=>'datepicker form-control')); ?>

							</div>
							
						</div>
				<div class="col-md-1">
					<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-success')); ?>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
			<table cellpadding=0 cellspacing=0 width=100% class="table table-bordered table-striped sortable">
				<thead>
					<tr>
						<th>nomor</th>
						<th>Item</th>
						<th>Satuan</th>
						<th>Saldo awal</th>
						<th>Qty in</th>
						<th>Qty out</th>
						<th>Saldo Akhir</th>
					</tr>
				</thead>
				
				<tbody>				
					<?php $count = 1; foreach ($reports as $item) { ?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $item['Stock']['name'] ?></td>
						<td><?php echo $item['Unit']['name'] ?></td>
						<td><?php echo $item['Stock']['saldo_akhir'] - $item['0']['qty_in'] ?></td>
						<td><?php echo $item['0']['qty_in'] ?></td>
						<td><?php echo 0; ?></td>
						<td><?php echo $item['Stock']['saldo_akhir'] ?></td>
						
					</tr>
					
					
					<?php $count++; } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>
