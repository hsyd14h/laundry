<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('assets/img/backend/logo.png') }}" alt="Laundry Logo" class="brand-image img-circle">
      <span class="brand-text font-weight-light">C&F Laundry</span>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/img/backend/profile.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>
      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link  {{  set_active('backend.dashboard.index') }}">
              <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="/dashboard/admin" class="nav-link {{ set_active('backend.admin.index') }}">
              <i class="nav-icon fa fa-address-book" aria-hidden="true"></i>
              <p>
                 Data Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/order" class="nav-link {{ set_active(['backend.order.index', 'backend.order.create', 'backend.order.edit']) }}">
              <i class="nav-icon fa fa-shopping-bag" aria-hidden="true"></i>
              <p>
                 Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/user" class="nav-link {{  set_active(['backend.users.index', 'backend.users.create',  'backend.users.edit', 'backend.users.detail' ]) }}">
              <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
                Data Konsumen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/package" class="nav-link   {{  set_active(['backend.package.index', 'backend.package.create', 'backend.package.edit',  'backend.package.post']) }}">
              <i class="nav-icon fa fa-cubes" aria-hidden="true"></i>
              <p>
                Data Paket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/report" class="nav-link {{ set_active(['backend.report.index', 'backend.report.edit']) }}">
              <i class="nav-icon fa fa-file-excel" aria-hidden="true"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fa fa-angle-double-left {{ set_active('frontend.mainpage.home') }}" aria-hidden="true"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>
        </li>
      </ul>
    </nav>
  </div>
  </aside>