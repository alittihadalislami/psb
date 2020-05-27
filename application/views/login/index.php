<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="ico" href="<?=base_url()?>assets/img/favicon.ico">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Penerimaan Santri Baru 2020
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .card-login .form {
        min-height: 320px;
    }
  </style>
</head>

<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url('../assets/img/home.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <?= $this->session->userdata('pesan'); ?>
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="<?= base_url('welcome/cekData') ?>">
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Masuk / Daftar</h4>
                <p>Silahkan masukkan data diri calon santri..</p>
              </div>
              <div class="card-body">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="NIK Calon Santri" required name=" nik">
                  <span class="bmd-help" style="margin-top: 40px;margin-left: 55px;">Mohon disesuaikan dengan Kartu Keluarga.</span>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="NISN Calon Santri" name="nisn" required>
                  <span class="bmd-help" style="margin-top: 40px;margin-left: 55px;">Mohon disesuaikan NISN dari Sekolah Terakhir.</span>
                </div>
                
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-success btn-link btn-wd btn-lg">Simpan</button> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Panitia Penerimaan Santri Baru. <br>
          <p class="text-right">Ma'had Al Ittihad Al Islami</p>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>

</html>
