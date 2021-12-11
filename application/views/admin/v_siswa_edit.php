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
  <link rel="stylesheet" href="<?php echo base_url();
                                'asset/plugins/select2/css/select2.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url();
                                'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
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
      <a href="../../index3.html" class="brand-link">
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
            <a href="#" class="d-block">Adminitrator</a>
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
                <li class="breadcrumb-item active">Edit Siswa</li>
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
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <?php foreach ($siswa->result_array() as $key) {
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
                  <!-- form start -->
                  <form role="form" method="post" action="<?php echo base_url() . 'Admin/Siswa/update_siswa'; ?>" class="form-horizontal">
                    <div class="card-body">
                      <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                      <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">Nomor NIK</label>
                        <div class="col-sm-10">
                          <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control is-valid" name="nik" id="nik" value="<?php echo $nik ?>" maxlength="16" readonly required>
                          <div class="valid-feedback">
                            Berupa 16 digit angka sesuai dengan KTP
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nokk" class="col-sm-2 col-form-label">Nomor KK</label>
                        <div class="col-sm-10">
                          <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control is-valid" name="nokk" id="nokk" value="<?php echo $kk ?>" maxlength="16" readonly required>
                          <div class="valid-feedback">
                            Berupa 16 digit angka sesuai dengan KK
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $name ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10 input-group date" id="datetimepicker5" data-target-input="nearest">
                          <input type="text" name="tanggal_lahir" class="form-control datetimepicker-input is-warning" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#datetimepicker5" value="<?php echo $lahir; ?>" data-mask />
                          <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                          <div class="warning-feedback">
                            Contoh: 1998/01/28
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki" <?php if ($jk == 'Laki-laki') echo 'checked' ?>>
                            <label class="form-check-label" for="gender"> Laki-laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan" <?php if ($jk == 'Perempuan') echo 'checked' ?>>
                            <label class="form-check-label" for="gender"> Perempuan</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <select class="select2 form-control" id="agama" name="agama" required>
                            <option value="" disabled>--Pilih Agama--</option>
                            <option value="Islam" <?php if ($agama == 'Islam') echo 'selected'; ?>>Islam</option>
                            <option value="Kristen" <?php if ($agama == 'Kristen') echo 'selected'; ?>>Kristen</option>
                            <option value="Katolik" <?php if ($agama == 'Katolik') echo 'selected'; ?>>Katolik</option>
                            <option value="Hindu" <?php if ($agama == 'Hindu') echo 'selected'; ?>>Hindu</option>
                            <option value="Budha" <?php if ($agama == 'Budha') echo 'selected' ?>>Budha</option>
                            <option value="Konghuchu" <?php if ($agama == 'Konghuchu') echo 'selected' ?>>Konghuchu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="jurusan1" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                          <select class="form-control select2" id="jurusan1" name="jurusan1" required>
                            <option value="" disabled>--Pilih Jurusan--</option>
                            <?php foreach ($jurusan1->result_array() as $key) {
                              $jur_id = $key['jur_id'];
                              $jur_nama = $key['jur_nama'];
                              if ($jur_id == $jurusan)
                                echo "<option value='$jur_id' selected>$jur_nama</option>";
                              else
                                echo "<option value='$jur_id'>$jur_nama</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kelas1" class="col-sm-2 col-form-label">kelas</label>
                        <div class="col-sm-10">
                          <select class="form-control select2" id="kelas1" name="kelas1" required>
                            <option value="" disabled>--Pilih Kelas--</option>
                            <?php foreach ($kls1->result_array() as $key) {
                              $kls_id = $key['kelas_id'];
                              $kls_nama = $key['kelas_nama'];
                              if ($kls_id == $kelas)
                                echo "<option value='$kls_id' selected>$kls_nama</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="alamat" rows="3" cols="50" value=""><?php echo $alamat; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="status" name="status">
                            <option value="Aktif" <?php if ($status == 'Aktif') echo 'selected' ?>>Aktif</option>
                            <option value="NonAktif" <?php if ($status == 'NonAktif') echo 'selected' ?>>Non-Aktif</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                  </form>
                <?php } ?>
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
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      });
      $('#datetimepicker5').datetimepicker({
        format: 'YYYY/MM/DD'
      });
      $('[data-mask]').inputmask()
    });
  </script>
  <script>
    $(document).ready(function() {
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
  </script>

</body>

</html>