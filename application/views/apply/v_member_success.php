<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <!-- Select2 -->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2/css/select2.min.css' ?>">
    <!-- TempusDominus -->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('apply/v_top_bar'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                <li class="breadcrumb-item active">Top Navigation</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Alert -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <!-- <div class="col-lg-6"> -->
                        <div class="alert alert-success alert-dismissible mx-auto">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5>
                                    <i class="icon fas fa-check"></i>
                                     Berhasil
                                    </h5>
                                    Pendaftaran anda berhasil. Silahkan Login!
                                </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            
        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
        <!-- jquery-validation -->
        <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/jquery.validate.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/additional-methods.min.js' ?>"></script>
        <!-- Toastr -->
        <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
        <!-- input mask -->
        <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
        <!-- tempus dominus -->
        <script src="<?php echo base_url() . 'asset/plugins/moment/moment.min.js' ?>"></script>
        <script
            src="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>

</body>

</html>