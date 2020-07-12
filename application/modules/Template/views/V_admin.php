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
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url(); ?>assets/images/logo-buku.png">
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
                    <a class="navbar-brand" href="<?= base_url('dashboard')?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?=base_url(); ?>assets/images/logo-buku.png" width="40px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?=base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <a href="<?=base_url('dashboard'); ?>">
                         <img src="<?=base_url(); ?>assets/images/Perpus.png"  width="80px" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url(); ?>assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?=base_url(); ?>assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?= $this->session->userdata('pet_nama'); ?></h4>
                                                <p class="text-muted"><?= $this->session->userdata('email'); ?></p><span class="badge badge-primary"><?= $this->session->userdata('role');?></span>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url('auth/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
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
					<?php if($this->session->userdata('role') ==='Admin'):?>
                        <li class="nav-small-cap">MANAJEMEN</li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Data Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('buku'); ?>"><span class="fa fa-book"></span>     Buku</a></li>
                                <li><a href="<?=base_url('kategori'); ?>"><span class="fa fa-list"></span>     Kategori</a></li>
                                <li><a href="<?=base_url('petugas'); ?>">Petugas</a></li>
                                <li><a href="<?=base_url('penulis'); ?>">Penulis</a></li>
                                <li><a href="<?=base_url('penerbit'); ?>"><span class="fa fa-share-square-o"></span>     Penerbit</a></li>
                                <li><a href="<?=base_url('anggota');?>">Anggota</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">TRANSAKSI</li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-file-multiple"></i><span class="hide-menu">Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('peminjaman'); ?>">Peminjaman</a></li>
                            </ul>
                        </li>
					<?php elseif($this->session->userdata('role')==='Pustakawan'):?>
					<li class="nav-small-cap">MANAJEMEN</li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Data Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('buku'); ?>"><span class="fa fa-book"></span>     Buku</a></li>
                                <li><a href="<?=base_url('kategori'); ?>"><span class="fa fa-list"></span>     Kategori</a></li>
                                <li><a href="<?=base_url('penulis'); ?>"><span class="fa fa-user"></span>     Penulis</a></li>
                                <li><a href="<?=base_url('penerbit'); ?>"><span class="fa fa-share-square-o"></span>     Penerbit</a></li>
                                <li><a href="<?=base_url('anggota'); ?>"><span class="fa fa-group"></span>     Anggota</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">TRANSAKSI</li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-retweet"></i><span class="hide-menu">Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('peminjaman'); ?>">Peminjaman</a></li>
                            </ul>
                        </li>
						<li class="nav-small-cap">LAPORAN</li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-file-multiple"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('peminjaman/laporan'); ?>">Laporan Peminjaman</a></li>
                                <li><a href="<?=base_url('pengembalian/laporan'); ?>">Laporan Pengembalian</a></li>
                            </ul>
                        </li>
	<?php endif;?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <a href="<?= base_url('auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
						<h3 class="text-themecolor m-b-0 m-t-0"><?= $title ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?= $sub_title ?> </li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                                <?php $this->load->view($content_view); ?>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
			<script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="#"><b>P</b>erpus<b>D</b>igi</a>
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
    <!-- ============================================================== -->
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
    <!-- ============================================================== -->
	<script src="<?=base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	});
	
	
	</script>
	<!-- Style switcher -->
    <!-- ============================================================== -->
	<script src="<?=base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
