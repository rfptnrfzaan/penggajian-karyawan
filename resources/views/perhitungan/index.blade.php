@extends('template')
@section('title')
   Data PPH21
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data PPH21</h1>
    </div>
</section>
<div class="card">
    <form action="{{ url("pph/lihat"); }}" method="post">
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
                <br>
                <button type="submit"  class="btn btn-outline-primary">Tampilkan Data</button>
            </div>
        </div>

    </form>
</div>
@endsection
