<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5 class="h4">Unggah File Pembiayaan</h5>
		<h5>Ma'had Al Ittihad <?= date("Y"); ?></h5>
	</div>
  	<div class="card-body rounded-0">

  		<div class="row">
  			<div class="col-12 pb-5">
  				<a href="<?= base_url('assets/img/biaya.jpg') ?>"  
				   onclick="window.open('<?= base_url('assets/img/biaya.jpg') ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   return false;" >
				 	<img src="<?= base_url('assets/img/biaya.jpg') ?>" width=70%>
				</a>
  				
  			</div>
  		</div>

  		<div class="info col-md-8 mb-5">
	  			Dipersilahkan untuk membayar biaya sebagai tertera diatas. 
	  			<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="Rp. 5.800.000" class="form-control form-control-sm bg-white text-dark" style="font-size: 30px; width: 220px" id="bri1" placeholder="Password" readonly="">
					  </div>
					  <button data-nilai="5800000" type="button" class="btn btn-danger btn-sm mb-2 mx-sm-1 d-block mx-auto copy">Salin Putra</button>
					</form>
          <form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="Rp. 5.900.000" class="form-control form-control-sm bg-white text-dark" style="font-size: 30px; width: 220px" id="bri1" placeholder="Password" readonly="">
					  </div>
					  <button data-nilai="5900000" type="button" class="btn btn-danger btn-sm mb-2 mx-sm-1 d-block mx-auto copy">Salin Putri</button>
					</form>
					<br>

	  				Dengan mentransfer ke Rekening Bendahara Ma'had Al Ittihad Al Islami.
		  			<br><img src="<?= base_url('assets/img/bri.png') ?>" style="height: 30px; margin-bottom: 10px; margin-top: 10px">
		  			<strong>an. Muhammad Azhari</strong>
	  				<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="3882-01-016-304-53-4"  class="form-control  bg-white text-dark" style="font-size: 24px;" id="bri1" placeholder="Password" readonly>
					  </div>
					  <div style="width: 42%" class="d-sm-none"></div>
					  <button type="button" data-nilai="388201016304534" class="btn btn-danger btn-sm mb-2 mx-sm-1 copy">Salin</button>
					</form>
					<br>
					atau
		  			<br><img src="<?= base_url('assets/img/bri.png') ?>" style="height: 30px; margin-bottom: 10px; margin-top: 10px">
		  			<strong>an. Mariatul Jannah</strong>
		  			<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="0148-01-065-705-50-4" class="form-control bg-white text-dark" id="bri1" style="font-size: 24px" readonly>
					  </div>
					  <div style="width: 42%" class="d-sm-none"></div>
					  <button type="button" data-nilai="014801065705504" class="btn btn-danger btn-sm mb-2 mx-sm-1 copy">Salin</button>
					</form>
  		</div>


  		<div class="row">
  			<div class="col-md-8">
  				
  				<?= $this->session->flashdata('pesan'); ?>

  				<div class="row">
	  				<div class="col-12">
	  					Dan mengunggah bukti transfer dengan form dibawah ini
	  				</div>
  				</div>
  				<hr class="mt-1">
  			</div>

  			<?php  
  				$upload_resi = base_url('uploads/transfer/').$data['keuangan'];

  				$verifikasi = $data['verf_keuangan'] != NULL ? $upload_resi : NULL ;

  				$display = $data['keuangan'] == null ? 'd-none' : 'd-block';
  				$read = $verifikasi == null ? '' : 'readonly';
  				$disable = $verifikasi == null ? '' : 'disabled';
  			?>


  			<?php echo form_error('bukti-bayar'); ?>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/keuangan" enctype="multipart/form-data">

					<div class="form-group">
					    <label for="nama">Nama calon santri</label>
					    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" readonly>
					</div>

					<div class="form-group">
					    <label for="id">ID calon santri (otomatis dari sistem)</label>
				    	<input type="text" class="form-control" name="id_data_awal" value="<?= $data['id_data_awal']?>" readonly>
					</div>

		  			<div class="<?= $display ?>">
		  				<a href="<?= $upload_resi ?>"  
						   onclick="window.open('<?= $upload_resi ?>', 
						                         'newwindow', 
						                         'width=500,height=700'); 
						   return false;" >
						 	<img class="img-thumbnail d-sm-block mx-auto" src="<?= $upload_resi ?>" style="height: 100px;">
						</a>
						
		  			</div>

					<div class="custom-file mt-3">
					    <input type="file" required class="custom-file-input" name="bukti-bayar" id="bukti-bayar" <?= $read.' '.$disable ?> >
					    <label class="custom-file-label" for="bukti-bayar">Upload bukti transfer</label>
					</div>

					<button type="submit" class="btn btn-warning d-block mr-auto mt-4" <?= $disable ?> type="button">Simpan</button>
				</form>
			</div>
  		</div>



	<!-- akhir card body -->
	</div>
</div>