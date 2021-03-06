

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cloud-meatball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pujasera <br> Farhan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item  {{ str_contains(request()->url(), '/') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Main Menu</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>
      @if (@auth()->user()->status_user == "Super Admin")
      <li class="nav-item {{ str_contains(request()->url(), '/akun') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('akun')}}">
          <i class="fas fa-user"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item {{ str_contains(request()->url(), '/toko') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('toko')}}">
          <i class="fas fa-fw fa-store-alt"></i>
          <span>Toko</span></a>
      </li>

      <li class="nav-item {{ str_contains(request()->url(), '/item') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('item')}}">
          <i class="fas fa-fw fa-utensils"></i>
          <span>Food & Drink</span></a>
      </li>
      @endif
      @if (empty(@auth()->user()->status_user == "Super Admin"))
        <li class="nav-item {{ str_contains(request()->url(), '/feedback') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('feedback')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Feedback</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/pegawai') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('pegawai')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Pegawai</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/hakakses') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('hakakses')}}">
            <i class="fas fa-fw fa-universal-access"></i>
            <span>Hak Akses</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/shift') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('shift')}}">
            <i class="fas fa-fw fa-user-clock"></i>
            <span>Shift</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/pemilikgerai') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('pemilikgerai')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pemilik Gerai</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/gerai') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('gerai')}}">
            <i class="fas fa-fw fa-store"></i>
            <span>Gerai</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/kerjasama') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('kerjasama')}}">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Kerjasama</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/menu') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('menu')}}">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Menu</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/iuran') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('iuran')}}">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Pembayaran Iuran Gerai</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/bagihasil') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('bagihasil')}}">
            <i class="fas fa-fw fa-balance-scale"></i>
            <span>Bagi Hasil</span></a>
        </li>
        <li class="nav-item {{ str_contains(request()->url(), '/penjualan') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('penjualan')}}">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>Penjualan</span></a>
        </li>
      @endif
      
      <!-- @if (@auth()->user()->status_user == "Kasir")
      @endif
      @if (@auth()->user()->status_user == "Penjaga Toko")
      @endif -->
      <!-- Divider -->
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->