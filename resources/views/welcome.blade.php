@extends('template')
@section('title', 'Welcome')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah Karyawan</h4>
            </div>
            <div class="card-body">
              {{ $jmlKaryawan }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-clock"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Tanggal Hari Ini</h4>
            </div>
            <div class="card-body">
              {{ $now->format('d/m/Y') }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>PPH Dibayarkan Bulan Ini</h4>
            </div>
            <div class="card-body">
              {{ 'Rp. '.number_format($totalTax, 0, ',', '.').',00' }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-money-check"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Gaji Dibayarkan Bulan Ini</h4>
            </div>
            <div class="card-body">
              {{ 'Rp. '.number_format($totalGaji, 0, ',', '.').',00' }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
