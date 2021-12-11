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
            <a href="../../index3.html" class="brand-link">
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
                            <h1>Data Member</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Member</li>
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
                                <!-- <div class="card-header">
                                    <div class="btn-group">
                                        <a href="#" data-toggle="modal" data-target="#myUser"><button class="btn btn-primary">Tambah Siswa <i class="fas fa-plus"></i></button></a>
                                    </div>
                                </div> -->
                                <!-- /.card-header -->
                                <?php foreach($data->result_array() as $i):?>
                                <div class="card-body">
                                    <form method="post" action="<?php echo base_url() . 'Admin/Pelamar/editMember'; ?>" class="form-horizontal" role="form" id="quickForm" enctype="multipart/form-data">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    Edit Member
                                                </h5>
                                            </div>
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="nik">Nomor NIK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="nik" class="form-control" id="nik" maxLength="16" value="<?php echo $i['lamar_nik'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="kk">Nomor KK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="kk" class="form-control" id="kk" maxLength="16" value="<?php echo $i['lamar_no_kk'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama">Nama Lengkap</label>
                                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $i['lamar_nama'] ?>">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tempat">Tempat Lahir</label>
                                                        <input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $i['lamar_tempat_lahir'] ?>">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                            <input type="text" name="tgl_lahir" value="<?php echo $i['lamar_tgl_lahir'] ?>" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask />
                                                            <div class="valid-feedback">
                                                                Format: tahun/bulan/tanggal
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tb">Tinggi Badan</label>
                                                        <div class="input-group">
                                                            <input onkeypress="return numOnly(event)" type="text" name="tb" class="form-control" id="tb" maxLength="3" value="<?php echo $i['lamar_tb'] ?>" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">Cm</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="bb">Berat Badan</label>
                                                        <div class="input-group">
                                                            <input type="text" onkeypress="return numOnly(event)" name="bb" class="form-control" id="bb" maxLength="3" value="<?php echo $i['lamar_bb'] ?>" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">Kg</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="form-group row">-->
                                                    <!--    <label for="jk">Jenis Kelamin</label>-->
                                                    <!--    <select class="form-control select2" id="jk" name="jk" required>-->
                                                    <!--        <option value="" selected disabled>--Pilih Jenis Kelamin--</option>-->
                                                    <!--        <option value="Laki-laki">Laki-laki</option>-->
                                                    <!--        <option value="Perempuan">Perempuan</option>-->

                                                    <!--    </select>-->
                                                    <!--</div>-->
                                                    <!--<div class="form-group row">-->
                                                    <!--    <label for="tempat">Agama</label>-->
                                                    <!--    <select class="select2 form-control" id="agama" name="agama" required>-->
                                                    <!--        <option value="" selected disabled>--Pilih Agama--</option>-->
                                                    <!--        <option value="Islam">Islam</option>-->
                                                    <!--        <option value="Kristen">Kristen</option>-->
                                                    <!--        <option value="Katolik">Katolik</option>-->
                                                    <!--        <option value="Hindu">Hindu</option>-->
                                                    <!--        <option value="Budha">Budha</option>-->
                                                    <!--        <option value="Konghuchu">Konghuchu</option>-->
                                                    <!--    </select>-->
                                                    <!--</div>-->
                                                    <div class="form-group row">
                                                        <label for="jurusan">Jurusan</label>
                                                        <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?php echo $i['lamar_jurusan'] ?>" required>
                                                    </div>
                                                    <!-- <div class="form-group row">
                                                        <label for="kelas">Kelas</label>
                                                        <select class="form-control select2" id="kelas" name="kelas" required>
                                                            <option value="" selected disabled>--Pilih Kelas--</option>
                                                        </select>
                                                    </div> -->
                                                    <div class="form-group row">
                                                        <label for="sekolah">Asal Sekolah</label>
                                                        <input type="text" name="sekolah" class="form-control" id="sekolah" value="<?php echo $i['lamar_asal_sekolah'] ?>">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="50" placeholder="Alamat"><?php echo $i['lamar_alamat'] ?></textarea>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="telepon">Telepon</label>
                                                        <input onkeypress="return numOnly(event)" type="text" name="telepon" class="form-control" id="telepon" maxLength="15" value="<?php echo $i['lamar_hp'] ?>">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email">E-Mail</label>
                                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $i['lamar_email'] ?>">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="bkk">BKK Pengirim</label>
                                                        <input type="text" name="bkk" class="form-control" id="bkk" value="<?php echo $i['lamar_bkk_pengirim'] ?>" required>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <!--<a class="btn btn-secondary" href="<?php echo base_url() ?>">Cancel</a>-->
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                                </div>
                                <?php endforeach ?>
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

        <!-- /.modal add -->
        <!-- Begin Modal Edit -->

        <!-- End Modal edit -->
        <!-- Begin Modal hapus -->

        <!-- End Modal Hapus -->
        <!-- Begin Modal Detail -->

        <!-- End Modal Detail -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2021 BKK KARYA SAWUNGGALIH.</strong> All rights
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

</body>

</html>