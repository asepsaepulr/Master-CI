<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Aplikasi Berbasis Web</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Font CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/css/all_icons.css'); ?>">
		
		<!-- Loader CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/css/loader.css'); ?>">

		<!-- MetisMenu CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/metisMenu/metisMenu.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/themes/assets/datatables/dataTables.bootstrap4.min.css'); ?>">
		<!-- daterange picker -->
	    <link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
		
	    <!-- bootstrap datepicker -->
	    <link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/datepicker/datepicker3.css'); ?>">
		
	    <!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/iCheck/all.css'); ?>">
		
		<!-- Select2 -->
	    <link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/select2/select2.min.css'); ?>">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/css/kavach.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('/themes/css/animate.css'); ?>">
		
		<!-- Sweet Alert CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/themes/assets/plugins/sweetalert/css/sweetalert.css'); ?>">
		<!-- Change Color CSS --> 
		<link rel="stylesheet" href="<?php echo base_url('/themes/css/skin/default-skin.css'); ?>" />
        
        <!-- Change Font CSS --> 
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper" class="">
			<div class="fakeLoader"></div>
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
				
				<?php echo $this->load->view($header); ?>
				<?php echo $this->load->view($left_content); ?>
			</nav>
			<!-- Sidebar Navigation -->

			<div id="page-wrapper">
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h3 class="text-themecolor">Nama Aplikasi</h3>
					</div>
					<div class="col-md-7" align="right">
						<h3>Welcome</h3>
					</div>
				</div>		
				<div class="container-fluid">
					<!-- /row -->
					<div class="row">
						<?php echo $this->load->view($content);?>
					</div>
					<!-- /row -->
				</div>	
			</div>
			<!-- /#page-wrapper -->
			<footer class="footer"> © 2018  </footer>
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="<?php echo base_url('/themes/assets/plugins/jquery/dist/jquery.min.js'); ?>"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('/themes/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
		
        <!-- Datatables JavaScript -->
		<script src="<?php echo base_url('/themes/assets/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('/themes/assets/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
        
		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?php echo base_url('/themes/assets/plugins/metisMenu/metisMenu.min.js'); ?>"></script>
		
		<script src="<?php echo base_url('/themes/assets/plugins/slim-scroll/js/jquery.slimscroll.js'); ?>"></script>
        
        <!-- Select2 -->
		<script src="<?php echo base_url('/themes/assets/plugins/select2/select2.full.min.js'); ?>"></script>
		
		<!-- InputMask -->
		<script src="<?php echo base_url('/themes/assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
		<script src="<?php echo base_url('/themes/assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
		<script src="<?php echo base_url('/themes/assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
		
		<!-- date-range-picker -->
		<script src="<?php echo base_url('/themes/assets/plugins/daterangepicker/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('/themes/assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
		
		<!-- bootstrap datepicker -->
		<script src="<?php echo base_url('/themes/assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
        <!-- bootstrap color picker -->
		<script src="<?php echo base_url('/themes/assets/plugins/colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
        
		<!-- bootstrap time picker -->
		<script src="<?php echo base_url('/themes/assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
        
		<!-- iCheck 1.0.1 -->
		<script src="<?php echo base_url('/themes/assets/plugins/iCheck/icheck.min.js'); ?>"></script>
        
        <!-- ChartJS -->
		<script src="<?php echo base_url('/themes/assets/plugins/chart.js/Chart.bundle.js'); ?>"></script>
		
        <!-- Sweet Alert Js -->
		<script src="<?php echo base_url('/themes/assets/plugins/sweetalert/js/sweetalert.js'); ?>"></script>
				
        <!-- Advance Form Element -->
		<script src="<?php echo base_url('/themes/js/custom/form-element.js'); ?>"></script>
		
		<!-- Loader JavaScript -->
		<script src="<?php echo base_url('/themes/js/loader.js'); ?>"></script>
		
		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url('/themes/js/kavach.min.js'); ?>"></script>
        
        <!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url('/themes/js/nuaing.js'); ?>"></script>
        
		
	</body>
</html>

