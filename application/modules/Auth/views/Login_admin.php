<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url(); ?>assets/images/favicon.png">
    <title>Sistem Informasi Perpustakaan - <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
	<link href="<?=base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url(); ?>/assets/images/background/perpustakaan.png);">        
		
		
		<div class="login-box card">
            <div class="card-block">
			<?php $attribut = array('class'=>'form-horizontal form-material','id'=>'loginform'); echo 
					form_open('auth/login_admin', $attribut);
					 ?>
                    <h3 class="box-title m-b-20">Sign In <a href="<?= base_url('perpus'); ?>"><i class="pull-right ti ti-close animated"></i></a> </h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                <?= 
				form_close();
				 ?>
            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->

<script src="<?=base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url(); ?>assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?=base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?=base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url(); ?>assets/js/custom.min.js"></script>
	<!-- ============================================================== --
	<!-- Style switcher -->
    <!-- ============================================================== -->
	<script src="<?=base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
