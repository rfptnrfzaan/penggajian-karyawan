@yield('css')
    <style>
      .navbar-bg{
        height: 80px;
        width: 100%;
        background-color: #22577A;
      }
    </style>


<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-sm main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="{{ url('reset') }}" class="dropdown-item has-icon text-primary">
          <i class="fas fa-key-alt"></i> Reset Password
        </a>
        <a href="{{ url('login') }}" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>