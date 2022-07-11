@extends('template')
@section('title')
    Perhitungan PPH 21
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Data PPH 21</h4>
          </div>
<form method="POST" action="">
    @csrf
<div class="card-body">
    <div class="form-group">
        <label>Bulan/Tahun</label>
        <input value="" type="month" class= "form-control" style="width: 20%;"> 
        <div class="text-right">
            <a href="#" class="btn btn-outline-primary">Cetak</a>
          </div>
    </div>

            <h6 class="text-left">Identitas Pegawai</h6>
            <br>

    <div class="row mx-auto">
        <div class="col-6">
            <div class="row">
                <div id="satu" class="col-12">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">NIK</label>
                        <div class="col-8">
                        <input type="text" name="nik" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Nama</label>
                        <div class="col-8">
                        <input type="text" name="nik" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">NPWP</label>
                        <div class="col-8">
                        <input type="text" name="nik" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jenis Kelamin</label>
                        <div class="col-8">
                        <input type="text" name="jenis_kelamin" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jabatan</label>
                        <div class="col-8">
                        <input type="text" name="jabatan" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Status</label>
                        <div class="col-8">
                        <input type="text" name="status_pernikahan" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tanggungan</label>
                        <div class="col-8">
                        <input type="text" name="tanggungan" class="form-control" readonly="" value="">
                        </div>
                    </div>
                </div>
            </div>

            <h6 class="text-left">Penghasilan Bruto</h6>
            <br>

            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Gaji Pokok</label>
                        <div class="col-8">
                        <input type="text" name="gaji_pokok" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Makan</label>
                        <div class="col-8">
                        <input type="text" name="tunjangan_makanan" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Transportasi</label>
                        <div class="col-8">
                        <input type="text" name="tunjangan_transportasi" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Lainnya</label>
                        <div class="col-8">
                        <input type="text" name="tunjangan_lainnya" class="form-control" readonly="" value=""> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Lembur</label>
                        <div class="col-8">
                        <input type="text" name="lembur" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">SPJ</label>
                        <div class="col-8">
                        <input type="text" name="spj" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JKK</label>
                        <div class="col-8">
                        <input type="text" name="jkk" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JKM</label>
                        <div class="col-8">
                        <input type="text" name="jkm" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">BPJS Kesehatan</label>
                        <div class="col-8">
                        <input type="text" name="bpjs" class="form-control" readonly="">
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <h6 class="text-left">Pengurangan</h6>
            <br>

            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Biaya Jabatan</label>
                        <div class="col-8">
                        <input type="text" name="" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JHT</label>
                        <div class="col-8">
                        <input type="text" name="jht" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JP</label>
                        <div class="col-8">
                        <input type="text" name="jp" class="form-control" readonly="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jumlah Pengurangan</label>
                        <div class="col-8">
                        <input type="text" name="" class="form-control" readonly="" value="">
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="col-6">
        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Penghasilan Neto Sebulan</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 col-form-label text-right">
                    <label>Penghasilan Neto Setahun</label>
                    <label>( Penghasilan Neto Sebulan x 12 )</label>
                    </div>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h6 class="text-left color-primary">Perhitungan PPH 21</h6>
        <br>

        <div class="row">
            <div class="col-12">
                <h6 class="text-justify">PTKP Setahun</h6>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Wajib Pajak Sendiri</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Tambahan Dari Menikah</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Tanggungan (2)</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">PTKP</label>
                    <div class="col-5">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Total PTKP Setahun</label>
                    <div class="col-5">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>

                <br>
                    <h6 class="text-left">Penghasilan Kena Pajak</h6>
                <br>

                <div class="form-group row">
                    <label class="col-3 col-form-label text-right">5% x</label>
                    <input type="text" name="" class="form-control col-3" readonly="" value="">
                    <h4 style="padding-top: 8px; padding-left: 10px">=</h4>
                    <div class="col-4">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">PPH 21 Terhutang </label>
                    <div class="col-5">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 col-form-label text-right">
                    <label>PPH 21 Terhutang Bulan Ini </label>
                    <label>( PPH 21 Terhutang / 12 )</label>
                    </div>
                    <div class="col-5">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h6 class="text-left">Gaji Diterima Bulan Ini</h6>
        <br>

        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <label class="col-5 col-form-label text-right">( Neto Sebulan - PPH 21 Terhutang Bulan ini )</label>
                    <div class="col-4">
                    <input type="text" name="" class="form-control" readonly="" value="">
                    </div>
                </div>
        </div>
    </div>
</div>
</form>
        </div>
      </div>
    </section>
</div>

@endsection