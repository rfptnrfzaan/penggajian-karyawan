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
    <form action="{{ url("gaji/lihat"); }}" method="post">
    <div class="card-body">
        @csrf
      <table id="table_data" class="table table-responsive table-hover">
        <thead>
          <div class="form-group">
            <label>Bulan/Tahun</label>
            <input name="bulan" type="month" class= "form-control" style="width: 20%;"> 
          </div>
          <div class="alert alert-info">Menampilkan Data Gaji Pada Bulan <b>{{$bulan}}</b> Tahun <b>{{$tahun}}</b></div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Tampilkan Data</button>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:10px;">Cetak</a>
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
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
            $n = 1;
          @endphp
          @foreach ($karyawan as $data)
          @php
              $gaji= App\Libraries\GajiCalculator::CalculateGaji($data, $bulan, $tahun);
          @endphp
          <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->npwp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->jabatan }}</td>
            <td>{{ $data->gaji_pokok }}</td>
            <td>{{ $data->status_pernikahan }}</td>
            <td>{{ $data->tanggungan }}</td>
            <td>{{ $gaji['lembur']}}</td>
            <td>{{ $gaji['spj']}}</td>
            <td>{{ $gaji['jaminan'] }}</td>
            <td>{{ $gaji['potongan'] }}</td>
            <td>{{ $gaji['netto'] }}</td>
            <td><a href='{{url("gaji/detail/{$tahun}/{$bulan}/{$data->id}")}}'> <i class="fas fa-info-circle"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </form>
</div>
@endsection