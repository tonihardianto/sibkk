<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Dashboard'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Dashboard"){echo "active";} ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url() . 'Admin/User'; ?>" class="nav-link <?php if($this->uri->segment(2)=="User"){echo "active";} ?>" >
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
          Data Pengguna
          <i class="right fas fa-angle-right"></i>
          <!-- <span class="right badge badge-danger">New</span> -->
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Siswa'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Siswa"){echo "active";} ?>">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>
          Data Alumni Siswa
          <i class="right fas fa-angle-right"></i>
          <!-- <span class="badge badge-info right">6</span> -->
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Pelamar'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Pelamar"){echo "active";} ?>">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
          Data Member
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Loker'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Loker"){echo "active";} ?>">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>
          Data Loker
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Info'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Info"){echo "active";} ?>">
        <i class="nav-icon fas fa-bullhorn"></i>
        <p>
          Pengumuman
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Agenda'; ?>" class="nav-link <?php if($this->uri->segment(2)=="Agenda"){echo "active";} ?>">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>
          Agenda
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="Laporan"){echo "menu-open";} ?>">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Laporan
          <i class="fas fa-plus right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo base_url() . 'Admin/Laporan/pelamar'; ?>" class="nav-link <?php if($this->uri->segment(3)=="pelamar"){echo "active";} ?>">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Laporan Data Pelamar</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'Admin/Laporan/agenda'; ?>" class="nav-link <?php if($this->uri->segment(3)=="agenda"){echo "active";} ?>">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Laporan Data Agenda</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'Admin/Laporan/riwayat'; ?>" class="nav-link <?php if($this->uri->segment(3)=="riwayat"){echo "active";} ?>">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Laporan Data Riwayat</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'Admin/Laporan/alumni'; ?>" class="nav-link <?php if($this->uri->segment(3)=="alumni"){echo "active";} ?>">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Laporan Data Alumni</p>
          </a>
        </li>
      </ul>
    </li>
    </li>
    <!-- <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tree"></i>
        <p>
          UI Elements
          <i class="fas fa-arrow-alt-circle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="../UI/general.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../UI/icons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../UI/buttons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Buttons</p>
          </a>
        </li>
      </ul>
    </li> -->
  </ul>
</nav>