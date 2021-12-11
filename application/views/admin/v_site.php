<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
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
                <span class="brand-text font-weight-light"><?php echo $title ?></span>
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
                            <h1>Site Settings</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Site Settings</li>
                            </ol>
                        </div>
                    </div>
                    <?php
                    //$this->view('menu/alert'); 
                    ?>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--card -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Site Info</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Setting</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <?php $this->load->view('menu/alert'); ?>
                                        <div class="tab-pane active" id="tab_1">
                                            <?php foreach ($data->result_array() as $site) : ?>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Title <a href="#myTitle" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_judul'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Description <a href="#myDesc" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_desc'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Header <a href="#myHeader" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_head'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Text Header <a href="#myText" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_text'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Content Title <a href="#myConTitle" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_content_title'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Content Value <a href="#myConValue" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_content_value'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptate omnis quas illum sequi necessitatibus optio similique,
                                                quasi laudantium quidem enim voluptatem maxime nostrum provident nobis amet hic esse! Alias,
                                                illum?</p>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>

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
        <div class="modal fade" id="myTitle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_title'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label">New Site Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Website   " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last title</label>
                                    <p class="col-sm-10 text-info"><?php echo $title ?></p>
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
        <div class="modal fade bd-example-modal-lg" id="myDesc" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_desc'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label">New Site Desc</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="desc" placeholder="Tulis Deskripsi Website " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Website.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last description</label>
                                    <p class="col-sm-10 text-info"><?php echo $desc ?></p>
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

        <div class="modal fade" id="myHeader">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_header'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label">New Header Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="head" id="head" placeholder="Header Website   " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last header title</label>
                                    <p class="col-sm-10 text-info"><?php echo $head ?></p>
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

        <div class="modal fade bd-example-modal-lg" id="myText" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_text'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> New Text Header</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="headtext" placeholder="Tulis Deskripsi Website " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Company.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last text header</label>
                                    <p class="col-sm-10 text-info"><?php echo $text ?></p>
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

        <div class="modal fade" id="myConTitle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_content_title'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label">New Content Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="contenttitle" id="head" placeholder="Content Title   " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last content title</label>
                                    <p class="col-sm-10 text-info"><?php echo $content_title ?></p>
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

        <div class="modal fade bd-example-modal-lg" id="myConValue" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/Setting/set_content_value'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label">New Company Desc</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="contentvalue" placeholder="Tulis Deskripsi Company " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; " required></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Company.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label tet-muted"> Last Content value</label>
                                    <p class="col-sm-10 text-info"><?php echo $content_value ?></p>
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
        <!-- Begin Modal Edit -->
        <!-- End Modal edit -->
        <!-- Begin Modal hapus -->

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
    <script src="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
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
        });
    </script>
    <script type="text/javascript">
        const toastrDefaultSuccess = $('toastrDefaultSuccess').data('toastrDefaultSuccess');
    </script>
</body>

</html>