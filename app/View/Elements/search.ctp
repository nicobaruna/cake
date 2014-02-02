<?php

echo $this->Form->create(Inflector::classify( $this->params['controller']),array('method'=>'post','action'=> $this->params['action']));
?>
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
							Status
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('status', array('label'=>FALSE,'required'=>FALSE,'empty'=>'Please choose one','options' => array('posted'=>'posted', 'draft'=>'draft'))); ?>
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