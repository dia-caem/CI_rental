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
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

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
</head>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="<?= base_url()?>customer/dashboard/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Transaksi</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active"s aria-current="page" href="<?= base_url()?>customer/register/">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->

<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                    <h3 class="text-dark text-center mb-4">Login Customer</h3>
                <div class="login-form bg-dark">
                    <form method="post" action="<?= base_url()?>Logs">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            <?= form_error('username','<small class="text-danger">','</small>')?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <?= form_error('password','<small class="text-danger">','</small>')?>
                        </div>
                        <div class="checkbox">

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="<?= base_url()?>customer/register/">Create One</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/js/main.js"></script>
    <script src="<?= base_url()?>assets/js/sweetalert/sweetalert2.all.js"></script>

    <script>
        <?php
        if($this->session->flashdata('info')){?>
            Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '<?= $this->session->flashdata('info')?>',
            })
        <?php }
        ?>
    </script>
</body>
<!-- Footer-->
<footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url()?>assets/assets_shop/js/scripts.js"></script>
</body>

</html>
</html>