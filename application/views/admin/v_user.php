<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Pengguna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();
                                'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <?php $this->load->view('menu/v_top_bar'); ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo base_url() . 'asset/images/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BKK KARYA SAGA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="<?php echo base_url() . 'asset/images/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image' ?>"> -->
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <?php $this->load->view('menu/v_sidebar.php'); ?>
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
              <h1>Data Pengguna</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Pengguna</li>
              </ol>
            </div>
          </div>
          <?php $this->view('menu/alert'); ?>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!--card -->
              <div class="card">
                <div class="card-header">
                  <div class="btn-group">
                    <a href="#" data-toggle="modal" data-target="#myUser"><button class="btn btn-primary">Tambah Pengguna <i class="fas fa-plus"></i></button></a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($content->result_array() as $key) :
                        $id = $key['user_id'];
                      ?>
                        <tr>
                          <td style="text-align:center;"><?php echo $no++; ?></td>
                          <td><?php echo $key['user_username']; ?></td>
                          <td><?php echo $key['user_fullname']; ?></td>
                          <td><?php echo $key['user_alamat']; ?></td>
                          <td><?php echo $key['user_phone']; ?></td>
                          <td><?php echo $key['user_mail']; ?></td>
                          <td><?php echo $key['user_level'] ?></td>
                          <td style="text-align:center;">
                            <a href="#myEdit<?php echo $id; ?>" data-id="<?php $key['user_id']; ?>" type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash-alt"></span> Hapus</a>

                          </td>
                        </tr>
                      <?php endforeach ?>
                      </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Begin Modal Add -->
    <div class="modal fade" id="myUser">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Pengguna</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . 'Admin/User/add_user'; ?>" class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="userpass" id="inputPassword3" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fullname" id="inputEmail3" placeholder="Nama Lengkap" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="inputEmail3" placeholder="Alamat" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="inputEmail3" placeholder="Telepon" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="level" name="level" required>
                      <option value="Admin">Admin</option>
                      <option value="Alumni">Alumni</option>
                      <option value="Company">Company</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck2">
                      <label class="form-check-label" for="exampleCheck2">Remember me</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal add -->
    <!-- Begin Modal Edit -->
    <?php foreach ($content->result_array() as $key) :
      $id = $key['user_id'];
      $user = $key['user_username'];
      $pass = $key['user_password'];
      $name = $key['user_fullname'];
      $address = $key['user_alamat'];
      $phone = $key['user_phone'];
      $mail = $key['user_mail'];
      $level = $key['user_level'];
    ?>

      <div class="modal fade" id="myEdit<?php echo $id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo base_url() . 'Admin/User/edit_user'; ?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                  <input name="id" type="hidden" value="<?php echo $id; ?>">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" id="inputEmail3" value="<?php echo $user; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="userpass" id="inputPassword3" placeholder="New Password..." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="fullname" id="inputEmail3" value="<?php echo $name; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="address" id="inputEmail3" value="<?php echo $address; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" id="inputEmail3" value="<?php echo $phone; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo $mail; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="level" required>
                        <option value="Admin" <?php if ($level == 'Admin') echo 'selected'; ?>>Admin</option>
                        <option value="Alumni" <?php if ($level == 'Alumni') echo 'selected'; ?>>Alumni</option>
                        <option value="Company" <?php if ($level == 'Company') echo 'selected'; ?>>Company</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-primary toastrDefaultSuccess" data-toastrDefaultSuccess="toastrDefaultSuccess">Simpan</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <?php endforeach ?>
    <!-- End Modal edit -->
    <!-- Begin Modal hapus -->
    <?php foreach ($content->result_array() as $key) {
      $id = $key['user_id'];
      $user = $key['user_username'];
      $pass = $key['user_password'];
      $name = $key['user_fullname'];
      $address = $key['user_alamat'];
      $phone = $key['user_phone'];
      $mail = $key['user_mail'];
      $level = $key['user_level'];
    ?>

      <div class="modal fade" id="myDelete<?php echo $id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Warning Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?php echo base_url() . 'Admin/User/del_user'; ?>" id="form_sample_1" class="form-horizontal">
              <div class="modal-body">
                <p>Yakin ingin menghapus pengguna <b><?php echo $name; ?></b>..?</p>
                <input name="id" type="hidden" value="<?php echo $id; ?>">
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Hapus</button>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </form>
      </div>
    <?php } ?>
    <!-- End Modal Hapus -->

    <!-- Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2021 <b>BKK KARYA SAGA</b>.</strong> All rights
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
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'asset/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/dist/js/myscript.js' ?>"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script type="text/javascript">
    const toastrDefaultSuccess = $('toastrDefaultSuccess').data('toastrDefaultSuccess');
  </script>
</body>

</html>