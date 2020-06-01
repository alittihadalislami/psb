<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5 class="h4">Unggah File Pendukung</h5>
		<h5>Ma'had Al Ittihad - 2020</h5>
	</div>
  	<div class="card-body rounded-0">
  		
  		<?= $this->session->flashdata('pesan'); ?>

  		<div class="row">
  			<div class="col-12 pb-5">
  				<img src="<?= base_url('assets/img/biaya.jpg') ?>" width=100%>
  			</div>
  		</div>

  		<div class="info col-md-8 mb-5">
	  			Dipersilahkan untuk membayar biaya sebagai tertera diatas. 
	  				<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="Rp. 4.825.000" class="form-control form-control-sm bg-white text-dark" style="font-size: 30px" id="bri1" placeholder="Password" readonly="">
					  </div>
					  <button class="btn btn-danger btn-sm mb-2 mx-sm-1 d-block mx-auto">Salin</button>
					</form>
					<br>

	  			Dengan mentransfer ke Rekening Bendahara Ma'had Al Ittihad Al Islami.
		  			
		  			Putra: BRI an. Muhammad Azhari :
	  				<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="3882-01-016-304-53-4" class="form-control  bg-white text-dark" style="font-size: 24px" id="bri1" placeholder="Password" readonly="">
					  </div>
					  <button class="btn btn-danger btn-sm mb-2 mx-sm-1">Salin</button>
					</form>

		  			<!-- Putri: BRI an. Mariatul Jannah : 
		  			<form class="form-inline ml-0">
					  <div class="form-group mb-2">
					    <input type="text" value="0148-01-065-705-50-4" class="form-control" id="bri1" style="font-size: 24px" readonly="">
					  </div>
					  <button class="btn btn-danger btn-sm mb-2 mx-sm-1">Salin</button>
					</form> -->
  		</div>


  		<div class="row">
  			<div class="col-md-8">
  				<div class="row">
	  				<div class="col-6 font-weight-bold">Upload bukti transfer</div>
  				</div>
  				<hr class="mt-1">
  			</div>

  			<?php  
  				//jika sudah verifikasi dilock
  				
  				$transfer = isset($data['keuangan']) ? base_url('uploads/transfer/').$data['keuangan'] : null;

  				$transfer = null;

  				$display = $transfer == null ? 'd-none' : 'd-block';
  				$read = $transfer == null ? '' : 'readonly';
  				$disable = $transfer == null ? '' : 'disabled';
  			?>

  			<div class="col-12 col-md-4 <?= $display ?>">
  				<a href="<?= $transfer ?>"  
				   onclick="window.open('<?= $transfer ?>', 
				                         'newwindow', 
				                         'width=500,height=700'); 
				   return false;" >
				 	<img class="img-thumbnail d-sm-block mx-auto" src="<?= $transfer ?>" style="height: 100px;">
				</a>
				
  			</div>

  			<?php echo form_error('bukti-bayar'); ?>

			<div class="col-md-8 m-2 m-sm-0">
				<form method="post" action="<?=base_url()?>home/keuangan" enctype="multipart/form-data">

					<div class="form-group">
					    <label for="nama">Nama calon santri</label>
					    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" readonly>
					</div>

					<div class="form-group">
					    <label for="id">ID calon santri</label>
				    	<input type="text" class="form-control" name="id_data_awal" value="<?= $data['id_data_awal']?>" readonly>
					</div>

					<div class="custom-file">
					    <input type="file" required class="custom-file-input" name="bukti-bayar" id="bukti-bayar" <?= $read.' '.$disable ?> >
					    <label class="custom-file-label" for="bukti-bayar">Upload bukti transfer</label>
					</div>

					<button class="btn btn-warning d-block mr-auto mt-4" <?= $disable ?> type="button">Simpan</button>
				</form>
			</div>
  		</div>



	<!-- akhir card body -->
	</div>
</div>