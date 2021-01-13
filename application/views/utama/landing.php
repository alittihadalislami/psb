<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="ico" href="<?=base_url()?>assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Penerimaan Santri Ma'had Al Ittihad Al Islami
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>assets/demo/demo.css" rel="stylesheet" />
  <style>
  .is-focused .form-control {
    margin-top:8px;
    padding: 5px;
    font-weight:bold;
    font-size: 18px;
    background-color:white;
    background-image: 
    linear-gradient(0deg,green 2px,rgba(156,39,176,0) 0),
    linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0);
  }
  .capital 
  {
    text-transform:capitalize;
  }
  .bmd-form-group label {
    font-size: 0.975rem;
    color:red;
  }
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?=base_url()?>">
          <strong>PSB</strong> Ma'had Al Ittihad Al Islami </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('welcome/login')?>">
              <i class="material-icons">edit</i> Masuk
            </a>
          </li>
          <!-- <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?=base_url()?>index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>assets/file/brosur_alittihad_2021.pdf" download="Brosur Ma'had Al Ittihad Al Islami">
              <i class="material-icons">cloud_download</i> Unduh Brosur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="mailto:alittihadalislami@gmail.com.com" target="_blank" data-original-title="Email kami">
              <i class="fa fa-envelope"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/alittihadalislami" target="_blank" data-original-title="Instagram kami">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?=base_url()?>assets/img/masjid2.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title">Assalamulaikum..</h2>
          <h4>Laman Penerimaan Santri Baru PSB, adalah laman web yang dibuat untuk calon santriwan dan calon santriwati melakukan pendaftaran secara online.</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=v1uJhpAEphQ" target="_blank" class="btn btn-outline-success btn-raised">
          Kenali kami dengan melihat profil kami di &nbsp <i class="fa fa-youtube text-danger" style="font-size:20px"></i>  
          </a>
          <a href="<?= base_url('welcome/login') ?>" class="btn btn-success btn-raised mt-3">
          Klik untuk Daftar  
          &nbsp<i class="fa fa-arrow-right text-light"></i>  
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised badge-pill">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Ma'had Al Ittihad Al Islami</h2>
            <!-- <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5> -->
          </div>
        </div>
        <div class="row">
          <div class="col-6 mx-auto mt-0">
            <hr>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-book">
                  <img class="img-fluid" style="width: 50px" src="<?=base_url('assets/img/quran.png') ?>">
                </div>
                <h4 class="info-title">TAHFIDZUL QUR'AN</h4>
                <p>Santri wajib menghafal Al Qur'an sebagai syarat kelulusan, dan bagi santri yang hal 30 juz akan mendapatkan sanad.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-book">
                  <img class="img-fluid" style="height: 50px" src="<?=base_url('assets/img/tour.png') ?>">
                </div>
                <h4 class="info-title">TOUR DA'WAH</h4>
                <p>Kegiatan untuk melatih santri berda'wah dan mengamalkan ilmunya, ditempatkan diberbagai wilayah di Indonesia.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-book">
                  <img class="img-fluid" style="width: 50px" src="<?=base_url('assets/img/akreditasi.jpg') ?>">
                </div>
                <h4 class="info-title">AKREDIATASI A</h4>
                <p>MA Al Ittihad Al Islami dan SMP Al Ittihad mendapatkan Akreditasi A dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN S/M)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a class="text-success" href="https://wa.me/6282332883743?text=Assalamulaikum">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
              Panitia PSB
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script> - <a href="https://www.alittihadalislami.org" target="_blank">Ma'had Al Ittidah Al Islami</a>.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?=base_url()?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>

  <script>
  </script>
</body>

</html>
