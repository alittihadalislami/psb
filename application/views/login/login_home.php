<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="ico" sizes="16x16">
	<!-- bootsrap	 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- friconix -->
	<script defer src="https://friconix.com/cdn/friconix.js"> </script>
	<!-- my.css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/my.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/datepicker.css') ?>">

	<title>Formulir Data</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
		<div class="container">
		  	<a class="navbar-brand" href="#"><?= $data['nama'] ?></a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<!-- <li class="nav-item active">
		        		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Link</a>
		      		</li>
		      		<li class="nav-item dropdown">
		       			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		        		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          			<a class="dropdown-item" href="#">Action</a>
		          			<a class="dropdown-item" href="#">Another action</a>
		          			<div class="dropdown-divider"></div>
		          			<a class="dropdown-item" href="#">Something else here</a>
		        		</div>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link disabled" href="#">Disabled</a>
		      		</li> -->
		    	</ul>
		    	<a href="<?= base_url('home/keluar') ?>" class="nav-link text-light" style="cursor: pointer;">
		      		<i class="fi-swsuxl-sign-in-solid"></i>  Keluar
		    	</a>
		  	</div>
		</div>
	</nav>

	<!-- Konten -->
	<div class="container-fluid mt-5">
		<section class="konten">
			<div class="row bg-light pb-5">
				<div class="col-lg-3 ">
					<div class="list-group list-group-flush mt-5">
						<?php foreach ($navigasi as $navi => $gasi): ?>
							<?php  
								$uri =$this->uri->segment(2);
								if ($uri == $gasi[1]) {
									$active = 'active';
								}else{
									$active = '';
								}
							?>
					  		<a href="<?= $gasi[0] ?>" class="list-group-item list-group-item-action navigasi <?= $active ?>">
					    	<?= $navi?>  
					  		</a>
						<?php endforeach ?>
					</div>
				</div>
				<div class="col-lg-9" style="padding-bottom: 250px">
					<!-- Isi konten -->
					<?= $konten; ?>
					<!-- End of isi konten -->
				</div>
			</div>
		</section>
	</div>
	<!-- End of konten -->
	
	<!-- Footer -->
	<footer class="page-footer font-small blue-grey lighten-5 " style="background-color: lightgreen; border-top:2px solid black">
	  <div class="container-fluid text-center text-md-left pt-5">
	    <div class="row mt-3 dark-grey-text">
	      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
	        <!-- Content -->
	        <h6 class="text-uppercase font-weight-bold">Ma'had Al Ittihad Al Islami</h6>
	        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	        <p>Ma'had Al Ittihad Al Islami Camplong didirikan secara resmi pada hari Senin, tanggal 11 Juli 1992 M bertepatan dengan 12 Shafar 1412 H oleh Bapak H. Achmad Sutardjo</p>
	      </div>
	      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
	        <!-- Links -->
	        <h6 class="text-uppercase font-weight-bold">Pendidikan</h6>
	        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	        <p><a class="dark-grey-text" href="#!">Ma'had Al Ittihad Al Islami</a></p>
	        <p><a class="dark-grey-text" href="#!">MA Al Ittihad Al Islami</a></p>
	        <p><a class="dark-grey-text" href="#!">SMP Al Ittihad</a></p>
	      </div>
	      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
	        <!-- Links -->
	        <h6 class="text-uppercase font-weight-bold">Program Unggulan</h6>
	        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	        <p><a class="dark-grey-text" href="#!">Tahfidzul Qur'an</a></p>
	        <p><a class="dark-grey-text" href="#!">Tour Da'wah</a></p>
	        <p><a class="dark-grey-text" href="#!">Tebar Qur'ban</a></p>
	      </div>
	      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
	        <!-- Links -->
	        <h6 class="text-uppercase font-weight-bold">Nara hubung</h6>
	        <hr class="teal accent-3 mb-4 mt-0 d-inline-block" style="width: 60px;">
	        <p><i class="fa fa-home"></i>Jl. Raya Camplong No.15, Dharma Camplong, Sampang Madura</p>
	        <a href="https://wa.me/6282332883743?text=Assalamulaikum"><i class="fi-xnsuxl-whatsapp"></i> Panitia PSB</a>
	      </div>
	    </div>
	  </div>
	  <!-- Copyright -->
	  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
	    <a class="dark-grey-text" href="<?= base_url()?>">Ma'had Al Ittihad Al Islami</a>
	  </div>
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/js/datepicker.js') ?>"></script>
	<script src="<?=base_url('assets/js/jQuery.SimpleMask.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/my.js') ?>"></script>
	<script>
		$(document).ready(function(){
			
			$('[data-toggle="datepicker"]').datepicker({
				format: 'dd-mm-yyyy',
				startView:'2',
				autoHide:true
			});

			$('.navigasi').on('click',function(){
				$('.navigasi').removeClass('active');
				$(this).addClass('active');
			})
		});

		$('.custom-file-input').on('change', function() { 
		   let fileName = $(this).val().split('\\').pop(); 
		   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
		});
	</script>
</body>
</html>