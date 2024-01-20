<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PUPR Samarinda Kota | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <!-- <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
        <!-- Theme style -->
        <!-- <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/adminlte.min.css"> -->
        <style>
            body {
                color: #000;
                overflow-x: hidden;
                height: 100%;
                background-color: #B0BEC5;
                background-repeat: no-repeat;
            }

            .card0 {
                box-shadow: 0px 4px 8px 0px #757575;
                border-radius: 0px;
            }

            .card2 {
                margin: 0px 40px;
            }

            .logo {
                width: 75px;
                height: 75px;
                margin-top: 20px;
                margin-left: 35px;
            }

            .image {
                width: 480px;
                height: 340px;
            }

            .border-line {
                border-right: 1px solid #EEEEEE;
            }

            .facebook {
                background-color: #3b5998;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer;
            }

            .twitter {
                background-color: #1DA1F2;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer;
            }

            .linkedin {
                background-color: #2867B2;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer;
            }

            .line {
                height: 1px;
                width: 45%;
                background-color: #E0E0E0;
                margin-top: 10px;
            }

            .or {
                width: 10%;
                font-weight: bold;
            }

            .text-sm {
                font-size: 14px !important;
            }

            ::placeholder {
                color: #BDBDBD;
                opacity: 1;
                font-weight: 300
            }

            :-ms-input-placeholder {
                color: #BDBDBD;
                font-weight: 300
            }

            ::-ms-input-placeholder {
                color: #BDBDBD;
                font-weight: 300
            }

            input, textarea {
                padding: 10px 12px 10px 12px;
                border: 1px solid lightgrey;
                border-radius: 2px;
                margin-bottom: 5px;
                margin-top: 2px;
                width: 100%;
                box-sizing: border-box;
                color: #2C3E50;
                font-size: 14px;
                letter-spacing: 1px;
            }

            input:focus, textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: 1px solid #304FFE;
                outline-width: 0;
            }

            button:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                outline-width: 0;
            }

            a {
                color: inherit;
                cursor: pointer;
            }

            .btn-blue {
                background-color: #1A237E;
                width: 150px;
                color: #fff;
                border-radius: 2px;
            }

            .btn-blue:hover {
                background-color: #000;
                cursor: pointer;
            }

            .bg-blue {
                color: #fff;
                background-color: #1A237E;
            }

            @media screen and (max-width: 991px) {
                .logo {
                    margin-left: 0px;
                }

                .image {
                    width: 300px;
                    height: 220px;
                }

                .border-line {
                    border-right: none;
                }

                .card2 {
                    border-top: 1px solid #EEEEEE !important;
                    margin: 0px 15px;
                }
            }
        </style>
    </head>
    <body class="hold-transition">
        <!-- <div class="login-box"> -->
            <!-- <div class="login-logo">
                <a href="<?= base_url(); ?>"><b>Admin</b>LTE</a>
            </div>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <?php echo session()->getFlashdata('error'); ?> 
                </div>
            <?php endif; ?> -->
            <!-- /.login-logo -->
            <!-- <div class="card">
                <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Masuk!</p>
                <form action="<?= base_url('login/process'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    </div>
                </form>
            </div> -->
        <!-- </div> -->
        <!-- /.login-box -->

        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-7">
                        <div class="card1 pb-5">
                            <div class="row">
                                <img src="<?= base_url('/assets/pupr.jpg') ?>" class="logo">
                                <img src="<?= base_url('/assets/smd.png') ?>" class="logo">
                            </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                                <img src="<?= base_url('/assets/bg.jpg') ?>" class="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">PUPR SAMARINDA KOTA</h6>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div>
                                <small class="or text-center">LOG IN</small>
                                <div class="line"></div>
                            </div>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                    <?php echo session()->getFlashdata('error'); ?> 
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('login/process'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="row px-3">
                                    <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
                                    <input class="mb-4" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="row px-3">
                                    <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                    <input type="password" name="password" placeholder="Enter password">
                                </div>
                                <div class="row px-3 mb-4">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                                        <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                    </div>
                                    <!-- <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a> -->
                                </div>
                                <div class="row mb-3 px-3">
                                    <button type="submit" class="btn btn-blue text-center">Login</button>
                                </div>
                                <div class="row mb-4 px-3">
                                    <!-- <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-blue py-4">
                    <div class="row px-3">
                        <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2023. All rights reserved.</small>
                        <div class="social-contact ml-4 ml-sm-auto">
                            <span class="fa fa-facebook mr-4 text-sm"></span>
                            <span class="fa fa-google-plus mr-4 text-sm"></span>
                            <span class="fa fa-linkedin mr-4 text-sm"></span>
                            <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets'); ?>/js/adminlte.min.js"></script>
    </body>
</html>

