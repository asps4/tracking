<!--
<div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="" class="simple-text logo-mini">
            CT
          </a>
          <a href="/admin" class="simple-text logo-normal">
           Halaman Admin
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="/admin/provinsi">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Provinsi</p>
            </a>
          </li>
          <li>
            <a href="/admin/kota">
              <i class="tim-icons icon-atom"></i>
              <p>Kota</p>
            </a>
          </li>
          <li>
            <a href="/admin/kecamatan">
              <i class="tim-icons icon-pin"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li>
            <a href="/admin/kelurahan">
              <i class="tim-icons icon-bell-55"></i>
              <p>Kelurahan</p>
            </a>
          </li>
          <li>
            <a href="/admin/rw">
              <i class="tim-icons icon-single-02"></i>
              <p>Rw</p>
            </a>
          </li>

          <li>
            <a href="/admin/prakerin">
              <i class="tim-icons icon-spaceship"></i>
              <p>Prakerin</p>
            </a>
          </li>

          <li>
            <a href="./tables.html">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="tim-icons icon-align-center"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./rtl.html">
              <i class="tim-icons icon-world"></i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div> -->


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tracking Covid</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets//img/logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">Informasi COVID-19</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-globe-asia"></i>
              <p>
             <h5>Indonesia</h5>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/provinsi" class="nav-link">
                  <i class="fas fa-building"></i>
                  <p>Provinsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kota" class="nav-link">
                  <i class="fas fa-city"></i>
                  <p>Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kecamatan" class="nav-link">
                  <i class="fas fa-archway"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kelurahan" class="nav-link">
                  <i class="fas fa-gopuram"></i>
                  <p>Kelurahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/rw" class="nav-link">
                  <i class="fas fa-clinic-medical"></i>
                  <p>Rw</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-viruses"></i>
              <p>
             <h6>Tracking COVID-19</h6>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/prakerin" class="nav-link">
                  <i class="fas fa-shield-virus"></i>
                  <p>Virus</p>
                </a>
              </li>



            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
