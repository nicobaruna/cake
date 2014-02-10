<div class="col-md-2" id="sidebar">
  <div class="block block-drop-shadow">
    <div class="user bg-default bg-light-rtl">
      <div class=info> <a href=# class="informer informer-three"> <span>14 / 255</span> Messages </a> <a href=# class="informer informer-four"> <span>$549.44</span> Balance </a> <img src=img/example/user/dmitry_b.jpg class="img-circle img-thumbnail"/> </div>
    </div>
    <div class="content list-group list-group-icons"> 
    	<a href="<?php echo $this->base ?>/messages/" class=list-group-item><span class=icon-envelope></span>Messages<span class="label label-warning pull-right"><?php echo count($this->requestAction(array('controller'=>'messages','action'=>'getMyMessages'))); ?></span></a>
    	<a href="<?php echo $this->base ?>/PurchaseRequests/add" class=list-group-item><span class=icon-print></span>Create Purchase Request<i class="icon-angle-right pull-right"></i></a> 
    	<a href="<?php echo $this->base ?>/PurchaseOrders/" class=list-group-item><span class=icon-bar-chart></span>Unconfirm Purchase Order<span class="label label-warning pull-right"><?php echo count($this->requestAction(array('controller'=>'PurchaseOrders','action'=>'index',1))); ?></span></a> 
    	<a href="<?php echo $this->base ?>/GrNotes/" class=list-group-item><span class=icon-cogs></span>Unconfirm Gr notes<span class="label label-warning pull-right"><?php echo count($this->requestAction(array('controller'=>'GrNotes','action'=>'index',1))); ?></span></a> 
    	<a href="<?php echo $this->base ?>/FixedPurchaseOrders/" class=list-group-item><span class=icon-off></span>Unconfirm Fix PO<span class="label label-warning pull-right"><?php echo count($this->requestAction(array('controller'=>'FixedPurchaseOrders','action'=>'index',1))); ?></span></a> 
    </div>
  </div>
  
 
  
</div>
