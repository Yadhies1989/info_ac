 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <?php $uri = $this->uri->segment(2) ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url().'court/dashboard/'?>" class="nav-link <?php echo $uri == 'dashboard' || $uri == '' ? 'active' : 'no' ?>" >
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview <?php echo $uri == 'verstek_ya' || $uri == 'verstek_tidak' || $uri == 'simpan_verstek_ya' || $uri == 'simpan_verstek_tidak' ? 'menu-open' : 'no' ?>">
          <a href="<?php echo site_url('verstek') ?>" class="nav-link <?php echo $uri == 'verstek_ya' || $uri == 'verstek_tidak' || $uri == 'simpan_verstek_ya' || $uri == 'simpan_verstek_tidak' ? 'active' : 'no' ?>">
            <i class="fas fa-book nav-icon"></i>
            <p>Data Verstek</p>
            <i class="right fas fa-angle-right"></i>
          </a>
          <ul class="nav-treeview">
            <li class="nav-item">
              <a href="<?php echo site_url('verstek/verstek_ya') ?>" class="nav-link <?php echo $uri == 'verstek_ya' || $uri == 'simpan_verstek_ya' ? 'active' : 'no' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Vestek Ya</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('verstek/verstek_tidak') ?>" class="nav-link <?php echo $uri == 'verstek_tidak' || $uri == 'simpan_verstek_tidak' ? 'active' : 'no' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Verstek Tidak</p>
              </a>
            </li>    
          </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="<?php echo base_url().'court/testing/'?>" class="nav-link <?php echo $uri == 'testing' || $uri == '' ? 'active' : 'no' ?>" >
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Testing Tab
              </p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>