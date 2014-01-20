
<?php $grnotes = $this->requestAction(array('controller'=>'grnotes','action'=>'index'))  ?>
   <div class=col-md-5>
      <div class="block block-drop-shadow">
        <div class="head bg-default bg-light-rtl">
          <h2>New Grnotes</h2>
          <div class="side pull-right">
            <ul class=buttons>
              <li><a href=#><span class=icon-plus></span></a></li>
              <li><a href=#><span class=icon-cogs></span></a></li>
            </ul>
          </div>
          <div class="head-panel nm"> <a href=# class="hp-info pull-left">
            <div class=hp-icon> <span class=icon-download-alt></span> </div>
            <span class=hp-main><?php echo count($grnotes) ?></span> <span class=hp-sm>recived</span> </a> 
            <a href=# class="hp-info pull-left">
            
            <span class=hp-main>10</span> <span class=hp-sm>sent</span> </a> <a href=# class="hp-info hp-one pull-right tip" title=Refresh>
            <div class=hp-icon> <span class=icon-refresh></span> </div>
            <span class=hp-main>9:24 am</span> </a> </div>
        </div>
        <div class="content list">
        	<?php foreach($grnotes as $item): ?>
          <div class=list-item>
            <div class=list-datetime>
              <div class=time><?php echo date('d M Y',strtotime($item['GrNote']['date'])) ?></div>
            </div>
            <div class=list-info> <img src=img/example/user/dmitry.jpg class="img-circle img-thumbnail"/> </div>
            <div class=list-text> <a href=# class=list-text-name><?php echo $item['User']['username'] ?></a>
              <p><?php echo $item['GrNote']['note'] ?></p>
            </div>
            <div class=list-controls> 
            	<a href="<?php echo $this->base; ?>/grnotes/preview/GrNote/PurchaseOrder/<?php echo $item['PurchaseOrder']['id'] ?>" class="widget-icon widget-icon-circle">
            		<span class=icon-rotate-right></span>
            	</a> 
            	
            </div>
          </div>
         <?php endforeach; ?>
          </div>
        <div class="footer tac"> <a href="<?php echo $this->base; ?>/grnotes/index">Load more ...</a> </div>
      </div>
        </div>

  