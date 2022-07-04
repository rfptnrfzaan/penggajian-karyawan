@extends('template')
@section('title')
    data absensi
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Absensi</h4>
          </div>
  
          <form method="POST" action="">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Bulan/Tanggal/Tahun</label>
                <input type="date" class="form-control" style="width: 20%;">
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label">Karyawan</label>
              <div class="col-10">
                <select class="form-control" name="kehadiran">
                  <option value="0">#</option>
                  <option value="1">#</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Kehadiran</label>
                <div class="col-10" >
                <select class="form-control" name="kehadiran">
                  <option value="0">Tidak masuk</option>
                  <option value="1">Masuk</option>
                  <option value="2">Izin</option>
                  <option value="3">Sakit</option>
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
                <option value="0">Di hari kerja</option>
                <option value="1">Di hari libur</option>
                <option value="2">Menginap di kantor</option>
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
          <a href="" class="btn btn-secondary mr-3" type="reset">Kembali</a>
          <button class="btn btn-primary mr-1" type="submit">Simpan</button>
        </div>
        </form>
  
      </div>
    </section>
  </div>
@endsection