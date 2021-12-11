<!DOCTYPE html>
<html lang="en">
<?php foreach ($home->result_array() as $site) :
    $title = $site['site_judul'];
    $desc = $site['site_desc'];
    $header = $site['site_head'];
    $text = $site['site_text'];
    $contenttitle = $site['site_content_title'];
    $contentvalue = $site['site_content_value'];
?>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Template Mo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <title>BKK Karya Saga</title>
        <!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/bootstrap.min.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/font-awesome.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/templatemo-art-factory.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/owl-carousel.css' ?>">

    </head>

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="<?php echo base_url() . 'home'; ?>" class="logo"><?php echo $title;  ?></a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#about">About</a></li>
                                <li class="scroll-to-section"><a href="#services">Services</a></li>
                                <li class=""> <a href="<?php echo base_url() . 'Admin/Info_loker' ?>">Lowongan</a></li>
                                <!-- <li class="scroll-to-section"><a href="#frequently-question">Frequently Questions</a></li>
                                <li class="submenu">
                                    <a href="javascript:;">Drop Down</a>
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Features</a></li>
                                        <li><a href="">FAQ's</a></li>
                                        <li><a href="">Blog</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?php echo base_url() . 'Login' ?>">Login</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->


        <!-- ***** Welcome Area Start ***** -->
        <div class="welcome-area" id="welcome">

            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1><?php echo $header; ?></h1>
                            <p><?php echo $text; ?></p>
                            <a href="<?php echo base_url() . 'Applicant/Register'; ?>" class="main-button-slider">Daftar</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <!-- <img src="<?php echo base_url() . 'asset/assets/images/slider-icon.png' ?>" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic"> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->


        <!-- ***** Features Big Item Start ***** -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="<?php echo base_url() . 'asset/assets/images/kiri.png' ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                        <div class="left-heading">
                            <h5><?php echo $contenttitle; ?></h5>
                        </div>
                        <div class="left-text">
                            <p><?php echo $contentvalue; ?>.</p>
                            <a href="#about2" class="main-button">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->

        <!-- ***** Features Big Item Start ***** -->
        <section class="section" id="about2">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                        <div class="left-heading">
                            <h5>Visi & Misi BKK Karya SAGA</h5>
                        </div>
                        <h6>Visi :</h6>
                        <p>Mewujudkan Sumber Daya Manusia yang Berakhlak Mulia yang Mampu Bersaing Secara Global. </p>
                        <h6>Misi :</h6>
                        <br>

                        <div class="text">
                            <p>1. Menciptakan suasana yang kondusif untuk mengembangkan potensi siswa melalui
                                penekanan pada penguasaan kompetensi bidang ilmu pengetahuan dan teknologi serta Bahasa Inggris. </p>
                        </div>
                        <div class="text">
                            <p>2. Meningkatkan penguasaan Bahasa Inggris sebagai alat komunikasi
                                dan alat untuk mempelajari pengetahuan yang lebih luas. </p>
                        </div>
                        <div class="text">
                            <p>3. Meningkatkan frekuensi dan kualitas kegiatan siswa yang lebih menekankan pada
                                pengembangan ilmu pengetahuan dan teknologi serta keimanan dan ketakwaan yang menunjang
                                proses belajar mengajar dan menumbuhkembangkan disiplin pribadi siswa. </p>
                        </div>
                        <div class="text">
                            <p>4. Menumbuhkembangkan nilai-nilai ketuhanan dan nilai-nilai kehidupan yang bersifat
                                universal dan mengintegrasikannya dalam kehidupan.</p>
                        </div>
                        <div class="text">
                            <p>5. Menerapkan manajemen partisipatif dengan melibatkan seluruh warga sekolah,
                                Lembaga Swadaya Masyarakat, stakeholders dan instansi serta institusi pendukung pendidikan lainnya.</p>
                        </div>
                    </div>
                    <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="<?php echo base_url() . 'asset/assets/images/kanan.png' ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->


        <!-- ***** Features Small Start ***** -->
        <section class="section" id="services">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($corp->result_array() as $i) : ?>
                            <div class="item service-item">
                                <div class="icon">
                                    <i><img src="<?php echo base_url() . 'asset/assets/images/service-icon-01.png' ?>" alt=""></i>
                                </div>
                                <h5 class="service-title"><?php echo $i['mitra_nama'] ?></h5>
                                <!-- <p>Aenean vulputate massa sed neque consectetur, ac fringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                            <a href="#" class="main-button">Read More</a> -->
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Small End ***** -->


        <!-- ***** Frequently Question Start ***** -->
        <section class="section" id="frequently-question">
            <div class="container">
                <!-- ***** Section Title Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Profil BKK Karya SAGA</h2>
                        </div>
                    </div>
                </div>
                <!-- ***** Section Title End ***** -->
                <br>
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12">
                        <h5>Lokasi BKK Karya SAGA</h5>
                        <div class="accordion-text">
                            <p>SMK YPE Sawunggalih Kutoarjo berada di jalan Semawungdaleman, Desa Semawungdaleman Kutoarjo,
                                Kabupaten Purworejo, Telp . 0275 641342 Fax. 0275 641342 Kode pos: 54231</p>
                            <span>Instagram: bkkkarya Email: <a href="#">bkkkarya@gmail.com</a><br></span>
                            <a href="#contact-us" class="main-button">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="accordions is-first-expanded">
                            <article class="accordion">
                                <div class="accordion-head">
                                    <h6>Ruang Lingkup Kerja</h6>
                                    <br>
                                    <p>a. Menindaklanjuti kerjasama dengan industri pasangan yang telah menjadi mitra
                                        kerja dengan BKK sekolah.</p>
                                    <p>b. Melakukan penelusuran alumni dan dimasukkan ke dalam database sekolah.</p>
                                    <p>c. Merangkul pengurus Majelis Sekolah yang peduli dengan penempatan tenaga kerja dari alumni.</p>
                                    <p>d. Membuat website khusus BKK yang selalu up to date yang dapat di link dengan situs-situs JOB CARRIER.</p>
                                    <p>e. Menanamkan jiwa enterpreunership kepada siswa melalui pelatihan ketrampilan untuk menjadi seorang wirausaha (enterpreuneur).</p>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <!-- <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p> -->
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Frequently Question End ***** -->


        <!-- ***** Contact Us Start ***** -->
        <section class="section" id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <!-- ***** Contact Map Start ***** -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div id="map">
                            <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- ***** Contact Map End ***** -->

                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send It</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                </div>
            </div>
        </section>
        <!-- ***** Contact Us End ***** -->


        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <p class="copyright">Copyright &copy; 2020 Art Factory Company

                            . Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="<?php echo base_url() . 'asset/assets/js/jquery-2.1.0.min.js' ?>"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url() . 'asset/assets/js/popper.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/bootstrap.min.js' ?>"></script>

        <!-- Plugins -->
        <script src="<?php echo base_url() . 'asset/assets/js/owl-carousel.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/scrollreveal.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/waypoints.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/jquery.counterup.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/imgfix.min.js' ?>"></script>

        <!-- Global Init -->
        <script src="<?php echo base_url() . 'asset/assets/js/custom.js' ?>"></script>

    </body>
<?php endforeach ?>

</html>