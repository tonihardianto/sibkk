<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . '/asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . '/asset/dist/css/adminlte.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <!-- <img src="<?php echo base_url() . 'asset/images/logo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light"><i class="fa fa-info-circle"></i> AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() . 'asset/images/avatar.png' ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->userdata('user_nama'); ?></a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'Applicant/Dashboard' ?>" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#loker" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Lowongan
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'Admin/Login/logout'; ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Logout
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                < <!-- Sidebar Menu -->
                    <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() . 'asset/images/avatar.png' ?>" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $this->session->userdata('user_nama') ?><i class="fa fa-check-circle" style="color: blue;"></i></h3>

                                    <p class="text-muted text-center"><?php echo $this->session->userdata('user_nik');; ?></p>

                                    <!-- <a href="<?php echo base_url() . 'applicant/profil' ?>" class="btn btn-primary btn-block"><b>Update Profil</b></a> -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- Pengumuman -->

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active">Profil Anda</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="card-body">
                                            <?php foreach ($data->result_array() as $ap) : ?>
                                                <form method="post" action="<?php echo base_url().'Applicant/Profil/updateProfil' ?>">
                                                    <div class="form-group row">
                                                        <label for="nik">Nomor NIK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="nik" class="form-control" id="nik" maxLength="16" value="<?php echo $ap['lamar_nik'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="kk">Nomor KK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="kk" class="form-control" id="kk" maxLength="16" value="<?php echo $ap['lamar_no_kk'] ?>" readonly>
                                                    </div>
                                                    <!-- <div class="form-group row">
                                                        <label for="password">Password</label>
                                                        <input type="text" name="password" class="form-control" id="password" minLength="6">
                                                        <small class="text-danger">l</small>
                                                    </div> -->
                                                    <div class="form-group row">
                                                        <label for="nama">Nama Lengkap</label>
                                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $ap['lamar_nama'] ?>" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tempat">Tempat Lahir</label>
                                                        <input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $ap['lamar_tempat_lahir'] ?>" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                            <input type="text" name="tgl_lahir" value="<?php echo $ap['lamar_tgl_lahir'] ?>" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask />

                                                        </div>
                                                        <small class="text-danger">
                                                            Format: tahun/bulan/tanggal <br> Contoh: 1998/01/01
                                                        </small>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tb">Tinggi Badan</label>
                                                        <div class="input-group">
                                                            <input onkeypress="return numOnly(event)" value="<?php echo $ap['lamar_tb'] ?>" type="text" name="tb" class="form-control" id="tb" maxLength="3" placeholder="Tinggi Badan" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">Cm</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="bb">Berat Badan</label>
                                                        <div class="input-group">
                                                            <input type="text" onkeypress="return numOnly(event)" value="<?php echo $ap['lamar_bb'] ?>" name="bb" class="form-control" id="bb" maxLength="3" placeholder="Berat Badan" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">Kg</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jurusan">Jurusan</label>
                                                        <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?php echo $ap['lamar_jurusan'] ?>" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="sekolah">Asal Sekolah</label>
                                                        <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah" value="<?php echo $ap['lamar_asal_sekolah'] ?>" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="50" required><?php echo $ap['lamar_alamat'] ?></textarea>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="telepon">Telepon</label>
                                                        <input value="<?php echo $ap['lamar_hp'] ?>" type="number" name="telepon" class="form-control" id="telepon" maxLength="15" placeholder="Telepon/Hp" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email">E-Mail</label>
                                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $ap['lamar_email'] ?>" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="bkk">BKK Pengirim</label>
                                                        <input type="text" name="bkk" class="form-control" id="bkk" value="<?php echo $ap['lamar_bkk_pengirim'] ?>" required>
                                                    </div>
                                                <?php endforeach ?>
                                        </div>
                                        <div class="card-footer">
                                            <button class="byn btn-primary btn-lg" type="submit">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->

                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php   ?>
        <!-- /.content-wrapper -->

        <!-- Modal Detail -->

        <!-- End Modal Detail -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- bs-custom-file-input -->
    <script src="<?php echo base_url() . 'asset/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>

    <script type="text/javascript">
        // Add the following code if you want the name of the file appear on select
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>

</body>

</html>