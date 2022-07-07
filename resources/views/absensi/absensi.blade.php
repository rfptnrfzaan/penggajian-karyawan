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
        <div class="form-group">
            <label>Bulan/Tahun</label>
            <input type="month" class="form-control" style="width: 20%;" name="bulan">
        </div>
    <br>
    <button type="submit" class="btn btn-outline-primary">Tampilkan Data</button>
    <br><br>
      <table id="table_data" class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Masuk</th>
            <th>Lembur</th>
            <th>Gaji Lembur</th>
            <th>SPJ</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
    </form>
</div>
@endsection
