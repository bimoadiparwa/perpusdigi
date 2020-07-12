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
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>/assets/images/logo-buku.png">
	<title>Perpustakaan Kota Depok - <?= $title?></title>
	<!-- Bootstrap Core CSS -->
	<link href="<?= base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?=base_url();?>/assets/horizontal/css/style.css" rel="stylesheet">
	<!-- You can change the theme colors from here -->
	<link href="<?=base_url();?>/assets/horizontal/css/colors/green.css" id="theme" rel="stylesheet">
	<style>
		/* Make the image fully responsive */
		.carousel-item {
			height: 625px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.hovereffect {
			width: 100%;
			height: 100%;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: default;
		}

		.hovereffect .overlay {
			width: 100%;
			position: absolute;
			overflow: hidden;
			left: 0;
			top: auto;
			bottom: 0;
			padding: 1em;
			height: 4.75em;
			background: #79FAC4;
			color: #fff;
			-webkit-transition: -webkit-transform 0.35s;
			transition: transform 0.35s;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0);
			visibility: hidden;

		}

		.hovereffect img {
			display: block;
			position: relative;
			-webkit-transition: -webkit-transform 0.35s;
			transition: transform 0.35s;
		}

		.hovereffect:hover img {
			-webkit-transform: translate3d(0, -10%, 0);
			transform: translate3d(0, -10%, 0);
		}

		.hovereffect h2 {
			color: #fff;
			text-align: center;
			position: relative;
			font-size: 17px;
			padding: 10px;
			background: rgba(0, 0, 0, 0.6);
			float: left;
			margin: 0px;
			display: inline-block;
		}

		.hovereffect a.info {
			display: inline-block;
			text-decoration: none;
			padding: 7px 14px;
			text-transform: uppercase;
			color: #fff;
			border: 1px solid #fff;
			margin: 50px 0 0 0;
			background-color: transparent;
		}

		.hovereffect a.info:hover {
			box-shadow: 0 0 5px #fff;
		}


		.hovereffect p.icon-links a {
			float: right;
			color: #3c4a50;
			font-size: 1.4em;
		}

		.hovereffect:hover p.icon-links a:hover,
		.hovereffect:hover p.icon-links a:focus {
			color: #252d31;
		}

		.hovereffect h2,
		.hovereffect p.icon-links a {
			-webkit-transition: -webkit-transform 0.35s;
			transition: transform 0.35s;
			-webkit-transform: translate3d(0, 200%, 0);
			transform: translate3d(0, 200%, 0);
			visibility: visible;
		}

		.hovereffect p.icon-links a span:before {
			display: inline-block;
			padding: 8px 10px;
			speak: none;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.hovereffect:hover .overlay,
		.hovereffect:hover h2,
		.hovereffect:hover p.icon-links a {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}

		.hovereffect:hover h2 {
			-webkit-transition-delay: 0.05s;
			transition-delay: 0.05s;
		}

		.hovereffect:hover p.icon-links a:nth-child(3) {
			-webkit-transition-delay: 0.1s;
			transition-delay: 0.1s;
		}

		.hovereffect:hover p.icon-links a:nth-child(2) {
			-webkit-transition-delay: 0.15s;
			transition-delay: 0.15s;
		}

		.hovereffect:hover p.icon-links a:first-child {
			-webkit-transition-delay: 0.2s;
			transition-delay: 0.2s;
		}

	</style>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fixed">
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar">
			<nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
				<!-- ============================================================== -->
				<!-- Logo -->
				<!-- ============================================================== -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?= base_url()?>">
						<!-- Logo icon -->
						<b>
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="<?= base_url();?>assets/images/icon.png" alt="homepage" class="dark-logo" />
							<!-- Light Logo icon -->
							<img src="<?= base_url();?>assets/images/logo-buku.png" width="40px" alt="homepage"
								class="light-logo" />
						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span>
							<!-- dark Logo text -->
							<img src="<?= base_url();?>assets/images/icon.png" alt="homepage" class="dark-logo" />
							<!-- Light Logo text -->
							<img src="<?= base_url();?>assets/images/Perpus.png" width="70px" class="light-logo"
								alt="homepage" /></span> </a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav mr-auto mt-md-0 ">
					</ul>
					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<ul class="navbar-nav my-lg-0">
						
						<?php if($this->session->userdata('status')=='anggotalogin'): ?>
						<li class="nav-item dropdown">
						<a href="<?= base_url('perpus/lihat_keranjang');?>" class="nav-link text-muted waves-effect waves-dark animated">
						<i class="fa fa-shopping-bag fa-lg"></i>
						</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
									src="<?= base_url();?>/assets/images/users/1.jpg" alt="user"
									class="profile-pic" />
								</a>
							<div class="dropdown-menu dropdown-menu-right animated flipInY">
								<ul class="dropdown-user">
									<li>
										<div class="dw-user-box">
											<div class="u-img"><img src="<?= base_url();?>/assets/images/users/1.jpg"
													alt="user"></div>
											<div class="u-text">
												<h4><?= $this->session->userdata('ang_nama') ?></h4>
												<small class="text-muted"><?= $this->session->userdata('email') ?></small>
												
											</div>
										</div>
									</li>
									<li role="separator" class="divider"></li>
									<!--<li><a href="#"><i class="ti-user"></i> Profil</a></li>-->
									<li><a href="<?= base_url('history');?>"><i class="ti-time"></i> Riwayat Transaksi </a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
								</ul>
							</div>
						</li>
	<?php else: ?>
						<li class="nav-item hidden-sm-down animated">
							<a href="<?= base_url('auth'); ?>" class="nav-link waves-effect waves-dark text-muted animated"><i class="fa fa-sign-in"></i>Masuk</a>
						</li>
	<?php endif;?>
						
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">

				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<li>
							<a href="<?=base_url('perpus');?>" aria-expanded="false"><i class="fa fa-home"></i><span
									class="hide-menu">Home</span></a>
						</li>
						<li>
							<a class="has-arrow " href="<?=base_url('perpus/buku');?>" aria-expanded="false"><i class="fa fa-book"></i><span
									class="hide-menu">Katalog</span></a>
						</li>
						<!--<li>
							<a class="has-arrow " href="#" aria-expanded="false"><i
									class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Panduan</span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="javascript:void(0)">item 1.1</a></li>
								<li><a href="javascript:void(0)">item 1.2</a></li>
								<li>
									<a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
									<ul aria-expanded="false" class="collapse">
										<li><a href="javascript:void(0)">item 1.3.1</a></li>
										<li><a href="javascript:void(0)">item 1.3.2</a></li>
										<li><a href="javascript:void(0)">item 1.3.3</a></li>
										<li><a href="javascript:void(0)">item 1.3.4</a></li>
									</ul>
								</li>
								<li><a href="#">item 1.4</a></li>
							</ul>
						</li>-->
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->

		</aside>

		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<?php $this->load->view($content_view) ?>
			<!-- =a============================================================= -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer">
			<script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href=""><b>P</b>erpus<b>D</b>igi</a>
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<script src="<?=base_url();?>/assets/horizontal/js/jquery-ui.min.js"></script>
	<!-- ============================================================== -->
	<script src="<?= base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url();?>/assets/plugins/bootstrap/js/tether.min.js"></script>
	<script src="<?= base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="<?=base_url();?>/assets/horizontal/js/jquery.slimscroll.js"></script>
	<!--Wave Effects -->
	<script src="<?=base_url();?>/assets/horizontal/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?=base_url();?>/assets/horizontal/js/sidebarmenu.js"></script>
	<!--stickey kit -->
	<script src="<?= base_url();?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
	<!--Custom JavaScript -->
	<script src="<?=base_url();?>/assets/horizontal/js/custom.min.js"></script>
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<script src="<?=base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <
	<!-- Style switcher -->
	<!-- ============================================================== -->
	<script src="<?= base_url();?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	<script>
$('.datepicker').datepicker({
    startDate: '-3d'
});
</script>
</body>

</html>
