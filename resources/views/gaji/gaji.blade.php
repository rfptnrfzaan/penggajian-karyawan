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
          @php
            $n = 1;
          @endphp
          @foreach ($karyawan as $data)
          @php
              $gaji= GajiCalculator::CalculateGaji($data, $date->year, $date->month);
          @endphp
          <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $data->karyawan->nik }}</td>
            <td>{{ $data->karyawan->nama }}</td>
            <td>{{ $data->npwp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->jabatan }}</td>
            <td>{{ $data->gaji_pokok }}</td>
            <td>{{ $data->status }}</td>
            <td>{{ $data->tanggungan }}</td>
            <td>{{ $data->lembur }}</td>
            <td>{{ $data->spj }}</td>
            <td>{{ $data->jaminan }}</td>
            <td>{{ $data->potongan }}</td>
            <td>{{ $data->total_gaji }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection