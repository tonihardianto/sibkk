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
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
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
            <li class="nav-item has-treeview active">
              <a href="<?php echo base_url().'Applicant/Dashboard' ?>" class="nav-link">
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

                  <a href="<?php echo base_url() . 'Applicant/Profil' ?>" class="btn btn-primary btn-block"><b>Update Profil</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- Pengumuman -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Pengumuman</h3>
                </div>
                <!-- /.card-header -->
                <?php foreach ($agd->result_array() as $i) :
                  $title = $i['evt_name'];
                  $tempat = $i['evt_tempat'];
                  $tgl = $i['evt_date'];
                  $jam = $i['evt_time'];
                  $value = $i['evt_main'];


                ?>
                  <div class="card-body">
                    <strong><i class="fas fa-bullhorn mr-1"></i> <?php echo $title ?></strong>
                    <div>
                      <span class="description"><?php echo $tgl ?></span>
                    </div>
                    <p class="text-muted">
                      <?php echo $value; ?>
                    </p>

                    <hr>
                  </div>
                <?php endforeach ?>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Timeline</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Lengkapi Berkas</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Data Anda</a></li> -->
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <?php $this->load->view('menu/alert'); ?>
                      <!-- Post -->
                      <?php foreach ($history->result_array() as $i) : ?>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="<?php echo base_url() . 'asset/images/avatar.png' ?>" alt="user image">
                            <span class="username">
                              <a href="#"><?= $this->session->userdata('user_nama'); ?>.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-thumbtack"></i></a>
                            </span>
                            <span class="description">Your History</span>
                          </div>
                          <!-- /.user-block -->

                          <p>
                            Anda telah mengajukan lamaran di <b><?php echo $i['his_company'] ?></b> pada <?php echo $i['his_date'] ?>
                          </p>

                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>

                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                      <?php endforeach ?>
                      <!-- /.post -->
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                      <!-- The timeline -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-danger">
                            10 Feb. 2014
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                              weebly ning heekya handango imeem plugg dopplr jibjab, movity
                              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                              quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-user bg-info"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                            </h3>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                      <form action="<?php echo base_url() . 'Applicant/dashboard/daftar' ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">File Lampiran</label>
                          <div class="col-sm-10">
                            <div class="custom-file">
                              <input type="file" name="berkas" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Pilih berkas..</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->

              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
            <div class="col-12">
              <div class="card card-primary" id="loker">
                <div class="card-header">
                  <h3 class="card-title">Informasi Lowongan Pekerjaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <?php foreach ($loker->result_array() as $l) : ?>
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
                            <a href="#myDetail<?php echo $l['loker_id']; ?>" data-toggle="modal" class="btn btn-info"><i class="fa fa-stream"> Detail</i></a>
                            <a href="<?php echo base_url() . 'Applicant/Dashboard/detLoker' ?>?id=<?php echo $l['loker_id']   ?>" class="btn btn-success" style="float: right"><i class="fa fa-sign-in-alt"> Daftar</i> </a>
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
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <?php   ?>
    <!-- /.content-wrapper -->

    <!-- Modal Detail -->
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