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
        <div class="alert alert-info">Menampilkan Data Perhitungan PPH 21 <b>{{ $karyawan->nama }}</b> Pada Bulan <b>{{$bulan}}</b> Tahun <b>{{$tahun}}</b></div>
        <label>Bulan/Tahun</label>
        <input value="" type="month" class= "form-control" style="width: 20%;"> 
        <div class="text-right">
            <a href="#" class="btn btn-outline-primary">Cetak</a>
          </div>
    </div>

            <h6 class="text-left">Identitas Pegawai</h6>
            <br>

    <div class="row mx-auto">
        <div class="col-5">
            <div class="row">
                <div id="satu" class="col-12">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">NIK</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->nik }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Nama</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">NPWP</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->npwp }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jenis Kelamin</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->jenis_kelamin }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jabatan</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->jabatan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Status</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->status_pernikahan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tanggungan</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{{ $karyawan->tanggungan }}">
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
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['gaji_pokok'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Makan</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['tunjangan_makan'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Transportasi</label>
                        <div class="col-8">
                        <input type="text" name="tunjangan_transportasi" class="form-control" readonly="" value="{!! $gaji['tunjangan_transport'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Tunjangan Lainnya</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['lainnya'] !!}"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Lembur</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['lembur'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">SPJ</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['spj'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JKK</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['jkk'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JKM</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="" value="{!! $gaji['jkm'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">BPJS Kesehatan</label>
                        <div class="col-8">
                        <input type="text" class="form-control" readonly="">
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
                        <input type="text" name="" class="form-control" readonly="" value="{!! $biaya !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">JHT</label>
                        <div class="col-8">
                        <input type="text" name="jht" class="form-control" readonly="" value="{!! $gaji['jht'] !!}">
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
                        <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['potongan'] + $biaya !!}">
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="col-7">
        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Penghasilan Neto Sebulan</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $netto['netto_month'] !!}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 col-form-label text-right">
                    <label>Penghasilan Neto Setahun</label>
                    <label>( Penghasilan Neto Sebulan x 12 )</label>
                    </div>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $netto['netto_year'] !!}">
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
                @foreach ($ptkp['steps'] as $steps)
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">{!! $steps ['step'] !!}</label>
                        <div class="col-8">
                        <input type="text" name="" class="form-control" readonly="" value="{!! $steps['result'] !!}">
                        </div>
                    </div>
                @endforeach
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">PTKP</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $ptkp['ptkp'] !!}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">Total PKP Setahun</label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $pkp['pkp'] !!}">
                    </div>
                </div>

                <br>
                    <h6 class="text-left">Penghasilan Kena Pajak</h6>
                <br>
                
                    @foreach ($pkp['steps'] as $steps)
                    <div class="form-group row">
                    <label class="col-4 col-form-label text-right">{!! $steps ['step'] !!}</label>
                    <div class="col-5">
                        <input type="text" name="" class="form-control" readonly="" value="{!! $steps['result'] !!}">
                        </div>
                    </div>
                    @endforeach

                <div class="form-group row">
                    <label class="col-4 col-form-label text-right">PPH 21 Terhutang </label>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $pkp['tax'] !!}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 col-form-label text-right">
                    <label>PPH 21 Terhutang Bulan Ini </label>
                    <label>( PPH 21 Terhutang / 12 )</label>
                    </div>
                    <div class="col-8">
                    <input type="text" name="" class="form-control" readonly="" value="{!! $pkp['tax_month'] !!}">
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
                    <label class="col-6 col-form-label text-right">( Neto Sebulan - PPH 21 Terhutang Bulan ini )</label>
                    <div class="col-6">
                    <input type="text" name="" class="form-control" readonly="" value="{!! 'Rp. '.number_format($gajiterima, 0, ',', '.').',00'  !!}">
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