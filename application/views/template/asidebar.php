  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-pink">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?= base_url('assets')?>/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KasirApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= strtoupper($this->session->userdata('username'));?></a>
        </div>

        <div class="info">
          <a href="<?= base_url('auth/logout') ?>" class="d-block" style="color: pink;"><i class="fas fa-power-off"></i></a>
        </div>
      </div>

      <?php 
      $checkUri = $this->uri->segment(2);
      if($this->session->userdata('role_id') == 1){ 
      ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview">
            <li class="nav-header">SEKILAS</li>
            <a href="<?= base_url('/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">MASTER</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview menu-open">
              <li class="nav-item">
                <a href="<?= base_url('/menu'); ?>" class="nav-link">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Kelola Menu</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('/user'); ?>" class="nav-link">
                  <i class="fas fa-users-cog nav-icon"></i>
                  <p>Kelola User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/menu'); ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Kelola Meja</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-header">TRANSAKSI</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Laporan/Bln</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

    <?php } elseif($this->session->userdata('role_id') == 2){ ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Kasir
              </p>
            </a>
          </li>
      
    <?php } ?>
    </div>
    <!-- /.sidebar -->
  </aside>