<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5 class="h4">Unggah File Pendukung</h5>
		<h5>Ma'had Al Ittihad - 2021</h5>
	</div>
  	<div class="card-body rounded-0">
  		
  		<?= $this->session->flashdata('pesan'); ?>

  		<div class="info small font-weight-bold col-md-8 mb-5">
	  		<p>Sangat disarankan untuk <span style="font-style: italic;">menscan</span> file yang akan diupload dengan parangkat scanner yang baik, agar file bisa dibaca dengan baik.. </p>
	  		<p>File yang bisa diupload type <strong class="text-success">gambar .png, .jpg dan berukuran maksimal 1 MB </strong> dan silahkan klik gambar setelah berhasil upload untuk memastikan <strong class="text-success">bisa dibaca dengan baik </strong></p>
	  		<p>Jika ukuran file lebih besar dari 1 MB, silahkan ubah ukuran filenya. bisa menggunakan aplikasi online seperti : <a href="https://compressjpeg.com" target="_blank">compressjpeg.com</a>, <a href="https://tinyjpg.com" target="_blank">tinyjpg.com</a>, atau yang lainnya.. </p>
  		</div>


  		<div class="row">
  			<div class="col-md-12">
  				<div class="font-weight-bold">1. Ijasah</div>
  				<hr class="mt-0">
  			</div>
  			<div class="col-12 col-md-4">
  				<?php  
  					$ijasah = isset($data['ijasah']) ? base_url("uploads/").$data['ijasah'] : base_url('assets/img/no_image.svg') ;
  				?>
  				
  				<a href="<?= $ijasah ?>"  
				   onclick="window.open('<?= $ijasah ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   return false;" >
				 	<img class="img-thumbnail d-sm-block mx-auto" src="<?= $ijasah ?>" style="height: 100px;">
				</a>
				
  			</div>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" required class="custom-file-input" name="arsip" id="ijasah">
					    <label class="custom-file-label" for="ijsah">Pilih file Ijasah</label>
					  </div>
					  <div class="d-none">
					    <input type="text" name="nama" value="<?= $data['nama'] ?>">
					    <input type="text" name="berkas" value="ijasah">
					    <input type="text" name="id_data_awal" value="<?= $data['id_data_awal']?>">
					  </div>
					</div>
					<button class="btn btn-warning d-block mr-auto" type="submit">Simpan</button>
				</form>
			</div>
  		</div>

  		<div class="row">
  			<div class="col-md-12">
  				<div class="font-weight-bold">2. SKHU</div>
  				<hr class="mt-0">
  			</div>
  			<div class="col-12 col-md-4">
  				<?php  
  					$skhu = isset($data['skhu']) ? base_url("uploads/").$data['skhu'] : base_url('assets/img/no_image.svg') ;
  				?>
  				<a href="<?= $skhu ?>"  
				   onclick="window.open('<?= $skhu ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   	return false;" >
  					<img class="img-thumbnail d-sm-block mx-auto" src="<?= $skhu ?>" style="height: 100px;">
  				</a>
  			</div>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" required class="custom-file-input" name="arsip" id="skhu">
					    <label class="custom-file-label" for="skhu">Pilih file SKHU</label>
					  </div>
					  <div class="d-none">
					    <input type="text" name="nama" value="<?= $data['nama'] ?>">
					    <input type="text" name="berkas" value="skhu">
					    <input type="text" name="id_data_awal" value="<?= $data['id_data_awal']?>">
					  </div>
					</div>
					<button class="btn btn-warning d-block mr-auto" type="submit">Simpan</button>
				</form>
			</div>
  		</div>

  		<div class="row">
  			<div class="col-md-12">
  				<div class="font-weight-bold">3. Kartu Keluarga</div>
  				<hr class="mt-0">
  			</div>
  			<div class="col-12 col-md-4">
  				<?php  
  					$kk = isset($data['kk']) ? base_url("uploads/").$data['kk'] : base_url('assets/img/no_image.svg') ;
  				?>
  				<a href="<?= $kk ?>"  
				   	onclick="window.open('<?= $kk ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   	return false;" >
  					<img class="img-thumbnail d-sm-block mx-auto" src="<?= $kk ?>" style="height: 100px;">
  				</a>
  			</div>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" required class="custom-file-input" name="arsip" id="kk">
					    <label class="custom-file-label" for="kk">Pilih file Kartu Keluarga</label>
					  </div>
					  <div class="d-none">
					    <input type="text" name="nama" value="<?= $data['nama'] ?>">
					    <input type="text" name="berkas" value="kk">
					    <input type="text" name="id_data_awal" value="<?= $data['id_data_awal']?>">
					  </div>
					</div>
					<button class="btn btn-warning d-block mr-auto" type="submit">Simpan</button>
				</form>
			</div>
  		</div>	

  		<div class="row">
  			<div class="col-md-12">
  				<div class="font-weight-bold">4. Akta Kelahiran</div>
  				<hr class="mt-0">
  			</div>
  			<div class="col-12 col-md-4">
  				<?php  
  					$akte = isset($data['akte']) ? base_url("uploads/").$data['akte'] : base_url('assets/img/no_image.svg') ;
  				?>
  				<a href="<?= $akte ?>"  
				   onclick="window.open('<?= $akte ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   	return false;" >
  					<img class="img-thumbnail d-sm-block mx-auto" src="<?= $akte ?>" style="height: 100px;">
  				</a>
  			</div>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" required class="custom-file-input" name="arsip" id="akte">
					    <label class="custom-file-label" for="akte">Pilih file Akta Kelahiran</label>
					  </div>
					  <div class="d-none">
					    <input type="text" name="nama" value="<?= $data['nama'] ?>">
					    <input type="text" name="berkas" value="akte">
					    <input type="text" name="id_data_awal" value="<?= $data['id_data_awal']?>">
					  </div>
					</div>
					<button class="btn btn-warning d-block mr-auto" type="submit">Simpan</button>
				</form>
			</div>
  		</div>	

  		<div class="row">
  			<div class="col-md-12">
  				<div class="font-weight-bold">4. Kartu lainnya</div>
  				<hr class="mt-0">
  			</div>
  			<div class="col-12 col-md-4">
  				<?php  
  					$kartu = isset($data['kartu']) ? base_url("uploads/").$data['kartu'] : base_url('assets/img/no_image.svg') ;
  				?>
  				<a href="<?= $kartu ?>"  
				   onclick="window.open('<?= $kartu ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   	return false;" >
  					<img class="img-thumbnail d-sm-block mx-auto" src="<?= $kartu ?>" style="height: 100px;">
  				</a>
  			</div>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
					<div class="form-group">
					  <div class="custom-file">
					    <input type="file" required class="custom-file-input" name="arsip" id="kartu">
					    <label class="custom-file-label" for="kartu">Pilih file Kartu</label>
					  </div>
					  <div class="d-none">
					    <input type="text" name="nama" value="<?= $data['nama'] ?>">
					    <input type="text" name="berkas" value="kartu">
					    <input type="text" name="id_data_awal" value="<?= $data['id_data_awal']?>">
					  </div>
					</div>
					<button class="btn btn-warning d-block mr-auto" type="submit">Simpan</button>
				</form>
			</div>
  		</div>	

	<!-- akhir card body -->
	</div>
</div>