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
		echo $this -> fetch('meta');
		echo $this -> fetch('script');
		
		?>
		<script type=text/javascript src=js/plugins/jquery/jquery.min.js></script>
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

		<script type=text/javascript src=js/js.js></script>
		<script type=text/javascript src=js/settings.js></script>
	</head>
	<body class=bg-img-num1>
		<div class=container>
			<!-- nav -->
			
			<div class="row">
				<?php
				
				 
						echo $this -> fetch('content'); 
				?>
				
			</div>
		</div>

   
	</body>
</html>