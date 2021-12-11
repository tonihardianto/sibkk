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
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/assets/css/custom.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?php echo base_url() ?>" class="navbar-brand">
                    <!-- <img src="<?php echo base_url() . 'asset/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-light"><b>BKK KARYA SAGA</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level three -->

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    
                </div>

                <!-- Right navbar links -->
                
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0 text-dark"> Informasi <small>Lowongan Kerja</small></h1> -->
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Lowongan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Lowongan Pekerjaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($data->result_array() as $l) : ?>
                                            <div class="col-sm-4">
                                                <div class="card card-primary card-outline">
                                                    <div class="card-header">
                                                        <h5 class="card-title m-0">Featured</h5>
                                                    </div>
                                                    <div class="ribbon-wrapper ribbon-lg">
                                                        <div class="ribbon bg-danger">
                                                            Lowongan
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <h6 class="card-title"><b><?php echo $l['loker_judul'] ?></b></h6>
                                                        <br>
                                                        <dd><b>Posisi : <?php echo $l['loker_posisi'] ?></b></dd>
                                                        <p class="card-text">Tersedia : <?php echo $l['loker_tgl_buka'] ?></p>
                                                        <a href="#myDetail<?php echo $l['loker_id']; ?>" data-toggle="modal" class="btn btn-primary"><i class="fa fa-stream"> Detail</i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php foreach ($data1->result_array() as $k) :

            $id = $k['loker_id'];
            $detail = $k['loker_detail'];

        ?>
            <div class="modal fade bd-example-modal-lg" role="modal" id="myDetail<?php echo $id; ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?php echo $k['loker_judul'] ?></h4>
                            <br>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <h6><b>DETAIL LOWONGAN:</b></h6><br>
                            <dd><b>Posisi : <?php echo $k['loker_posisi'] ?></b></dd><br>
                            <dd><?php echo $detail; ?></dd>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-success float-right" data-dismiss="modal">Tutup</button>
                            <!-- <button type="submit" class="btn btn-success"><i class="icon-remove icon-white"></i>Close</button> -->
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <?php endforeach ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
</body>

</html>