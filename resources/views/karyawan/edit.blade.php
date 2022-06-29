@extends('template')
@section('title')
    edit karyawan
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Form karyawan</h4>
        </div>

        <form method="POST" action="{{ url('karyawan/'.$karyawan->id) }}">
          @csrf
          @method('PUT')
      <div class="card-body">
          <div class="form-group row">
            <label class="col-2 col-form-label">NIK</label>
            <div class="col-10">
            <input type="text" name="nik" class="form-control" value="{{ $karyawan->nik }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama</label>
            <div class="col-10">
            <input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">NPWP</label>
            <div class="col-10">
            <input type="text" name="npwp" class="form-control" value="{{ $karyawan->npwp }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
            <textarea class="form-control" name="alamat">{{ $karyawan->alamat }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Jenis Kelamin</label>
            <div class="col-10" >
            <select class="form-control" name="jenis_kelamin">
              <option {{ $karyawan->jenis_kelamin == "Pria" ? 'selected' : '' }}>Pria</option>
              <option {{ $karyawan->jenis_kelamin == "Wanita" ? 'selected' : '' }}>Wanita</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Jabatan</label>
            <div class="col-10">
            <input type="text" class="form-control" name="jabatan" value="{{ $karyawan->jabatan }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Gaji Pokok</label>
            <div class="col-10">
            <input type="text" name="gaji_pokok" class="form-control" value="{{ $karyawan->gaji_pokok }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Makan/hari</label>
            <div class="col-10">
            <input type="text" name="tunjangan_makanan" class="form-control" value="{{ $karyawan->tunjangan_makanan}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Trasport/hari</label>
            <div class="col-10">
            <input type="text" name="tunjangan_transportasi" class="form-control" value="{{ $karyawan->tunjangan_transportasi }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">status Pernikahan</label>
            <div class="col-10" >
            <select class="form-control" name="status_pernikahan" >
              <option {{ $karyawan->status_pernikahan == "Menikah" ? 'selected' : '' }}>Menikah</option>
              <option {{ $karyawan->status_pernikahan == "Belum Menikah" ? 'selected' : '' }}>Belum Menikah</option>
              <option {{ $karyawan->status_pernikahan == "Cerai Hidup" ? 'selected' : '' }}>Cerai Hidup</option>
              <option {{ $karyawan->status_pernikahan == "Cerai Mati" ? 'selected' : '' }}>Cerai Mati</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tanggungan</label>
            <div class="col-10" >
            <select class="form-control" name="tanggungan" >
              <option value="0" {{ $karyawan->tanggungan == "0" ? 'selected' : '' }}>Tidak ada</option>
              <option value="1" {{ $karyawan->tanggungan == "1" ? 'selected' : '' }}>1</option>
              <option value="2" {{ $karyawan->tanggungan == "2" ? 'selected' : '' }}>2</option>
              <option value="3" {{ $karyawan->tanggungan == "3" ? 'selected' : '' }}>Lebih dari 2</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Lainnya</label>
            <div class="col-10">
            <input type="text" name="tunjangan_lainnya" class="form-control" value="{{ $karyawan->tunjangan_lainnya }}">
            </div>
          </div>
      </div>
      <div class="card-footer text-right">
        <a href="{{ url('karyawan') }}" class="btn btn-secondary mr-3">Kembali</a>
        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
      </div>
      </form>

    </div>
  </section>
</div>
@endsection