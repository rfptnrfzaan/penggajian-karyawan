@extends('template')
@section('title')
    Data Gaji
@endsection

@section('css')
    <style>
    </style>
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
            <div class="alert alert-info">Menampilkan Data Gaji <b>{{ $karyawan->nama }}</b> Pada Bulan <b>{{$bulan}}</b> Tahun <b>{{$tahun}}</b></div>
            <div class="form-group">
                <label>Bulan/Tahun</label>
                <input value="{{ $tahun }}-{{ $bulan }}" type="month" class= "form-control" style="width: 20%;"> 
                <div class="text-right">
                    <a href="#" class="btn btn-outline-primary">Cetak</a>
                  </div>
                  
            </div>
            <div class="row mx-auto">
                <div class="col-6">
                    <div class="row">
                        <div id="satu" class="col-9">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">NIK</label>
                                <div class="col-8">
                                <input type="text" name="nik" class="form-control" readonly="" value="{{ $karyawan->nik }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                <input type="text" name="nama" class="form-control" readonly="" value="{{ $karyawan->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">NPWP</label>
                                <div class="col-8">
                                <input type="text" name="npwp" class="form-control" readonly="" value="{{ $karyawan->npwp }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-8">
                                <input type="text" name="jenis_kelamin" class="form-control" readonly="" value="{{ $karyawan->jenis_kelamin }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Jabatan</label>
                                <div class="col-8">
                                <input type="text" name="jabatan" class="form-control" readonly="" value="{{ $karyawan->jabatan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Gaji Pokok</label>
                                <div class="col-8">
                                <input type="text" name="gaji_pokok" class="form-control" readonly="" value="{{ $karyawan->gaji_pokok}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Status</label>
                                <div class="col-8">
                                <input type="text" name="status_pernikahan" class="form-control" readonly="" value="{{ $karyawan->status_pernikahan}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Tanggungan</label>
                                <div class="col-8">
                                <input type="text" name="tanggungan" class="form-control" readonly="" value="{{ $karyawan->tanggungan }}">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <h6 class="text-center">Tunjangan</h6>
                    <br>
        
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Tunjangan Makan</label>
                                <div class="col-8">
                                <input type="text" name="tunjangan_makanan" class="form-control" readonly="" value="{{ $karyawan->tunjangan_makanan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Tunjangan Transportasi</label>
                                <div class="col-8">
                                <input type="text" name="tunjangan_transportasi" class="form-control" readonly="" value="{{ $karyawan->tunjangan_transportasi }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Tunjangan Lainnya</label>
                                <div class="col-8">
                                <input type="text" name="tunjangan_lainnya" class="form-control" readonly="" value="{{ $karyawan->tunjangan_lainnya }}"> 
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                </div>
        
                <div class="col-6">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Lembur</label>
                                <div class="col-8">
                                <input type="text" name="lembur" class="form-control" readonly="" value="{!! $gaji['lembur'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">SPJ</label>
                                <div class="col-8">
                                <input type="text" name="spj" class="form-control" readonly="" value="{!! $gaji['spj'] !!}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h6 class="text-center">Jaminan</h6>
                    <br>
        
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">JKK</label>
                                <div class="col-8">
                                <input type="text" name="jkk" class="form-control" readonly="" value="{!! $gaji['jkk'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">JKM</label>
                                <div class="col-8">
                                <input type="text" name="jkm" class="form-control" readonly="" value="{!! $gaji['jkm'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">BPJS Kesehatan</label>
                                <div class="col-8">
                                <input type="text" name="bpjs" class="form-control" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h6 class="text-center">Potongan</h6>
                    <br>
        
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">JHT</label>
                                <div class="col-8">
                                <input type="text" name="jht" class="form-control" readonly="" value="{{ $gaji['jht']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">JP</label>
                                <div class="col-8">
                                <input type="text" name="jp" class="form-control" readonly="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 ">
                    <br>
                    <h6 class="text-center">Hasil Perhitungan</h6>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row text-right">
                                <label class="col-6 col-form-label">Jumlah Hadir</label>
                                <div class="col-2">
                                <input type="text" class="form-control" readonly="" value="{{ $karyawan->jumlahHadir($tahun, $bulan) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Gaji Pokok</label>
                                <div class="col-8">
                                <input type="text" class="form-control" readonly="" value="{!! $gaji['gaji_pokok'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Tunjangan Makanan</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['tunjangan_makan'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Tunjangan Transportasi</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['tunjangan_transport'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Tunjangan Lainnya</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{{ $karyawan->tunjangan_lainnya }}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Lembur</label>
                                <div class="col-8">
                                <input type="text" name="lembur" class="form-control" readonly="" value="{!! $gaji['lembur'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">SPJ</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['spj'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">JKK</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['jkk'] !!}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="row">
                        <br><br>
                        <div class="col-12">
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">JKM</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['jkm'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">BPJS Kesehatan</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Gaji Bruto</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['bruto'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">JHT</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['jht'] !!}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">JP</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <label class="col-4 col-form-label">Total Gaji</label>
                                <div class="col-8">
                                <input type="text" name="" class="form-control" readonly="" value="{!! $gaji['netto'] !!}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>
  </div>
@endsection