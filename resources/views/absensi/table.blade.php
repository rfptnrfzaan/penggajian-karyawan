@extends('template')
@section('title')
    Data Absensi
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Absensi</h1>
    </div>
</section>

<div class="card">
    <div class="card-body">
      <table id="table_data" class="table table-hover">
        <thead>
            <div class="form-group">
                <label>Bulan/Tanggal/Tahun</label>
                <input type="date" name="tanggal" class="form-control" style="width: 20%;">
            </div>
        <br>
        <a href="{{ url('absensi') }}" class="btn btn-outline-primary">Tampilkan Data</a>
        <a href="{{ url('absensi/create') }}" class="btn btn-outline-primary" style = "position:relative; left:10px;">Input Kehadiran</a>
            <br><br>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Masuk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Lembur</th>
            <th scope="col">Gaji Lembur</th>
            <th scope="col">SPJ</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
            $n = 1;
        @endphp
        @foreach ($absensi as $data)
        <tr>
          <td>{{ $n++ }}</td>
          <td>{{ $data->karyawan->nik }}</td>
          <td>{{ $data->karyawan->nama }}</td>
          <td>{{ $data->masuk }}</td>
          <td>{{ $data->keterangan }}</td>
          <td>{{ $data->lembur }}</td>
          <td>{{ $data->gaji_lembur }}</td>
          <td>{{ $data->spj }}</td>
          <td><a href="{{ route('absensi.edit', $data->id) }}" class="ion-edit" data-pack="default" data-tags="change, update, write, type, pencil"></a></td>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection