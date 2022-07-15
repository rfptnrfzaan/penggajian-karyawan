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
                    <input type="month" class="form-control" style="width: 20%;" name="bulan">
                </div>
            </div>
            <div class="col">
                <button id="lihat" class="btn btn-outline-primary">Tampilkan Data</button>
                <button id="input" class="btn btn-outline-primary">Input Kehadiran</button>
            </div>
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
