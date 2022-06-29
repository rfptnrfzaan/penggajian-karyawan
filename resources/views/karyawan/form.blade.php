<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('karyawan/sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Form karyawan</h4>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-2 col-form-label">NIK</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Nama</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">NPWP</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Alamat</label>
                  <div class="col-10">
                  <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-10" >
                  <select class="form-control">
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Jabatan</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Gaji Pokok</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Tunjangan Makan/hari</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Tunjangan Trasport/hari</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">status Pernikahan</label>
                  <div class="col-10" >
                  <select class="form-control">
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                    <option>Cerai Hidup</option>
                    <option>Cerai Mati</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Tanggungan</label>
                  <div class="col-10" >
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>Lebih dari 3</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-2 col-form-label">Tunjangan Lainnya</label>
                  <div class="col-10">
                  <input type="text" class="form-control">
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-secondary mr-3" type="reset">Kembali</button>
              <button class="btn btn-primary mr-1" type="submit">Simpan</button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>