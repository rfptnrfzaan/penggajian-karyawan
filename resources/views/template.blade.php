<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <link rel="icon" type="favicon" href="{{ url('assets/img/logo/logo.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ url('assets/modules/ionicons/css/ionicons.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/components.css') }}">

  <style>
    .sidebar-menu li a :hover{
      transform: scale(120%);
    }
  </style>
  @yield('css')

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="sidebar-mini">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('header')
        @include('sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')

        </div>
      </div>

  </div>

  <!-- General JS Scripts -->
  <script src="{{ url('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ url('assets/modules/popper.js') }}"></script>
  <script src="{{ url('assets/modules/tooltip.js') }}"></script>
  <script src="{{ url('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ url('assets/modules/moment.min.js') }}"></script>
  <script src="{{ url('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  @yield("script")

  <!-- Template JS File -->
  <script src="{{ url('assets/js/scripts.js') }}"></script>
  <script src="{{ url('assets/js/custom.js') }}"></script>
</body>
</html>
