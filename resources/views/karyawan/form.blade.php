@extends('template')
@section('title')
    tambah karyawan
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Form karyawan</h4>
        </div>

        <form method="POST" action="{{ url('karyawan') }}">
          @csrf
      <div class="card-body">
          <div class="form-group row">
            <label class="col-2 col-form-label">NIK</label>
            <div class="col-10">
            <input type="text" name="nik" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama</label>
            <div class="col-10">
            <input type="text" name="nama" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">NPWP</label>
            <div class="col-10">
            <input type="text" name="npwp" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
            <textarea class="form-control" name="alamat"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Jenis Kelamin</label>
            <div class="col-10" >
            <select class="form-control" name="jenis_kelamin">
              <option>Pria</option>
              <option>Wanita</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Jabatan</label>
            <div class="col-10">
            <input type="text" class="form-control" name="jabatan">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Gaji Pokok</label>
            <div class="col-10">
            <input type="text" name="gaji_pokok" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Makan/hari</label>
            <div class="col-10">
            <input type="text" name="tunjangan_makanan" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Trasport/hari</label>
            <div class="col-10">
            <input type="text" name="tunjangan_transportasi" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">status Pernikahan</label>
            <div class="col-10" >
            <select class="form-control" name="status_pernikahan">
              <option>Menikah</option>
              <option>Belum Menikah</option>
              <option>Cerai Hidup</option>
              <option>Cerai Mati</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tanggungan</label>
            <div class="col-10" >
            <select class="form-control" name="tanggungan">
              <option value="0">Tidak ada</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">lebih dari 2</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Tunjangan Lainnya</label>
            <div class="col-10">
            <input type="text" name="tunjangan_lainnya" class="form-control">
            </div>
          </div>
      </div>
      <div class="card-footer text-right">
        <a href="{{ url('karyawan') }}" class="btn btn-secondary mr-3" type="reset">Kembali</a>
        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
      </div>
      </form>

    </div>
  </section>
</div>
@endsection