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
            <?php $this->view('menu/alert'); ?>
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <!-- <div class="col-lg-6"> -->
                        <div class="card card-primary card-outline mx-auto" style="width: 50%;">
                            <?php $this->view('menu/alert'); ?>
                            <div class="card-header">
                                <h5 class="card-title m-0">Form Pendaftaran</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url() . 'Applicant/Register/add_applicant'; ?>" class="form-horizontal" role="form" id="quickForm">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="nik">Nomor NIK</label>
                                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="nik" class="form-control" id="nik" maxLength="16" placeholder="Masukkan NIK">
                                        </div>
                                        <div class="form-group row">
                                            <label for="kk">Nomor KK</label>
                                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="kk" class="form-control" id="kk" maxLength="16" placeholder="Nomor KK">
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group row">
                                            <label for="tempat">Tempat Lahir</label>
                                            <input type="text" name="tempat" class="form-control" id="tempat" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask />
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tb">Tinggi Badan</label>
                                            <div class="input-group">
                                                <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="tb" class="form-control" id="tb" maxLength="3" placeholder="Tinggi Badan">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">Cm</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bb">Berat Badan</label>
                                            <div class="input-group">
                                                <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="bb" class="form-control" id="bb" maxLength="3" placeholder="Berat Badan">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">Kg</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select class="form-control select2" id="jk" name="jk" required>
                                                <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>

                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tempat">Agama</label>
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
                                        <div class="form-group row">
                                            <label for="jurusan">Jurusan</label>
                                            <select class="form-control select2" id="jurusan" name="jurusan" required>
                                                <option value="" selected disabled>--Pilih Jurusan--</option>
                                                <?php foreach ($jurusan->result_array() as $key) :
                                                    $jur_id = $key['jur_id'];
                                                    $jur_nama = $key['jur_nama']; ?>
                                                    <option value="<?php echo $jur_id; ?>"><?php echo $jur_nama; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelas">Kelas</label>
                                            <select class="form-control select2" id="kelas" name="kelas" required>
                                                <option value="" selected disabled>--Pilih Kelas--</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sekolah">Asal Sekolah</label>
                                            <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah">
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="50" placeholder="Alamat"></textarea>
                                        </div>

                                        <div class="form-group row">
                                            <label for="telepon">Telepon</label>
                                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="telepon" class="form-control" id="telepon" maxLength="15" placeholder="Telepon/Hp">
                                        </div>
                                        <div class="form-group row">
                                            <label for="email">E-Mail</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
                                        </div>
                                        <div class="form-group row">
                                            <label for="bkk">BKK Pengirim</label>
                                            <input type="text" name="bkk" class="form-control" id="bkk" placeholder="BKK Pengirim ">
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">I agree to the
                                                    <a href="#">terms of service</a>.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Daftar</button>
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
                <strong>Copyright &copy; 2021 <b>BKK KARYA SAGA</b>.</strong> All rights
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
        <script>
            $(document).ready(function() {
                function hiden() {
                    $('#quickForm').hide();
                }
            })
        </script>

        <script>
            $(document).ready(function() {
                $('#jurusan').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url('applicant/register/get_kelas'); ?>",
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
                                html += '<option value=' + data[i].kelas_id + '>' + data[i]
                                    .kelas_nama + '</option>';
                            }
                            $('#kelas').html(html);
                        }
                    });
                    return false;
                });

                $('select').select2({
                    theme: 'bootstrap4',
                });
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
                // $("#quickForm").submit(function(e) {
                //     e.preventDefault();
                //     var url = '<?php echo base_url() . 'applicant/login' ?>'
                //     $.ajax({
                //         url: '<?php echo base_url('applicant/register/add_applicant'); ?>',
                //         type: 'post',
                //         data: $(this).serialize(),
                //         success: function(data) {
                //             toastr.info(
                //                 'Pendaftaran Anda Sedang Kami diproses.'
                //             );
                //             //document.getElementById("quickForm").reset();
                //             <?php
                                //             //$this->session->set_flashdata('success', 'Silahkan Cek Email Anda Untuk Info Login!');
                                //             
                                ?>
                //             window.location.href= url;
                //             toastr.info('Pendaftaran Anda Sedang Kami diproses.');
                //         }

                //     })
                // });
                $('#quickForm').validate({
                    rules: {
                        nik: {
                            required: true,
                            minlength: 16,
                            maxlength: 16
                        },
                        kk: {
                            required: true,
                            minlength: 16,
                            maxlength: 16
                        },
                        nama: {
                            required: true,
                        },
                        tempat: {
                            required: true,
                        },
                        tgl_lahir: {
                            required: true,
                        },
                        jk: {
                            required: true,
                        },
                        alamat: {
                            required: true,
                        },
                        sekolah: {
                            required: true,
                        },
                        agama: {
                            required: true,
                        },
                        jurusan: {
                            required: true,
                        },
                        kelas: {
                            required: true,
                        },
                        telepon: {
                            required: true,
                            minlength: 10
                        },
                        email: {
                            required: true,
                            email: true

                        },
                        terms: {
                            required: true,
                        },
                    },
                    messages: {
                        nik: {
                            required: "Nomor NIK Harus Diisi!",
                            minlength: "Nomor NIK Tidak Boleh Kurang Dari 16 Digit",
                            maxlength: "Nomor NIK Tidak Boleh Lebih Dari 16 Digit"
                        },
                        kk: {
                            required: "Nomor KK Harus Diisi!",
                            minlength: "Nomor KK Tidak Boleh Kurang Dari 16 Digit",
                            maxlength: "Nomor KK Tidak Boleh Lebih Dari 16 Digit"
                        },
                        nama: {
                            required: "Nama Harus Diisi!"
                        },
                        tempat: {
                            required: "Tempat Lahir Tidak Boleh Kosong!"
                        },
                        tgl_lahir: {
                            required: "Tanggal Lahir Tidak Boleh Kosong!"
                        },
                        jk: {
                            required: "Silahkan Pilih Jenis Kelamin!"
                        },
                        alamat: {
                            required: "Alamat Tidak Boleh Kosong!"
                        },
                        sekolah: {
                            required: "Harap Isi Asal Sekolah"
                        },
                        agama: {
                            required: "Silahkan Pilih Agama!"
                        },
                        jurusan: {
                            required: "Jurusan Tidak Boleh Kosong!"
                        },
                        kelas: {
                            required: "Silahkan Isi Kelas Anda!"
                        },
                        telepon: {
                            required: "Nomor Hp Wajib diisi ya.",
                            minlength: "Masukkan Nomor Hp Dengan Benar!"
                        },
                        email: {
                            required: "Email Tidak Boleh Kosong!",
                            email: "Masukkan Email Dengan Benar! @"
                        },
                        terms: "Dengan mendaftar, anda harus menyetujui kebijakan kami."
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