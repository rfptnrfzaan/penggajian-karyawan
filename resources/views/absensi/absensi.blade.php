@extends('template')
@section('title')
   Data Rekapan Absensi
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Rekapan Absensi</h1>
    </div>
</section>
<div class="card">
    <form action="{{ url("absensi/lihat"); }}" method="post">
    <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label>Bulan/Tahun</label>
                    <input type="month" class="form-control" style="width: 20%;" name="bulan">
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-outline-primary">Tampilkan Data</button>
                <a href="{{ url('absensi/create') }}" class="btn btn-outline-primary">Input Kehadiran</a>
            </div>
        </div>

    </form>
</div>
@endsection
