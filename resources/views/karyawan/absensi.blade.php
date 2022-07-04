@extends('template')
@section('title')
    Absensi
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Absensi</h1>
    </div>
</section>

<div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <div class="form-group">
            <label>Bulan/Tahun</label>
            <input type="month" class= "form-control" style="width: 20%;"> 
          </div>
        <br>
        <a href="#" class="btn btn-outline-primary">Tampilkan Data</a>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:10px;">Input Kehadiran</a>
            <br><br>
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