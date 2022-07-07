@extends('template')
@section('title')
    edit absensi
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Edit Absensi</h4>
          </div>
  
          <form method="POST" action="{{ url('absensi'.$absensi->id) }}">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Bulan/Tanggal/Tahun</label>
                <input type="date" name="tanggal" class="form-control" style="width: 20%;" value="{{ $absensi->date }}">
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
                  <option {{ $absensi->masuk == "Tidak masuk" ? 'selected' : '' }}>Tidak masuk</option>
                  <option {{ $absensi->masuk == "Masuk" ? 'selected' : '' }}>Masuk</option>
                  <option {{ $absensi->masuk == "Izin" ? 'selected' : '' }}>Izin</option>
                  <option {{ $absensi->masuk == "Sakit" ? 'selected' : '' }}>Sakit</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Keterangan</label>
                <div class="col-10">
                <input type="text" name="keterangan" class="form-control" value="{{ $absensi->keterangan }}">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label">Lembur</label>
              <div class="col-10" >
              <select class="form-control" name="lembur">
                <option {{ $absensi->lembur == "Tidak Lembur" ? 'selected' : '' }}>Tidak Lembur</option>
                <option {{ $absensi->lembur == "Di hari kerja" ? 'selected' : '' }}>Di hari kerja</option>
                <option {{ $absensi->lembur == "Di hari libur" ? 'selected' : '' }}>Di hari libur</option>
                <option {{ $absensi->lembur == "Menginap di kantor" ? 'selected' : '' }}>Menginap di kantor</option>
              </select>
              </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Gaji Lembur</label>
                <div class="col-10">
                <input type="text" name="gaji_lembur" class="form-control" value="{{ $absensi->gaji_lembur }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">SPJ</label>
                <div class="col-10">
                <input type="text" name="spj" class="form-control" value="{{ $absensi->spj }}">
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