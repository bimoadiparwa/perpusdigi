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
	<title><?= $title ?></title>
	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?=base_url(); ?>assets/css/style.css" rel="stylesheet">
	<!-- You can change the theme colors from here -->
	<link href="<?=base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<style>
		.login-box {
			width: 800px !important;
		}

	</style>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<section id="wrapper">
	<?php if(!empty($message)){ ?>
							<div class="message">
							<?php echo @$message;?>
							</div>
							<?php } else if ($this->session->flashdata('feedback')) { ?>
								<div class="message">
								<strong>Danger! </strong><?php echo $this->session->flashdata('feedback')?>
								</div>
							<?php } ?>	
		<div class="login-register"
			style="background-image:url(<?php echo base_url(); ?>/assets/images/background/perpustakaan.png);">
			<div class="login-box card">
				<div class="card-block">
					<?php $attribut = array('class'=>'form-horizontal form-material','id'=>'loginform'); echo 
					form_open('auth/registrasi', $attribut);
					 ?>
						<h3 class="box-title"><?= $form ?></h3>
						<hr>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter fullname" required>
								</div>

								<div class="col-md-6">
								<div class="radio-inline">
											<label>
												<input name="gender" value="MALE" type="radio" checked />
												<span><i class="fa fa-male"></i> Laki-Laki </span>
											</label>
											<br>
											<label>
												<input name="gender" value="FEMALE" type="radio" />
												<span><i class="fa fa-female"></i> Perempuan</span>
											</label>
										</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<textarea class="form-control" type="text" required placeholder="Alamat Lengkap"
										name="address"></textarea>
								</div>

								<div class="col-md-6">
									<input class="form-control" type="text" name="contact" placeholder="No. Telp/HP">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="email" required="" placeholder="Email Aktif"
										name="email">
								</div>

								<div class="col-md-3">
									<input class="form-control" type="password" required="" name="password" placeholder="Password">
								</div>
								<div class="col-md-3">
									<input class="form-control" type="password" required="" name="confirm_password" placeholder="Konfirmasi Password">
								</div>
							</div>
						</div>
						

						<div class="form-group text-center">
							<div class="col-xs-12">
								<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
									type="submit"><b>Daftar</b></button>
							</div>
						</div>
						<div class="form-group m-b-0">
							<div class="col-sm-12 text-center">
								<p>Sudah jadi anggota ? <a href="<?=base_url('auth'); ?>"
										class="text-info m-l-5"><b>Masuk</b></a></p>
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
	<script type="text/javascript">
            $('form').validate();
    </script>
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
