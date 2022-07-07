@extends('template')
@section('title')
    Gaji Karyawan
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Gaji Karyawan</h1>
    </div>
</section>

<div class="card">  
    <div class="card-body">
      <table id="table_data" class="table table-hover">
        <thead>
          <div class="form-group">
            <label>Bulan/Tahun</label>
            <input type="month" class= "form-control" style="width: 20%;"> 
          </div>
        <br>
        <a href="#" class="btn btn-outline-primary">Tampilkan</a>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:10px;">Hitung</a>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:20px;">Cetak</a>
        <br><br>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>NPWP</th>
            <th>Jenis kelamin</th>
            <th>Jabatan</th>
            <th>Gaji pokok</th>
            <th>Status</th>
            <th>Tanggungan</th>
            <th>Lembur</th>
            <th>SPJ</th>
            <th>Jaminan</th>
            <th>Potongan</th>
            <th>Total gaji</th>
          </tr>
        </thead>
        <tbody>
    
        </tbody>
      </table>
@endsection