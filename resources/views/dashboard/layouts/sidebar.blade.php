<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="{{url('dashboard/home')}}" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="{{asset('dashboard/assets/images/logo.ico')}}" width="30" height="30" alt="logo">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="{{url('dashboard/home')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="{{route('projects.index')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Projects</span>
            </a>
          </li>
      </div>
    </div>
  </nav>