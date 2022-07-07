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
    </form>

    <a href="{{ url('absensi/create') }}" class="btn btn-outline-primary" style = "position:relative; left:10px;">Input Kehadiran</a>
    <br><br>
      <table id="table_data" class="table table-hover">
        <thead>
          <tr>
            <th scope="col" colspan="1">No</th>
            <th scope="col" colspan="3">NIK</th>
            <th scope="col" colspan="2">Nama</th>
            <th scope="col" colspan="1">Masuk</th>
            <th scope="col" colspan="1">Lembur</th>
            <th scope="col" colspan="2">Gaji Lembur</th>
            <th scope="col" colspan="2">SPJ</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
@endsection
