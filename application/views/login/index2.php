
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="ico" href="<?=base_url()?>assets/img/favicon.ico">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <title>
    PSB santri baru
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

    .select2-container{
       width: 100%!important;
     }
     .select2-search--dropdown .select2-search__field {
       width: 98%;
     }
    
    @media screen and (max-width: 767px){
      .login-page .page-header>.container {
        padding-top: 10vh;
      }
    }

  </style>
</head>

<body class="login-page sidebar-collapse">

  <?php  
      $nik = $input['nik'];
      $nisn = $input['nisn'];
  ?>

  <div class="page-header header-filter" style="background-image: url('../assets/img/home.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 ml-auto mr-auto">

          <div class="card card-login">
            <form class="form" method="post" action="<?= base_url('welcome/cekData') ?>">
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Masuk / Daftar</h4>
                <p>Silahkan masukkan data diri calon santri..</p>
              </div>
              <div class="card-body">

                <div id="inputs">
                  <div class="row ml-1">
                    <div class="col-lg-6">
                      <div class="form-group has-default bmd-form-group" >
                        <input required readonly type="text" class="form-control" placeholder="NIK" value="<?= isset($nik) ? $nik : '' ?>" name="nik">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group has-default bmd-form-group">
                        <input required readonly type="text" class="form-control" placeholder="NISN" value="<?= isset($nisn) ? $nisn : '' ?>" name="nisn">
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group has-default bmd-form-group">
                        <input required type="text" class="form-control" placeholder="Nama Calon Santri" name="nama">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group has-default bmd-form-group">
                        <input required type="number" class="form-control" placeholder="NPSN Sekolah Asal" name="npsn_asal">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group has-default bmd-form-group">
                        <input required type="number" class="form-control" placeholder="No HP Orang Tua" name="nohp">
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="alamat">Alamat Rumah</label>
                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                      </div>
                      <div class="form-group d-block">
                        <input required type="text" class="form-control" placeholder="Alamat Pengenal" name="alamat_pengenal" id="alamat-simpan">
                        <input required type="text" class="form-control" placeholder="Id Desa" name="desa_id" id="desa-id">
                      </div>
                    </div>
                    

                    <div style="height: 150px;"></div>
                    
                  </div>
                </div>
  
                
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-success btn-link btn-wd btn-lg float-right">Simpan</button> 
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

  <div class="modal fade" id="alamatModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header"> -->
          <!-- <h5 class="modal-title" id="exampleModalLabel">Silahkan pilih alamat..</h5> -->
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <!-- <span aria-hidden="true">&times;</span> -->
          <!-- </button> -->
        <!-- </div> -->
        <div class="modal-body">
          <div class="row">
              <div class="form-group col-md-6">
                <label for="inputPropinsi">Propinsi</label>
                <select id="inputPropinsi" class="form-control input-alamat" style="width: 100px">
                  <option selected>Pilih...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputKabupaten">Kabupaten</label>
                <select id="inputKabupaten" class="form-control input-alamat">
                  <option selected>Pilih...</option>
                  <option>Pilih propinsi dulu...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputKecamatan">Kecamatan</label>
                <select id="inputKecamatan" class="form-control input-alamat">
                  <option selected>Pilih...</option>
                  <option>Pilih kabupaten dulu...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputDesa">Desa</label>
                <select id="inputDesa" class="form-control input-alamat">
                  <option selected>Pilih...</option>
                  <option>Pilih kecamatan dulu...</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <div class="input-group has-default bmd-form-group autofocus">
                  <input required id="alamat-pengenal" type="text" class="form-control" placeholder="RT-RW/Jl./Gg.No/Kampung/Alamat pengenal selain attribut diatas" name="alamatPengenal">
                </div>
              </div>
          </div>
        </div>
                <span class="bmd-help" style="margin-top: 40px;margin-left: 55px;">Mohon disesuaikan dengan Kartu Keluarga.</span>
        <div class="modal-footer">
          <button id="close-alamat" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="simpan-alamat" type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="<?= base_url('assets/js/alamat.js') ?>" type="text/javascript"></script>
</body>
</html>
