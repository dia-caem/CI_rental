<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>App Rental Mobil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url()?>assets/assets_shop/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url()?>customer/dashboard/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url()?>customer/transaksi">Transaksi</a></li>
                
                    <li class="nav-item"><a class="nav-link" href="<?= base_url()?>customer/register/">Register</a></li>
                </ul>
                <div>
                    <div class="float-right">
                        <?php if ($this->session->userdata('nama_customer')) {?>
                        <a  class="nav-link text-white" href="<?php echo base_url('logs/logout') ?>">
                        Welcome <?php echo $this->session->userdata('nama_customer') ?>
                        <span class="btn btn-sm btn-danger">
                            Logout</span>
                        </a>
                        <?php } else {?>
                            <a  class="nav-link" href="<?php echo base_url('logs') ?>">
                        <span class="btn btn-sm btn-success">
                            Login</span>
                        </a>
                            <?php } ?>
                    </div>
                </div>   
            </div>
        </div>
    </nav>
    
