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

<form action="{{url('absensi')}}" method="post">
@csrf
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-10">
            <div class="form-group">
                <label>Tanggal</label>
                <input required type="date" name="tanggal" class="form-control" style="width: 20%;">
            </div>
        </div>
        <div class="col">
            <button class="btn btn-primary mr-1" type="submit">Simpan</button>
        </div>
      </div>
      <div class="row">
        <table id="data" class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Kehadiran</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Lembur</th>
                <th scope="col">Gaji Lembur</th>
                <th scope="col">SPJ</th>
              </tr>
            </thead>
            <tbody>
            @php
                $n = 1;
            @endphp
            @foreach ($karyawan as $data)
            <tr>
              <td>{{ $n++ }}</td>
              <td>{{ $data->nik }}</td>
              <td>{{ $data->nama }}</td>
              <td>
                <select class="form-control" name="form[{{$data->id}}][masuk]" id="">
                  <option>Masuk</option>
                  <option>Tidak masuk</option>
                  <option>Izin</option>
                  <option>Sakit</option>
                </select>
              </td>
              <td><input class="form-control" type="text" name="form[{{$data->id}}][keterangan]" value="-" /></td>
              <td>
                <select class="form-control" name="form[{{$data->id}}][lembur]" id="">
                  <option>Tidak Lembur</option>
                  <option>Di hari kerja</option>
                  <option>Di hari libur</option>
                  <option>Menginap di kantor</option>
                </select>
              </td>
              <td><input class="form-control" type="text" name="form[{{$data->id}}][gaji_lembur]" id="" value="0" /></td>
              <td><input class="form-control" type="text" name="form[{{$data->id}}][spj]" id="" value="0" /></td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
</form>
@endsection
