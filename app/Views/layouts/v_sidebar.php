<aside class="main-sidebar min-vh-100 sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link text-decoration-none">
      <span class="brand-text font-weight-light ">Sate Madura Cak Nur </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ">
          <a href="#" class="d-block text-decoration-none">Administrator</a>
        </div>
      </div>

   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?=base_url() ?>dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="<?=base_url() ?>managementMenu" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manajemen Menu
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?=base_url() ?>stock" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Manajemen Stok
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?=base_url() ?>user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manajemen Pengguna
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url() ?>penjualan" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                 Penjualan
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>