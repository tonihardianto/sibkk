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
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2/css/select2.min.css' ?>">
    <!-- TempusDominus -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css' ?>">
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
                        <div class="alert alert-info alert-dismissible mx-auto">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="icon fas fa-info-circle"></i>
                            Silahkan cek data anda dengan baik. Pastikan tidak ada kesalahan. Apabila ada data yang kurang tepat,
                            silahkan lakukan perubahan diprofil anda.
                        </div>
                        <div class="card card-primary card-outline mx-auto" style="width: 90%;">

                            <div class="card-header">
                                <h5 class="card-title m-0">Form Pendaftaran</h5>
                            </div>

                            <div class="card-body">
                                <?php $this->view('menu/alert'); ?>
                                <!-- Form -->
                                <form method="post" action="<?php echo base_url() . 'Applicant/Dashboard/pelamar'; ?>" class="form-horizontal" role="form" id="quickForm" enctype="multipart/form-data">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        #1 Data Diri</a><span class="text-danger"> Pastikan Data Anda Benar!</span>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <?php foreach ($loker->result_array() as $lok) : ?>
                                                        <div class="form-group row">
                                                            <label for="nik">Nama Perusahaan</label>
                                                            <input type="hidden" name="idloker" class="form-control" id="loker" value="<?php echo $lok['loker_id'] ?>" readonly>
                                                            <input type="text" name="loker" class="form-control" id="loker" value="<?php echo $lok['loker_judul'] ?>" readonly>
                                                        </div>
                                                    <?php endforeach ?>
                                                    <?php foreach ($apply->result_array() as $ap) : ?>
                                                        <div class="form-group row">
                                                            <label for="nik">Nomor NIK</label>
                                                            <input type="text" onkeypress="return numOnly(event)" name="nik" class="form-control" id="nik" maxLength="16" value="<?php echo $ap['lamar_nik'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="kk">Nomor KK</label>
                                                            <input type="text" onkeypress="return numOnly(event)" name="kk" class="form-control" id="kk" maxLength="16" value="<?php echo $ap['lamar_no_kk'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="nama">Nama Lengkap</label>
                                                            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $ap['lamar_nama'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tempat">Tempat Lahir</label>
                                                            <input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $ap['lamar_tempat_lahir'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                                <input type="text" name="tgl_lahir" value="<?php echo $ap['lamar_tgl_lahir'] ?>" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask readonly />
                                                                <div class="valid-feedback">
                                                                    Format: tahun/bulan/tanggal
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tb">Tinggi Badan</label>
                                                            <div class="input-group">
                                                                <input onkeypress="return numOnly(event)" value="<?php echo $ap['lamar_tb'] ?>" type="text" name="tb" class="form-control" id="tb" maxLength="3" placeholder="Tinggi Badan" readonly>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">Cm</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="bb">Berat Badan</label>
                                                            <div class="input-group">
                                                                <input type="text" onkeypress="return numOnly(event)" value="<?php echo $ap['lamar_bb'] ?>" name="bb" class="form-control" id="bb" maxLength="3" placeholder="Berat Badan" readonly>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">Kg</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="jk">Jenis Kelamin</label>
                                                            <input type="text" name="jk" class="form-control" id="jk" value="<?php echo $ap['lamar_jk'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tempat">Agama</label>
                                                            <input type="text" name="agama" class="form-control" id="agama" value="<?php echo $ap['lamar_agama'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="jurusan">Jurusan</label>
                                                            <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?php echo $ap['lamar_jurusan'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="sekolah">Asal Sekolah</label>
                                                            <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah" value="<?php echo $ap['lamar_asal_sekolah'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="alamat">Alamat</label>
                                                            <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="50" readonly><?php echo $ap['lamar_alamat'] ?></textarea>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="telepon">Telepon</label>
                                                            <input value="<?php echo $ap['lamar_hp'] ?>" readonly type="number" name="telepon" class="form-control" id="telepon" maxLength="15" placeholder="Telepon/Hp">
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email">E-Mail</label>
                                                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $ap['lamar_email'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="bkk">BKK Pengirim</label>
                                                            <input type="text" name="bkk" class="form-control" id="bkk" value="<?php echo $ap['lamar_bkk_pengirim'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="bkk">Upload Berkas Persyaratan</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="berkas" id="berkas" onchange="validasiFile()" class="custom-file-input">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                            <small class="text-danger"> Format berkas harus .zip atau .rar</small>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-secondary" onclick="goBack()">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Proses Pendaftaran</button>
                                    </div>
                                </form>

                            </div>
                            <!-- </div> -->
                            <!-- /.col-md-6 -->
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
        </div>
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
        <!-- Sweet Alert -->
        <script src="<?php echo base_url() . 'asset/plugins/sweetalert2/sweetalert2.min.js' ?>"></script>
        <!-- input mask -->
        <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
        <!-- tempus dominus -->
        <script src="<?php echo base_url() . 'asset/plugins/moment/moment.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
        <script type="text/javascript">
            function goBack() {
                window.history.back();
            }

            const Toast = Swal.mixin({
                toast: true,
                position: 'bot-mid',
                showConfirmButton: false,
                timer: 3000
            });

            function validasiFile() {
                var inputFile = document.getElementById('berkas');
                var pathFile = inputFile.value;
                var ekstensiOk = /(\.zip|\.rar)$/i;
                if (!ekstensiOk.exec(pathFile)) {
                    Toast.fire({
                        icon: 'error',
                        title: ' Berkas Harus berupa .zip atau .rar !'
                    })
                    // toastr.error('Berkas harus berupa .zip atau .rar !');
                    inputFile.value = '';
                    return false;
                } else {
                    //Pratinjau gambar
                    if (inputFile.files && inputFile.files[0]) {
                        reader.readAsDataURL(inputFile.files[0]);
                    }
                }
            }

            function numOnly(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                return true;
            }
        </script>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>



        <script>
            $(function() {
                $('#reservationdate').datetimepicker({
                    format: 'YYYY/MM/DD'
                });
                $('#datemask').inputmask('yyyy/mm/dd', {
                    'placeholder': 'yyyy/mm/dd'
                });
                $('[data-mask]').inputmask()
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#quickForm').validate({
                    rules: {
                        berkas: {
                            required: true,
                        },
                    },
                    messages: {
                        berkas: {
                            required: "Silahkan upload berkas prsyaratan!"
                        },
                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });
            });
        </script>
</body>

</html>