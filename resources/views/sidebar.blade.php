@yield('css')
<style>
  img{
    width: 50px;
    height: 50px;
    margin-top: 10px;
  }
  .big{
    width: 100px;
    height: 100px;
    margin-bottom: 100px;
  }
  .main-sidebar {
    background-color: #22577A;
    transition: all .60s;
}
  .sidebar-menu a span{
    color: white;
    font-weight: bold;
  }
  .sidebar-menu li a:hover span{
    color: black;
    font-weight: bold;
  }

  .sidebar-wrapper {
    background-color: #22577A;
    transition: all .60s;
}
</style>

<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('dashboard') }}"> <img class="big" src="{{ url('assets/img/logo/logo.png') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('dashboard') }}"> <img src="{{ url('assets/img/logo/logo.png') }}"></a>
    </div>
    <ul class="sidebar-menu">
      <li><a class="nav-link" href="{{ url('karyawan') }}"> <i class="fas fa-clipboard-list"></i> <span> Data Karyawan</span></a></li>
      <li><a class="nav-link " href="{{ url('absensi') }}"> <i class="fas fa-calendar-check"></i> <span>Data Absensi</span></a></li>
      <li><a class="nav-link" href="{{ url('gaji') }}"> <i class="fas fa-hand-holding-usd"></i> <span>Data Gaji Karyawan</span></a></li>
      <li><a class="nav-link " href="{{ url('pph') }}"> <i class="fas  fa-calculator"></i> <span>Perhitungan PPH 21</span></a></li>
    </ul>
  </aside>
</div>  

