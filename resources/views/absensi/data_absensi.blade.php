@extends('template')
@section('title')
    Data Absensi
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Absensi</h4>
          </div>
  
          <form method="POST" action="{{ url('absensi') }}">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Bulan/Tanggal/Tahun</label>
                <input type="date" name="tanggal" class="form-control" style="width: 20%;">
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label">Karyawan</label>
              <div class="col-10">
                <select class="form-control" name="id_karyawan">
                  @foreach ($karyawan as $data)
                  <option value="{{ $data->id }}">{{ $data->nik }} - {{ $data->nama }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Kehadiran</label>
                <div class="col-10" >
                <select class="form-control" name="masuk">
                  <option>Tidak masuk</option>
                  <option>Masuk</option>
                  <option>Izin</option>
                  <option>Sakit</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Keterangan</label>
                <div class="col-10">
                <input type="text" name="keterangan" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label">Lembur</label>
              <div class="col-10" >
              <select class="form-control" name="lembur">
                <option>Tidak Lembur</option>
                <option>Di hari kerja</option>
                <option>Di hari libur</option>
                <option>Menginap di kantor</option>
              </select>
              </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Gaji Lembur</label>
                <div class="col-10">
                <input type="text" name="gaji_lembur" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">SPJ</label>
                <div class="col-10">
                <input type="text" name="spj" class="form-control">
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{ url('absensi') }}" class="btn btn-secondary mr-3" type="reset">Kembali</a>
          <button class="btn btn-primary mr-1" type="submit">Simpan</button>
        </div>
        </form>
  
      </div>
    </section>
  </div>
@endsection