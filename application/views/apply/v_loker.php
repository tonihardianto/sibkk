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

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <!-- <div class="col-lg-6"> -->
                        <div class="card card-primary card-outline mx-auto" style="width: 90%;">

                            <div class="card-header">
                                <h5 class="card-title m-0">Form Pendaftaran</h5>
                            </div>
                            <div class="card-body">
                                <?php $this->view('menu/alert'); ?>
                                <!-- Form -->
                                <form method="post" action="<?php echo base_url() . 'Applicant/Register/daftar'; ?>" class="form-horizontal" role="form" id="quickForm" enctype="multipart/form-data">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Data Diri</a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="nik">Nomor NIK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="nik" class="form-control" id="nik" maxLength="16" placeholder="Masukkan NIK">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="kk">Nomor KK</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="kk" class="form-control" id="kk" maxLength="16" placeholder="Nomor KK">
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
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                            <input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-target="#reservationdate" data-mask />
                                                            <div class="valid-feedback">
                                                                Format: tahun/bulan/tanggal
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tb">Tinggi Badan</label>
                                                        <div class="input-group">
                                                            <input onkeypress="return numOnly(event)" type="text" name="tb" class="form-control" id="tb" maxLength="3" placeholder="Tinggi Badan">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">Cm</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="bb">Berat Badan</label>
                                                        <div class="input-group">
                                                            <input type="text" onkeypress="return numOnly(event)" name="bb" class="form-control" id="bb" maxLength="3" placeholder="Berat Badan">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                        Data Sekolah</a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas1" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas2" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                        Upload Berkas</a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas1" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="custom-file">
                                                            <input type="file" name="berkas2" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-secondary" style="float: right;" href="<?php echo base_url() ?>">Cancel</a>
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
                            required: "Gak punya NIK atau emang lupa ngisi ?",
                            minlength: "Dimana-mana NIK itu gak kurang dari 16 digit",
                            maxlength: "Hei, NIK itu jumlahnya cuma 16 digit"
                        },
                        kk: {
                            required: "Nomor KK nya jangan lupa di isi bambang!",
                            minlength: "Nomor KK minimal 16 digit",
                            maxlength: "Tapi gak lebih dari 16 digit juga kalee"
                        },
                        nama: {
                            required: "Lu gak punya nama yaa ?"
                        },
                        tempat: {
                            required: "Lu itu lahirnya dimana? kok gak di isi!"
                        },
                        tgl_lahir: {
                            required: "Woy, tanggal lahir lu berapa ?"
                        },
                        jk: {
                            required: "Lu cwk apa cwk sih ?"
                        },
                        alamat: {
                            required: "Lu tinggal dimana woy ?"
                        },
                        sekolah: {
                            required: "Asal sekolah lu darimana ?"
                        },
                        agama: {
                            required: "Lu Atheis ya ?"
                        },
                        jurusan: {
                            required: "Lu sekolah di jurusan apa ?"
                        },
                        kelas: {
                            required: "Lu kelas apa anjim ?"
                        },
                        telepon: {
                            required: "Minta nomor Hp nya dong!",
                            minlength: "Kalo ngisi nomer hp yang bener sih"
                        },
                        email: {
                            required: "Email nya di isi dong buat verifikasi",
                            email: "Email itu harusnya ada @ nya woy"
                        },
                        terms: "Kalo gak mau terima gak usah daftar anj***"
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