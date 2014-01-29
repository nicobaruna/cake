<?php

echo $this->Form->create($model,array('method'=>'post','action'=>'index'));
?>
<div class="form-row">
						<div class="col-md-3">
							Jangka Pembayaran
						</div>
						<div class="col-md-9">
							<!-- insert status input here -->
							<?php echo $this->Form->input('jangka_pembayaran',array('label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Supplier
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('supplier', array('label'=>'supplier','label'=>FALSE)); ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							Status
						</div>
						<div class="col-md-9">
							<!-- insert discount input here -->
							<?php echo $this->Form->input('status', array('label'=>FALSE,'options' => array('posted'=>'posted', 'draft'=>'draft'))); ?>
						</div>
					</div>



<?php echo $this->Form->submit(__('Search'));
echo $this->Form->end();
?>