<?php

echo $this->Form->create(Inflector::classify( $this->params['controller']),array('method'=>'post','action'=> $this->params['action']));
?>
<div class="form-row">
				
						<div class="col-md-12">
							<!-- insert status input here -->
							<?php echo $this->Html->link(__('Reset'),array('action'=>$this->action),array('class'=>'btn btn-success')); ?>
						</div>
			</div>
			<div class="form-row">
				<div class="col-md-3">
							Nomor
						</div>
						<div class="col-md-9">
							<!-- insert status input here -->
							<?php echo $this->Form->input('number',array('label'=>FALSE,'required'=>FALSE)); ?>
						</div>
			</div>
<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert status input here -->
							<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE,'required'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('supplier', array('label'=>'supplier','label'=>FALSE,'required'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							User
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('username', array('label'=>FALSE,'required'=>FALSE)); ?>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col-md-3">
							Date
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<div class="input-group">
							<div class="input-group-addon">
											<span class="icon-calendar-empty"></span>
										</div>
							<?php echo $this->Form->input('date_from', array('type'=>'text','div'=>FALSE,'label'=>FALSE,'required'=>FALSE,'class'=>'datepicker form-control')); ?>

							</div>
							<div class="input-group">
								<div class="input-group-addon">
											<span class="icon-calendar-empty"></span>
										</div>
								<?php echo $this->Form->input('date_to', array('type'=>'text','div'=>FALSE,'label'=>FALSE,'required'=>FALSE,'class'=>'datepicker form-control')); ?>
							</div>
						</div>
					</div>



<?php echo $this->Form->submit(__('Search'));
echo $this->Form->end();
?>