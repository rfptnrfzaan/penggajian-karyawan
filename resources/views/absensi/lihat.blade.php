@extends('template')
@section('title')
   Data Rekapan Absensi
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Rekapan Absensi</h1>
    </div>
</section>
<div class="card">
    <form id="form" method="post">
    <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label>Bulan/Tahun</label>
                    <input value="{{ $date->format('Y-m') }}" type="month" class="form-control" style="width: 20%;" name="bulan">
                </div>
            </div>
            <div class="col">
                <button id="lihat" class="btn btn-outline-primary">Tampilkan Data</button>
                <button id="input" class="btn btn-outline-primary">Input Kehadiran</button>
            </div>
        </div>

    </form>
    <div class="alert alert-info">Menampilkan Data Absensi Pada Bulan <b>{{$bulan}}</b> Tahun <b>{{$tahun}}</b></div>
      <table id="table_data" class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Masuk</th>
            <th>Lembur</th>
            <th>Gaji Lembur</th>
            <th>SPJ</th>
          </tr>
        </thead>
        <tbody>
        @php
            $n = 1;
        @endphp
        @foreach ($karyawan as $data)
            <tr>
                <td>{{ $n++ }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jumlahHadir($tahun, $bulan) }}</td>
                <td>{{ $data->jumlahLembur($tahun, $bulan) }}</td>
                <td>{{ 'Rp. '.number_format( $data->jumlahGajiLembur($tahun, $bulan), 0, ',', '.').',00' }}</td>
                <td>{{ 'Rp. '.number_format( $data->jumlahSPJ($tahun, $bulan), 0, ',', '.').',00' }}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    </form>
</div>
@endsection
@section('script')
<script>

    $(document).ready(function () {

        $("#lihat").click(function () {
            var form = $('#form');
            form.attr('action', '{{ url("absensi/lihat") }}');
            form.submit();
        });

        $("#input").click(function () {
            var form = $('#form');
            form.attr('action', '{{ url("absensi/tambah") }}');
            form.submit();
        });

    });

</script>
@endsection
