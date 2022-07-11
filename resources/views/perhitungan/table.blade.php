@extends('template')
@section('title')
    Perhitungan PPH 21
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Perhitungan PPH 21</h1>
    </div>
</section>

<div class="card">  
    <div class="card-body">
      <table id="table_data" class="table table-responsive table-hover">
        <thead>
          <label>Bulan/Tahun</label>
            <input type="month" class= "form-control" style="width: 20%;"> 
        <br>
        <a href="#" class="btn btn-outline-primary">Tampilkan</a>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:10px;">Hitung PPH 21</a>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:20px;">Cetak</a>
        <br><br>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>NPWP</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Tanggungan</th>
            <th>Gaji Bruto</th>
            <Th>PPH 21 Terhitung</Th>
            <Th>Gaji Diterima</Th>
          </tr>
        </thead>
        <tbody>
    
        </tbody>
      </table>
@endsection