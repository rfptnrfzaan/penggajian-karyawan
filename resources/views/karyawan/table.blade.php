@extends('template')
@section('title')
    Data Karyawan
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<style>
  .ion-edit:hover {
    opacity: 0.9;
    transform: scale(120%);
  }
  .ion-trash-a:hover {
    opacity: 0.9;
    transform: scale(120%);
  }
</style>
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Karyawan</h1>
  </div>
</section>
<div class="card">
  <div class="card-body">
    <a href="{{ url('karyawan/create') }}" class="btn btn-outline-primary">Tambah akun</a>
    <br><br>

    <table id="table_data" class="display table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">NPWP</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Status</th>
          <th scope="col">Tanggungan</th>
          <th scope="col">Gaji Pokok</th>
          <th scope="col">Aksi</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @php
            $n = 1;
        @endphp
        @foreach ($karyawan as $data)
        <tr>
          <td>{{ $n++ }}</td>
          <td>{{ $data->nama }}</td>
          <td>{{ $data->nik }}</td>
          <td>{{ $data->npwp }}</td>
          <td>{{ $data->alamat }}</td>
          <td>{{ $data->jabatan }}</td>
          <td>{{ $data->jenis_kelamin }}</td>
          <td>{{ $data->status_pernikahan }}</td>
          <td>{{ $data->tanggungan }}</td>
          <td>{{ $data->gaji_pokok }}</td>
          <td><a href="{{ route('karyawan.edit', $data->id) }}" class="ion-edit" data-pack="default" data-tags="change, update, write, type, pencil"></a></td>
          <td><a data-toggle="modal" href="#deleteModal" data-id="{{ $data->id }}" class="ion-trash-a" data-pack="default" data-tags="delete, remove, dump"></a></td>
        </tr>
        @endforeach


      </tbody>
    </table>

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus data karyawan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin untuk menghapus data ini?</p>
          </div>
          <div class="modal-footer bg-whitesmoke br">
            <form action="" method="post" id="formDelete">
            @csrf
            @method("DELETE")
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Iya</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready( function () {
    $('#table_data').DataTable();

    $('#deleteModal').on('show.bs.modal', function (e) {
        const link = $(e.relatedTarget);
        const id = link.data('id');

        $("#formDelete").attr('action', `{{ url('karyawan/${id}')}}`);
    });
});


</script>
@endsection
