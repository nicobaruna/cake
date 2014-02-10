<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('Lubana Sengkol', 'Restaurant POS');
App::uses('Debugger', 'Utility');
?>

<html lang=en>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<base href="<?php echo $this->request->webroot; ?>" >
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
	   </title>
		<?php echo $this -> Html -> meta('icon'); ?>
		<?php
		echo $this -> Html -> css('stylesheets');
		echo $this->Html->css('chosen');
		echo $this -> fetch('meta');
		echo $this -> fetch('script');
		
		?>

		<script type=text/javascript src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type=text/javascript src=js/plugins/jquery/jquery-ui.min.js></script>
		<script type=text/javascript src=js/plugins/jquery/jquery-migrate.min.js></script>
		<script type=text/javascript src=js/plugins/jquery/globalize.js></script>
		<script type=text/javascript src=js/plugins/bootstrap/bootstrap.min.js></script>
		<script type=text/javascript src=js/plugins/cleditor/jquery.cleditor.min.js></script>
		<script type=text/javascript src=js/plugins/uniform/jquery.uniform.min.js></script>
		<script type=text/javascript src=js/plugins/select2/select2.min.js></script>
		<script type=text/javascript src=js/plugins/tagsinput/jquery.tagsinput.min.js></script>
		<script type=text/javascript src=js/plugins/jquery/jquery-ui-timepicker-addon.js></script>
		<script type=text/javascript src=js/plugins/ibutton/jquery.ibutton.js></script>
		
		<script type=text/javascript src=js/plugins/datatables/jquery.dataTables.min.js></script>
		<script type=text/javascript src=js/plugins/validationengine/languages/jquery.validationEngine-en.js></script>
		<script type=text/javascript src=js/plugins/validationengine/jquery.validationEngine.js></script>
		<script type=text/javascript src=js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js></script>
		<script>
			var base = "<?php echo $this->base; ?>";
			var model = "<?php echo  Inflector::classify( $this->params['controller']); ?>";
		</script>
		<script type=text/javascript src=js/js.js></script>
		<script type=text/javascript src=js/settings.js></script>
		<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
		<script type="text/javascript" src="js/prism.js"></script>
		<script type=text/javascript src=js/script.js></script>
		
	</head>
	<body class=bg-img-num1>
		<div class=container>
			<!-- nav -->
				<?php 
				    if($this->Session->read('Auth.User.id'))
						echo $this->element('navigation') 
			    ?>
			<!-- end of nav -->
			<!-- print header start -->
			<div id="print-header">
				<div class="print-header-logo">
					<img src="<?php echo $this->webroot; ?>img/lubana-logo.jpg">
				</div>
				<div class="block">
					<div class="print-address">
						<h1>Lubana Sengkol</h1>
						<h4>Pemancingan, Pondok Makan &amp; Outbond</h4>
						<p>
							Jl. Hutama Karya KM 1,5 Sengkol - Tangerang Selatan<br/>
							Telp / Fax : 021 - 758 799 62<br/>
						</p>

					</div>
				</div>
				<div class="border"></div>
			</div>
			<!-- print header end -->
			<?php echo $this->Session->flash(); ?>
			
			<div class="row">
				<?php
				 if($this->Session->read('Auth.User.id'))
						echo $this->element('sidebar');
				 ?>
				 <div id="content">
				 	
				 
					<?php
						echo $this -> fetch('content'); 
					?>
				 </div>
				 <?php //echo $this->element('sql_dump'); ?> 
			</div>
		</div>
	<div class=row>
    <div class=page-footer>
      <div class=page-footer-wrap>
        <div class="side pull-left"> Copyirght &COPY; Lubana Resto 2014. All rights reserved. </div>
      </div>
    </div>
    
    <?php 
    
    //getmodel

    switch (Inflector::classify( $this->params['controller'])) {
        case 'PurchaseOrder':
            $model = 'TrPo';
            break;
        case 'GrNote':
            $model = 'TrGrnote';
            break;
		case 'FixedPurchaseOrder':
            $model = 'TrFixPurchaseOrder';
            break;
		case 'PurchaseRequest':
            $model = 'TrRequest';
            break;
        default:
            $model = 'TrRequest';
            break;
    }
	

    ?>
    
    <div class="hidden">
		<div id="item" data-indexnumber="1" data-model="<?php echo $model; ?>">
			<table>
				<tr class="item">			
			<td class="col-md-3"><?php echo $this->Form->input($model.'.{number}.stock_id',array('label'=>FALSE,'div'=>FALSE,'empty'=>'please choose one','class'=>'stock','style'=>'width:100%')); ?></td>
			<td><?php echo $this->Form->input($model.'.{number}.qty',array('label'=>FALSE)); ?></td>
			<td class="bigUnitColumn col-md-3"><?php echo $this->Form->input($model.'.{number}.big_unit_id',array('label'=>FALSE,'div'=>FALSE,'empty'=>'please choose item first','class'=>'bigUnit','style'=>'width:100%')); ?></td>
			<td><?php echo $this->Form->input($model.'.{number}.harga',array('label'=>FALSE)); ?></td>
			<td>&nbsp;</td>
					</tr>		
	</table>
		</div>
	</div>
    
	</body>
</html>