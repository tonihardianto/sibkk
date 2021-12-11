<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <!--<a href="<?php echo base_url().'Home'; ?>" class="navbar-brand">-->
            <!-- Image Logo Here -->
        <!--    <span class="brand-text font-weight-light">BKK Karya Saga</span>-->
        <!--</a>-->

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo base_url().'Home'; ?>" class="nav-link"><i class="fa fa-home"> Home</i></a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a href="#" class="nav-link">Kontak</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--    <a href="#" class="nav-link">Tentang Kami</a>-->
                <!--</li>-->
                
            </ul>

            <!-- SEARCH FORM -->
            
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
                <a class="btn btn-success" style="border-radius: 20px" href="<?php echo base_url().'Login' ?>" title="Masuk"> <span class="fa fa-sign-in-alt"></span> Masuk</a>
            </li>
        </ul>
    </div>
</nav>