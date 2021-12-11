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
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.css' ?>">
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
                            <h1>Pengumuman</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pengumuman</li>
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
                                        <a href="#myInfo" data-toggle="modal"><button class="btn btn-primary" data-toggle="modal">Tambah Data <i class="fas fa-plus"></i></button></a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Informasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                            <?php
                                            $no = 1;
                                            foreach ($data->result_array() as $key) :
                                                $id = $key['info_id'];
                                                $judul = $key['info_nama'];
                                                $tgl = $key['info_tanggal'];
                                                $value = $key['info_isi'];


                                            ?>
                                                <tr>
                                                    <td style="text-align:center;"><?php echo $no++; ?></td>
                                                    <td><?php echo $judul; ?></td>
                                                    <td><?php echo $tgl; ?></td>
                                                    <td><?php echo $value; ?></td>
                                                    <td style="text-align:center;">
                                                        <a class="btn btn-xs btn-warning" href="<?php echo base_url() . 'admin/info/getEdit' ?>?id=<?php echo $id   ?>" title="Edit"><span class="fa fa-edit"></span> </a>
                                                        <!-- <a class="btn btn-xs btn-danger" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash-alt"></span> Hapus</a> -->
                                                        <a class="btn btn-xs btn-danger" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash-alt"></span></a>

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
        <div class="modal fade" id="myInfo">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Pengumuman</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Info/add_info'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pengumuman" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10 input-group date" id="datetimepicker5" data-target-input="nearest">
                                        <input type="text" name="tanggal" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#datetimepicker5" data-mask />
                                        <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pengumunan</label>
                                    <div class="col-sm-10 card-body pad">
                                        <textarea class="textarea" name="detail" placeholder="Tulis Detail Persyaratan " style="width: 100%; height: 20%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                        <p class="text-danger">*Tuliskan Informasi Pengumuman</p>
                                        </p>
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
        <?php
        foreach ($del->result_array() as $i) :
            $id = $i['info_id'];
        ?>
            <div class="modal fade" id="myDelete<?php echo $id; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Warning Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Info/delInfo'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Yakin ingin menghapus data <b><?php echo $i['info_nama'] ?></b>..?</p>
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
        <?php endforeach ?>
        <!-- End Modal Hapus -->
        <!-- Begin Modal Detail -->

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

    <script src="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/daterangepicker/daterangepicker.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>"></script>
    <!-- page script -->
    <script>
        $(function() {
            $('.textarea').summernote();
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
            $('[data-mask]').inputmask();
            $('#reservation').daterangepicker();
        });
    </script>
    <!-- JSON Jurusan -->

</body>

</html>