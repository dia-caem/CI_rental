<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Rental Mobil</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="<?= base_url()?>assets/js/sweetalert/sweetalert2.all.js"></script>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">Rental Mobil</a>
                <a class="navbar-brand hidden"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url()?>administrator/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Master</h3><!-- /.menu-title -->
                    
                    <li>
                        <a href="<?= base_url()?>administrator/pengguna"> <i class="menu-icon fa fa-user"></i>Pengguna </a>
                        <a href="<?= base_url()?>administrator/datacustomer"> <i class="menu-icon fa fa-users"></i>Customer </a>
                        <a href="<?= base_url()?>Administrator/Mobil"> <i class="menu-icon fa fa-car"></i>Mobil </a>
                    </li>
                    
                    <h3 class="menu-title">Transaksi</h3><!-- /.menu-title -->
                    
                    <li>
                        <a href="<?= base_url()?>administrator/transaksi"> <i class="menu-icon fa fa-shopping-cart"></i>Data Tansaksi </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->



    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <h5 class="text-center">Selamat datang di aplikasi rental mobil</5>
                </div>

                <div class="col-sm-5">
                    <div class="float-right">
                    <?php if ($this->session->userdata('nama_admin')) {?>
                        Welcome <?php echo $this->session->userdata('nama_admin') ?>
                        <a href="<?php echo base_url('admin') ?>" class="btn btn-danger">
                        <i class="fa fa-sign-out"></i>Logout</a>
                        <?php } else { ?>
                        <a href="<?php echo base_url('admin') ?>" class="btn btn-success"><i class="fa fa-sign-in">
                        </i>Login</a>
                        <?php } ?>
                    </div>
                </div>  
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-4">

        