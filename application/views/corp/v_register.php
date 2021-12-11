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
                                <form method="post" action="<?php echo base_url() . 'Corp/Register/register'; ?>" class="form-horizontal" role="form" id="quickForm" >
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Data Perusahaan</a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="nama">Nama Perusahaan</label>
                                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Perusahaan">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email">Email</label>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email Perusahaan">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password">Password</label>
                                                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="telepon">Telepon</label>
                                                        <input type="text" onkeypress="return numOnly(event)" name="telepon" class="form-control" id="telepon" placeholder="Nomor Telepon">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary" href="<?php echo base_url() ?>">Cancel</a>
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
            <strong>Copyright &copy; 2021 <b>BKK KARYA SAGA</b></a>.</strong> All rights
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
                    nama: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                    telepon: {
                        required: true,
                        maxLength: 15,
                        minLength: 9,
                    },
                    terms: {
                        required: true,
                    },
                },
                messages: {
                    nama: {
                        required: "Silahkan isi nama perusahaan!",
                    },
                    email: {
                        required: "Silahkan isi email!",
                    },
                    password: {
                        required: "Silahkan isi password!",
                    },
                    telepon: {
                        required: "Silahkan masukkan nomor telepon!",
                        maxLength: "Nomor tidak benar!",
                        minLength: "Nomor telepon tidak lengkap!",
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