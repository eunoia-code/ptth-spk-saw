<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('/admin') ?>" class="brand-link">
    <img src="<?= base_url('assets'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets'); ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        <li class="nav-item">
          <a href="<?= base_url('/admin/home') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/employee') ?>" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Pegawai
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/criteria') ?>" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Data Kriteria
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/result') ?>" class="nav-link">
            <i class="nav-icon fas fa-calculator"></i>
            <p>
              Hasil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/logout') ?>" class="nav-link">
            <i class="nav-icon fa fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
