<!-- navigation -->
			<div class=row>
    <div class=col-md-12>
      <nav class="navbar brb" role=navigation>
        <div class=navbar-header>
          <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-ex1-collapse> <span class=sr-only>Toggle navigation</span> <span class=icon-reorder></span> </button>
          <a class=navbar-brand href=index.html><img src="img/logo.png"/></a> </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class=active> <a href="<?php echo $this->request->base; ?>"> <span class=icon-home></span> dashboard </a> </li>
            <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown><span class=icon-pencil></span> Warehouse Documents</a>
              <ul class=dropdown-menu>
                <li><a href="<?php echo $this->request->base; ?>/purchase_requests/">Purchase Request</a></li>
                <li><a href="<?php echo $this->request->base; ?>/purchase_orders/">Purchase Order</a></li>
                <li><a href="<?php echo $this->request->base; ?>/grnotes/">GR Notes</a></li>
                <li><a href="<?php echo $this->request->base; ?>/fixed_purchase_orders/">Fixed PO</a></li>
              </ul>
            </li>
            <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown><span class=icon-pencil></span> Warehousing Setting</a>
              <ul class=dropdown-menu>
                <li><a href="<?php echo $this->request->base; ?>/stocks/">Stocks</a></li>
                <li><a href="<?php echo $this->request->base; ?>/warehouses/">Warhouses</a></li>
                 <li><a href="<?php echo $this->request->base; ?>/Units/">Units</a></li>
              </ul>
            </li>
            
             
            <li> <a href="users/logout"> <span class="icon-cog"></span> logout </a> </li>
          </ul>
          <form class="navbar-form navbar-right" name="search" role=search>
            <div class=form-group>
              <input type=text class=form-control placeholder="search..."/>
            </div>
          </form>
        </div>
      </nav>
    </div>
  </div>
			<!-- end of navigation -->