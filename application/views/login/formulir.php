<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<div class="row">
			<div class="col-12">
				<h5 class="h3">Formulir Pendaftaran</h5>
				<h5>Ma'had Al Ittihad 2021</h5>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 p-5">
			<?php  
			$p = 100-intval($proses) > 99 ? 100 : 100-intval($proses) ;
			?>
			<a href="#" onclick="location.reload()"><div class="progress" style="height: 20px;">
			  <div class="progress-bar bg-secondary" id="proses-bar" role="progressbar" style="width: <?= $p ?>%" aria-valuenow="<?= $p ?>" aria-valuemin="0" aria-valuemax="100"><?= $p ?>%</div>
			</div></a>
		</div>
	</div>
  <div class="card-body rounded-0">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="diri-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Pendidikan</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="ortu-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Orang-tua / Wali</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<br>
	  	<?php  
	  	$alamat_pengenal = $desa['ds'].', '.$desa['kec'].', '.$desa['kab'].', '.$desa['prop'];
	  	?>
	  	<h5 class="card-title">Data diri calon santri</h5>
	    <form method="post" action="#">
	    	<input class="d-none" type="text" value="<?= $data['id_data_awal'] ?>" name="data_awal_id">
	    	<?php foreach ($kolom_tabel as $kolom): ?>
	    		<?php if ($kolom['id_kolom'] < 19): ?>
	    			<?php 
	    			$pilihan = $this->db->get_where('u_tabel_pilihan', ['tabel_baris_id'=> $kolom['id_kolom'] ]); ?>

					<!-- Jika ada pilihan isian -->
	    			<?php if (count($pilihan->result()) > 0): ?> 
					<?php $terpilih = $this->mm->selectTerpilih($kolom['name_kolom'],$data['id_data_awal']); ?>
					  	<div class="form-group">
							<label for="<?= $kolom['name_kolom'] ?>"><?= $kolom['nama_kolom'] ?></label>
						    <select class="form-control" name="<?= $kolom['name_kolom'] ?>" id="<?= $kolom['name_kolom'] ?>">
						      	<option value="">Pilih..</option>
						      <?php foreach ($pilihan->result_array() as $pil): ?>
						      	<option <?= $terpilih[$kolom['name_kolom']] == $pil['value'] ? 'selected' : ''?> value="<?= $pil['value'] ?>"><?= $pil['select'] ?></option>
						      <?php endforeach ?>
						    </select>
						</div>
	    			<?php else: ?>
					  	<div class="form-group">
					  		<label for=""><?= $kolom['nama_kolom'] ?></label>
					    	<input 
						    	class="form-control" 
						    	type="<?= $kolom['type_input'] ?>" 
						    	id="<?= $kolom['name_kolom'] ?>" 
						    	<?php if ($kolom['name_kolom'] == 'tgl_lahir'): ?>
						    		data-toggle="datepicker" readonly style="background-color: white" 	
						    	<?php endif ?>  
						    	name="<?= $kolom['name_kolom'] ?>"
						    	<?php
						    		$utama = isset($data[$kolom['name_kolom']]) ? $data[$kolom['name_kolom']] : '';
						    		$detail = isset($tersedia[$kolom['name_kolom']]) ? $tersedia[$kolom['name_kolom']] : '' ;
						    	?>
						    	value="<?= $kolom['id_kolom'] < 7 ? $utama : $detail ?>"
						    	<?= $kolom['id_kolom'] < 7 && $kolom['id_kolom'] !=5  ? 'readonly' : '' ?>
					    	>
					    		<?php if ($kolom['id_kolom'] == 5 ): ?>
					    			<input type="text" class="form-control form-control-sm mt-1" style="font-style: italic; font-weight: normal;" readonly value="<?= ucwords( strtolower($alamat_pengenal) )?>">
					    		<?php endif ?>
					  	</div>
	    			<?php endif ?>
	    		<?php endif ?>
	    	<?php endforeach ?>	
		</form>
	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<br>
	  	<h5 class="card-title pb-3">Data pendidikan calon santri</h5>
	    <form>
	    	<?php foreach ($kolom_tabel as $kolom): ?>
	    		<?php if ($kolom['id_kolom'] > 18 && $kolom['id_kolom'] < 29 ): ?>
	    		<?php 
	    			$pilihan = $this->db->get_where('u_tabel_pilihan', ['tabel_baris_id'=> $kolom['id_kolom'] ]); ?>

					<!-- Jika ada pilihan isian -->
	    			<?php if (count($pilihan->result()) > 0): ?> 
					<?php $terpilih = $this->mm->selectTerpilih($kolom['name_kolom'],$data['id_data_awal']); ?>
					  	<div class="form-group">
							<label for="<?= $kolom['name_kolom'] ?>"><?= $kolom['nama_kolom'] ?></label>
						    <select class="form-control" name="<?= $kolom['name_kolom'] ?>" id="<?= $kolom['name_kolom'] ?>">
						      	<option value="">Pilih..</option>
						      <?php foreach ($pilihan->result_array() as $pil): ?>
						      	<option <?= $terpilih[$kolom['name_kolom']] == $pil['value'] ? 'selected' : ''?> value="<?= $pil['value'] ?>"><?= $pil['select'] ?></option>
						      <?php endforeach ?>
						    </select>
						</div>
	    			<?php else: ?>
				  	<div class="form-group mt-1">
						<label for=""><?= $kolom['nama_kolom'] ?></label>
				    	<input 
					    	class="form-control" 
					    	type="<?= $kolom['type_input'] ?>" 
					    	id="<?= $kolom['name_kolom'] ?>"  
					    	name="<?= $kolom['name_kolom'] ?>"
					    	value="<?= isset($tersedia[$kolom['name_kolom']]) ? $tersedia[$kolom['name_kolom']] : '' ?>"
					    	<?php if ($kolom['name_kolom'] == 'tgl_lahir_seijasah'): ?>
						    	data-toggle="datepicker" readonly style="background-color: white"	
						    <?php endif ?>
				    	>
				  	</div>
	    		<?php endif ?>
	    	<?php endif ?>
	    	<?php endforeach ?>	
		</form>
	  </div>
	  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	  	<?php 
	  		$no_status = 0; 
	  		$status = ['Bapak Kandung', 'Ibu Kandung', 'Wali'];
	  	?>
	  		<label class="mt-5" for="nok">Nomor Kartu Keluarga dari calon santri</label>
	  		<input type="text" id="nok" class="form-control" name="nok" value="<?= isset($tersedia['nok']) ? $tersedia['nok'] : '' ?>">

	  	<?php foreach ($status as $sts): ?>
	  	<?php $no_status++ ?>
		<br>
	  	<h5 class="card-title">Data <?=$sts ?></h5>
		    <form method="post" action="<?=base_url('home/simpanFormulirAjax3') ?>">
		    	<input class="d-none" type="text" value="<?= $data['id_data_awal'] ?>" name="<?= 'data_awal_id'.$no_status ?>">
		    	<input class="d-none" type="text" value="<?= $no_status ?>" name="<?= 'sts'.$no_status ?>">
		    	<?php foreach ($kolom_tabel as $kolom): ?>
		    		<?php if ($kolom['id_kolom'] > 29 ): ?>
		    		<?php 
	    			$pilihan = $this->db->get_where('u_tabel_pilihan', ['tabel_baris_id'=> $kolom['id_kolom'] ]); ?>

					<!-- Jika ada pilihan isian -->
	    			<?php if (count($pilihan->result()) > 0): ?> 
					<?php $terpilih = $this->mm->selectTerpilihWali($kolom['name_kolom'],$data['id_data_awal']); ?>
					  	<div class="form-group">
							<label for="<?= $kolom['name_kolom'] ?>"><?= $kolom['nama_kolom'].' '.$sts ?></label>
						    <select class="form-control" name="<?= $kolom['name_kolom'] ?>" id="<?= $kolom['name_kolom'].$no_status ?>">
						      	<option value="">Pilih..</option>
						      <?php foreach ($pilihan->result_array() as $pil): ?>
						      	<option <?= $terpilih[$kolom['name_kolom']] == $pil['value'] ? 'selected' : ''?> value="<?= $pil['value'] ?>"><?= $pil['select'] ?></option>
						      <?php endforeach ?>
						    </select>
						</div>
	    			<?php else: ?>
					  	<div class="form-group mt-1">
					  		<label for="<?= $kolom['name_kolom'].$no_status ?>"><?= $kolom['nama_kolom'].' '.$sts ?></label>
					    	<input 
						    	class="form-control" 
						    	type="<?= $kolom['type_input'] ?>" 
						    	id="<?= $kolom['name_kolom'].$no_status ?>"  
						    	name="<?= $kolom['name_kolom'].$no_status ?>"
						    	<?php
						    		if ( count($tersedia_wali) > 0 ) {
						    			$nilai = $tersedia_wali[$kolom['name_kolom'].$no_status]; 
						    		}
						    	?>
						    	value="<?= isset($nilai) ? $nilai : null ?>"
						    	<?php if ($kolom['name_kolom'] == 'tgl_lahir_ortu'): ?>
							    	data-toggle="datepicker" readonly style="background-color: white"
							    <?php endif ?>
					    	>
					  	</div>
		    		<?php endif ?>
		    		<?php endif ?>
		    	<?php endforeach ?>	
		<?php endforeach ?>
			</form>
	  </div>
	  <div class="col-6 float-right text-right mt-3">
				<button class="btn btn-warning " id="simpanForm">Simpan</button>
			</div>
	</div>
  </div>
</div>