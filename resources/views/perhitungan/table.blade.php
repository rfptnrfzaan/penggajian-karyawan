@extends('template')
@section('title')
    Perhitungan PPH 21
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Perhitungan PPH 21</h1>
    </div>
</section>

<div class="card">
    <div class="card-body">

        <label>Bulan/Tahun</label>
          <input type="month" value="{{ $date->format('Y-m') }}" class= "form-control" style="width: 20%;">
      <br>
      <a href="#" class="btn btn-outline-primary">Tampilkan</a>
      {{-- <a href="#" class="btn btn-outline-primary" style = "position:relative; left:20px;">Cetak</a> --}}
      <br><br>
      <div class="alert alert-info">Menampilkan Data Perhitungan PPH Pada Bulan <b>{{$bulan}}</b> Tahun <b>{{$tahun}}</b></div>
      <table id="table_data" class="table table-responsive table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>NPWP</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Tanggungan</th>
            <th>Gaji Bruto</th>
            <Th>PPH 21 Terhitung</Th>
            <Th>Gaji Diterima</Th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $n = 1;
        @endphp
        @foreach ($karyawan as $data)
        @php
            $gaji = App\Libraries\GajiCalculator::CalculateGaji($data, $bulan, $tahun);
            $netto = App\Libraries\TaxCalculator::CalculateNettoWithBiayaJabatan($gaji['netto']);
            $ptkp =  App\Libraries\TaxCalculator::CalculatePTKP($data);
            $pkp = App\Libraries\TaxCalculator::CalculatePKP($netto['netto_year'], $ptkp['ptkp']);
            $pph21 = $pkp['tax_month'];
            $gajiterima = $netto['netto_month']-$pph21;
        @endphp
        <tr>
          <td>{{ $n++ }}</td>
          <td>{{ $data->nik }}</td>
          <td>{{ $data->nama }}</td>
          <td>{{ $data->npwp }}</td>
          <td>{{ $data->jenis_kelamin }}</td>
          <td>{{ $data->jabatan }}</td>
          <td>{{ $data->status_pernikahan }}</td>
          <td>{{ $data->tanggungan }}</td>
          <td>{{ 'Rp. '.number_format( $gaji['bruto'], 0, ',', '.').',00' }}</td>
          <td>{{ 'Rp. '.number_format( $pph21, 0, ',', '.').',00' }}</td>
          <td>{{ 'Rp. '.number_format( $gajiterima, 0, ',', '.').',00' }}</td>
          <td><a href='{{url("pph/detail/{$tahun}/{$bulan}/{$data->id}")}}'> <i class="fas fa-info-circle"></i></a></td>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
