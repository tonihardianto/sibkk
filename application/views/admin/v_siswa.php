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
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/daterangepicker/daterangepicker.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/bootstrap-select.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2/css/select2.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
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
        <span class="brand-text font-weight-light">BKK Karya Saga</span>
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
              <h1>Data Siswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Siswa</li>
              </ol>
            </div>
          </div>
          <!-- Notification -->
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
                    <a href="#" data-toggle="modal" data-target="#myUser"><button class="btn btn-primary">Tambah Siswa <i class="fas fa-plus"></i></button></a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">
                      <?php
                      $no = 1;
                      foreach ($content->result_array() as $key) :
                        $id = $key['siswa_id'];
                      ?>
                        <tr>
                          <td style="text-align:center;"><?php echo $no++; ?></td>
                          <td><a href="#myDetail<?php echo $id; ?>" data-toggle="modal" title="Detail"><span class="fa fa-info-circle"></span></a> <?php echo $key['siswa_nik']; ?></td>
                          <td><?php echo $key['siswa_nama']; ?></td>
                          <td><?php echo $key['siswa_tempat_lahir']; ?></td>
                          <td><?php echo $key['siswa_tgl_lahir']; ?></td>
                          <td><?php echo $key['siswa_jenis_kelamin'] ?></td>
                          <td style="text-align:center;">
                            <a class="btn btn-xs btn-warning" href="<?php echo base_url() . 'Admin/Siswa/get_edit' ?>?Id=<?php echo $id ?>" title="Edit"><span class="fa fa-edit"></span> Edit</a>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="myUser">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Siswa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . 'Admin/Siswa/add_siswa'; ?>" class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="nik" class="col-sm-2 col-form-label">Nomor NIK</label>
                  <div class="col-sm-10">
                    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control is-warning" name="nik" id="nik" maxlength="16" placeholder="Nomor NIK..." required>
                    <div class="warning-feedback">
                      Berupa 16 digit angka sesuai dengan KTP
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nokk" class="col-sm-2 col-form-label">Nomor KK</label>
                  <div class="col-sm-10">
                    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control is-warning" name="nokk" id="nokk" maxlength="16" placeholder="Nomor KK..." required>
                    <div class="warning-feedback">
                      Berupa 16 digit angka sesuai dengan KK
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nama Lengkap..." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir..." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tempat_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10 input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" name="tanggal_lahir" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask />
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki">
                      <label class="form-check-label" for="gender"> Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                      <label class="form-check-label" for="gender"> Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" id="agama" name="agama" required>
                      <option value="" selected disabled>--Pilih Agama--</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghuchu">Konghuchu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" id="jurusan" name="jurusan" required>
                      <option value="" selected disabled>--Pilih Jurusan--</option>
                      <?php foreach ($jurusan->result_array() as $key) :
                        $jur_id = $key['jur_id'];
                        $jur_nama = $key['jur_nama']; ?>
                        <option value="<?php echo $jur_id; ?>"><?php echo $jur_nama; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" id="kelas" name="kelas" required>
                      <option value="" selected disabled>--Pilih Kelas--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" rows="3" cols="50"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="status" name="status">
                      <option value="" selected disabled>--Pilih Status--</option>
                      <option value="Aktif">Aktif</option>
                      <option value="NonAktif">Non-Aktif</option>
                    </select>
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

    <!-- End Modal edit -->
    <!-- Begin Modal hapus -->
    <?php foreach ($content->result_array() as $key) {
      $id = $key['siswa_id'];
      $nik = $key['siswa_nik'];
      $kk = $key['siswa_no_kk'];
      $name = $key['siswa_nama'];
      $tempat = $key['siswa_tempat_lahir'];
      $lahir = $key['siswa_tgl_lahir'];
      $jk = $key['siswa_jenis_kelamin'];
      $agama = $key['siswa_agama'];
      $kelas = $key['siswa_kelas_id'];
      $jurusan = $key['siswa_jur_id'];
      $alamat = $key['siswa_alamat'];
      $status = $key['siswa_status'];
    ?>

      <div class="modal fade" id="myDelete<?php echo $id; ?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" data-style="warning">Peringatan!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?php echo base_url() . 'Admin/Siswa/del_siswa'; ?>" id="form_sample_1" class="form-horizontal">
              <div class="modal-body">
                <p>Yakin ingin menghapus semua data <b><?php echo $name; ?></b>..?</p>
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
    <!-- Begin Modal Detail -->
    <?php foreach ($content->result_array() as $key) {
      $id = $key['siswa_id'];
      $nik = $key['siswa_nik'];
      $kk = $key['siswa_no_kk'];
      $name = $key['siswa_nama'];
      $tempat = $key['siswa_tempat_lahir'];
      $lahir = $key['siswa_tgl_lahir'];
      $jk = $key['siswa_jenis_kelamin'];
      $agama = $key['siswa_agama'];
      $jurusan = $key['siswa_jur_id'];
      $kelas = $key['siswa_kelas_id'];
      $alamat = $key['siswa_alamat'];
      $status = $key['siswa_status'];
    ?>

      <div class="modal fade bd-example-modal-lg" id="myDetail<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Detail Informasi <b><?php echo $name; ?></b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">No NIK</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $nik; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">No KK</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $kk; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $name; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $tempat; ?>, <?php echo $lahir ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $jk; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $agama; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                  <?php foreach ($jurusan2->result_array() as $key) {
                    $j_id = $key['jur_id'];
                    $j_nama = $key['jur_nama'];
                    if ($j_id == $jurusan)
                      echo "<label class='col-form-label'>: $j_nama</label>";
                  } ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                  <?php foreach ($kls2->result_array() as $key) {
                    $k_id = $key['kelas_id'];
                    $k_nama = $key['kelas_nama'];
                    if ($k_id == $kelas)
                      echo "<label class='col-form-label'>: $k_nama</label>";
                  } ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $alamat; ?></label>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <label class="col-form-label">: <?php echo $status; ?></label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- End Modal Detail -->

    <!-- Footer -->
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
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'asset/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/moment/moment.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/daterangepicker/daterangepicker.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>"></script>
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
      $('#reservationdate').datetimepicker({
        format: 'YYYY/MM/DD'
      });
      $('#datetimepicker5').datetimepicker({
        format: 'YYYY/MM/DD'
      });
      $('#datemask').inputmask('yyyy/mm/dd', {
        'placeholder': 'yyyy/mm/dd'
      });
      $('[data-mask]').inputmask()
    });
  </script>
  <!-- JSON Jurusan -->
  <script>
    $(document).ready(function() {
      $('#jurusan').change(function() {
        var id = $(this).val();
        $.ajax({
          url: "<?php echo base_url('admin/siswa/get_kelas'); ?>",
          method: "POST",
          data: {
            id: id
          },
          async: true,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              html += '<option value=' + data[i].kelas_id + '>' + data[i].kelas_nama + '</option>';
            }
            $('#kelas').html(html);
          }
        });
        return false;
      });
    });
  </script>
  <script>
    <?php foreach ($content->result_array() as $key) {
      $id = $key['siswa_id'];
    ?>

      $(document).ready(function() {
        $('#myEdit<?php echo $id; ?>').on('shown.bs.modal', function() {
          $('#jurusan1').change(function() {
            var id = $(this).val();
            $.ajax({
              url: "<?php echo base_url('admin/siswa/get_kelas'); ?>",
              method: "POST",
              data: {
                id: id
              },
              async: true,
              dataType: 'json',
              success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                  html += '<option value=' + data[i].kelas_id + '>' + data[i].kelas_nama + '</option>';
                }
                $('#kelas1').html(html);
              }
            });
            return false;
          });
        });
      });
    <?php } ?>
  </script>

</body>

</html>