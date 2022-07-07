@extends('template')
@section('title')
    Data Gaji
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Data Gaji Karyawan</h4>
          </div>
  
          <form method="POST" action="">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Bulan/Tahun</label>
                <input value="{{ $tahun }}-{{ $bulan }}" type="month" class= "form-control" style="width: 20%;"> 
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-outline-primary">Cetak</a>
                  </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">NIK</label>
                <div class="col-10">
                <input type="text" name="nik" class="form-control" readonly="" value="{{ $karyawan->nik }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Nama</label>
                <div class="col-10">
                <input type="text" name="nama" class="form-control" readonly="" value="{{ $karyawan->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">NPWP</label>
                <div class="col-10">
                <input type="text" name="npwp" class="form-control" readonly="" value="{{ $karyawan->npwp }}"> 
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Jenis Kelamin</label>
                <div class="col-10">
                <input type="text" name="jenis_kelamin" class="form-control" readonly="" value="{{ $karyawan->jenis_kelamin }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Jabatan</label>
                <div class="col-10">
                <input type="text" name="jabatan" class="form-control" readonly="" value="{{ $karyawan->jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Gaji Pokok</label>
                <div class="col-10">
                <input type="text" name="gaji_pokok" class="form-control" readonly="" value="{{ $karyawan->gaji_pokok}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Status</label>
                <div class="col-10">
                <input type="text" name="status_pernikahan" class="form-control" readonly="" value="{{ $karyawan->status_pernikahan}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tanggungan</label>
                <div class="col-10">
                <input type="text" name="tanggungan" class="form-control" readonly="" value="{{ $karyawan->tanggungan }}">
                </div>
            </div>
            <p><center>Tunjangan</center></p>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Makan</label>
                <div class="col-10">
                <input type="text" name="tunjangan_makanan" class="form-control" readonly="" value="{{ $karyawan->tunjangan_makanan }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Transportasi</label>
                <div class="col-10">
                <input type="text" name="tunjangan_transportasi" class="form-control" readonly="" value="{{ $karyawan->tunjangan_transportasi }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Lainnya</label>
                <div class="col-10">
                <input type="text" name="tunjangan_lainnya" class="form-control" readonly="" value="{{ $karyawan->tunjangan_lainnya }}"> 
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Lembur</label>
                <div class="col-10">
                <input type="text" name="lembur" class="form-control" readonly="" value="{{ $gaji['lembur'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">SPJ</label>
                <div class="col-10">
                <input type="text" name="spj" class="form-control" readonly="" value="{{ $gaji['spj']}}">
                </div>
            </div>
            <p><center>Jaminan</center></p>
            <div class="form-group row">
                <label class="col-2 col-form-label">JKK</label>
                <div class="col-10">
                <input type="text" name="jkk" class="form-control" readonly="" value="{{ $gaji['jkk']}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">JKM</label>
                <div class="col-10">
                <input type="text" name="jkm" class="form-control" readonly="" value="{{ $gaji['jkm']}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">BPJS Kesehatan</label>
                <div class="col-10">
                <input type="text" name="bpjs" class="form-control" readonly="">
                </div>
            </div>
            <p><center>Potongan</center></p>
            <div class="form-group row">
                <label class="col-2 col-form-label">JHT</label>
                <div class="col-10">
                <input type="text" name="jht" class="form-control" readonly="" value="{{ $gaji['jht']}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">JP</label>
                <div class="col-10">
                <input type="text" name="jp" class="form-control" readonly="" >
                </div>
            </div>
        </form>
      </div>
    </section>
  </div>
@endsection