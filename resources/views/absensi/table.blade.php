@extends('template')
@section('title')
    Data Absensi
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Absensi</h1>
    </div>
</section>

<form action="{{url('absensi')}}" method="post">
@csrf
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-10">
            <div class="form-group">
                <label>Tanggal</label>
                <input id="date" required type="date" name="tanggal" class="form-control" style="width: 20%;">
            </div>
        </div>
        <div class="col">
            <button class="btn btn-primary mr-1" type="submit">Simpan</button>
        </div>
      </div>
      <div class="row">
        <table id="data" class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Kehadiran</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Lembur</th>
                <th scope="col">Gaji Lembur</th>
                <th scope="col">SPJ</th>
              </tr>
            </thead>
            <tbody id="table-content">
                <td colspan="8">Silahkan Pilih Tanggal Terlebih Dahulu</td>
            </tbody>
        </table>
      </div>
    </div>
</div>
</form>
@endsection
@section('script')
<script>

    $(document).ready(function () {

        $("#date").change(function () {
            const date = $("#date").val();
            const baseUrl = `{{ url('absensi/ambil') }}`;

            const content = document.querySelector('#table-content');
            content.innerHTML = "";

            $.get(baseUrl, {
                    date: date
                },
                function(response) {
                    response.absensi.forEach(absensi => {
                        const html = `
                                <tr>
                                    <td>${absensi.no}</td>
                                    <td>${absensi.nik}</td>
                                    <td>${absensi.nama}</td>
                                    <td>
                                        <select required class="form-control" name="form[${absensi.id}][masuk]" id="">
                                            <option ${(absensi.masuk == '--') ? 'selected' : ''} disabled>--</option>
                                            <option ${(absensi.masuk == 'Masuk') ? 'selected' : ''}>Masuk</option>
                                            <option ${(absensi.masuk == 'Tidak masuk') ? 'selected' : ''}>Tidak masuk</option>
                                            <option ${(absensi.masuk == 'Izin') ? 'selected' : ''}>Izin</option>
                                            <option ${(absensi.masuk == 'Sakit') ? 'selected' : ''}>Sakit</option>
                                        </select>
                                    </td>
                                    <td><input required class="form-control" type="text" name="form[${absensi.id}][keterangan]" value="${absensi.keterangan}" /></td>
                                    <td>
                                        <select required class="form-control" name="form[${absensi.id}][lembur]" id="">
                                            <option ${(absensi.lembur == '--') ? 'selected' : ''} disabled>--</option>
                                            <option ${(absensi.lembur == 'Tidak Lembur') ? 'selected' : ''}>Tidak Lembur</option>
                                            <option ${(absensi.lembur == 'Di hari kerja') ? 'selected' : ''}>Di hari kerja</option>
                                            <option ${(absensi.lembur == 'Di hari libur') ? 'selected' : ''}>Di hari libur</option>
                                            <option ${(absensi.lembur == 'Menginap di kantor') ? 'selected' : ''}>Menginap di kantor</option>
                                        </select>
                                    </td>
                                    <td><input required class="form-control" type="text" name="form[${absensi.id}][gaji_lembur]" id="" value="${absensi.gaji_lembur}" /></td>
                                    <td><input required class="form-control" type="text" name="form[${absensi.id}][spj]" id="" value="${absensi.spj}" /></td>
                                </tr>
                                `;
                        content.innerHTML += html;
                    });

                });

        });

    });

</script>
@endsection
