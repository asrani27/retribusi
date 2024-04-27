<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-danger">
      {{-- <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light text-white">RETRIBUSI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/blok" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/los" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Los</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jenis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Tagihan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pedagang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pedagang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pegawai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <li class="nav-item">
                <a href="/retribusi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Retribusi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/peralihan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peralihan Hak Kios Dan Los</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/registrasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          {{-- <li class="nav-item">
            <a href="/laporan" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>