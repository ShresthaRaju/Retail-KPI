@extends('layouts.app')

@section('custom_styles')
  <link rel="stylesheet" href="{{asset('css/material-dashboard.min.css')}}">
@endsection

@section('content')
  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="{{asset('images/sidebar.jpg')}}">
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          KPI Retail
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::segment(3)=='kpi-bottom-line'?'nav-item active':'nav-item'}}">
            <a class="nav-link" href="{{url('admin/dashboard/kpi-bottom-line')}}">
              <i class="fas fa-tachometer-alt"></i>
              <p>KPI-BottomLine</p>
            </a>
          </li>
          <li class="{{Request::segment(3)=='profit-sales'?'nav-item active':'nav-item'}}">
            <a class="nav-link" href="{{url('admin/dashboard/profit-sales')}}">
              <i class="fas fa-money-bill-alt"></i>
              <p>Profit & Sales</p>
            </a>
          </li>
          <li class="{{Request::segment(3)=='products'?'nav-item active':'nav-item'}}">
            <a class="nav-link" href="{{url('admin/dashboard/products')}}">
              <i class="fas fa-shopping-cart"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="{{Request::segment(3)=='customers'?'nav-item active':'nav-item'}}">
            <a class="nav-link" href="{{url('admin/dashboard/customers')}}">
              <i class="fas fa-users"></i>
              <p>Customers</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top bg-info">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand text-secondary" href="">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-tachometer-alt fa-2x text-secondary"></i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-2x text-secondary"></i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-alt fa-2x text-secondary"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="row">
            @yield('dashboard_content')
         </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            {{date("Y")}}, KPI for Retail, Raj Shrestha.
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection

@section('custom_scripts')
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{asset('js/material-dashboard.min.js')}}"></script>
    <script src="{{asset('js/sidebar.js')}}"
@endsection



