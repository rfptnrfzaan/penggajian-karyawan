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
                <input type="month" class= "form-control" style="width: 20%;"> 
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-outline-primary">Batal</a>
                    <a href="#" class="btn btn-outline-primary">Simpan</a>
                    <a href="#" class="btn btn-outline-primary">Cetak</a>
                  </div>
            </div>
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
                <input type="text" name="npwp" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Jenis Kelamin</label>
                <div class="col-10">
                <input type="text" name="jenis_kelamin" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Jabatan</label>
                <div class="col-10">
                <input type="text" name="jabatan" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Gaji Pokok</label>
                <div class="col-10">
                <input type="text" name="gaji_pokok" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Status</label>
                <div class="col-10">
                <input type="text" name="status_pernikahan" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tanggungan</label>
                <div class="col-10">
                <input type="text" name="tanggungan" class="form-control" readonly="">
                </div>
            </div>
            <p><center>Tunjangan</center></p>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Makan</label>
                <div class="col-10">
                <input type="text" name="tunjangan_makanan" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Transportasi</label>
                <div class="col-10">
                <input type="text" name="tunjangan_transportasi" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Tunjangan Lainnya</label>
                <div class="col-10">
                <input type="text" name="tunjangan_lainnya" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Lembur</label>
                <div class="col-10">
                <input type="text" name="lembur" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">SPJ</label>
                <div class="col-10">
                <input type="text" name="spj" class="form-control" readonly="">
                </div>
            </div>
            <p><center>Jaminan</center></p>
            <div class="form-group row">
                <label class="col-2 col-form-label">JKK</label>
                <div class="col-10">
                <input type="text" name="jkk" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">JKM</label>
                <div class="col-10">
                <input type="text" name="jkm" class="form-control" readonly="">
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
                <input type="text" name="jht" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">JP</label>
                <div class="col-10">
                <input type="text" name="jp" class="form-control" readonly="">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Hitung</button>
              </div>
        </form>
      </div>
    </section>
  </div>
@endsection