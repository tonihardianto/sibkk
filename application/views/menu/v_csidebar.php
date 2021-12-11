<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Corp/Dashboard'; ?>" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Corp/Siswa'; ?>" class="nav-link">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>
          Data Alumni Siswa
          <i class="right fas fa-angle-right"></i>
          <!-- <span class="badge badge-info right">6</span> -->
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'Admin/Login/logout'; ?>" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Logout
          <i class="right fas fa-angle-right"></i>
          <!-- <span class="badge badge-info right">6</span> -->
        </p>
      </a>
    </li>
  </ul>
</nav>