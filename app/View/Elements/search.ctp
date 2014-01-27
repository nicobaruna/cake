<?php

echo $this->Form->create($model,array('method'=>'post'));
echo $this->Form->input('supplier', array('label'=>'supplier'));
echo $this->Form->input('jangka_pembayaran');
echo $this->Form->input('status', array('options' => array('posted'=>'posted', 'draft'=>'draft')));
echo $this->Form->submit(__('Search'));
echo $this->Form->end();