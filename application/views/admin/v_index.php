<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title ?> | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
      <!-- Left navbar links -->
      <?php $this->load->view('menu/v_top_bar'); ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo base_url() . 'asset/images/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3' ?>" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $title ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="<?php echo base_url() . 'asset/images/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image' ?>"> -->
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <?php $this->load->view('menu/v_sidebar'); ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-shield"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Data Pengguna</span>
                  <span class="info-box-number">
                    <?php echo $user; ?>
                    <!-- <small> Penguna</small> -->
                  </span>
                  <a href="<?php echo base_url() . 'Admin/User'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Data Siswa</span>
                  <span class="info-box-number"><?php echo $siswa; ?></span>
                  <a href="<?php echo base_url() . 'Admin/Siswa'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Loker</span>
                  <span class="info-box-number"><?php echo $loker; ?></span>
                  <a href="<?php echo base_url() . 'Admin/Loker' ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Data Pelamar</span>
                  <span class="info-box-number"><?php echo $pelamar; ?></span>
                  <a href="<?php echo base_url() . 'Admin/Pelamar'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->


          <!-- /.row -->

          <!-- Main row -->

          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Member</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body p-0">
              <div class="table-responsive">

                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor NIK</th>
                      <th>Nama Lengkap</th>
                      <th>Asal Sekolah</th>
                      <th>Telepon</th>
                      <th>BKK Pengirim</th>
                    </tr>
                  </thead>
                  <?php foreach ($appli->result_array() as $i) :
                    $no = 0;
                    $no++;
                  ?>
                    <tbody>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $i['lamar_nama'] ?></td>
                        <td><?php echo $i['lamar_nik'] ?></td>
                        <td><?php echo $i['lamar_asal_sekolah'] ?></td>
                        <td><?php echo $i['lamar_hp'] ?></td>
                        <td><?php echo $i['lamar_bkk_pengirim'] ?></td>
                      </tr>
                    </tbody>
                  <?php endforeach ?>
                </table>

              </div>
              <!-- /.table-responsive -->
            </div>

            <!-- /.card-body -->
            <!-- <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                </div> -->
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
          <!-- /.col -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!--/. container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 BKK KARYA SAWUNGGALIH</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() . 'asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'asset/dist/js/adminlte.js' ?>"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?php echo base_url() . 'asset/plugins/jquery-mousewheel/jquery.mousewheel.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/raphael/raphael.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/jquery-mapael/jquery.mapael.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/jquery-mapael/maps/usa_states.min.js' ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url() . 'asset/plugins/chart.js/Chart.min.js' ?>"></script>

  <!-- PAGE SCRIPTS -->
  <script src="<?php echo base_url() . 'asset/dist/js/pages/dashboard2.js' ?>"></script>
</body>

</html>