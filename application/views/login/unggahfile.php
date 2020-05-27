<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5 class="h4">Unggah File Pendukung</h5>
		<h5>Ma'had Al Ittihad - 2020</h5>
	</div>
  	<div class="card-body rounded-0">
  		<p class="small font-weight-bold">Sangat disarankan untuk <span style="font-style: italic;">menscan</span> file yang akan diupload dengan prekangkat scanner dengan baik agar file mudah untuk dibaca.. </p>
  		<p>file yang bisa diupload hanyalah type gambar .png, .jpg dan berukuram maksimal 1MB</p>
  			
  		<form method="post" action="<?=base_url()?>home/simpanFile" enctype="multipart/form-data">
			<div class="form-group mt-5 mb-1">
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" name="arsip" id="ijazah">
			    <label class="custom-file-label" for="ijazah">Pilih file Ijazah</label>
			  </div>
			</div>
			<button class="btn btn-warning d-block mx-auto" type="submit">Unggah</button>
		</form>

			<div class="input-group mt-2">
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="inputGroupFile01"
			      aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label" for="inputGroupFile01">Pilih file SKHU</label>
			  </div>
			</div>

			<div class="input-group mt-2">
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="inputGroupFile01"
			      aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label" for="inputGroupFile01">Pilih file Kartu Keluarga</label>
			  </div>
			</div>

			<div class="input-group mt-2">
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="inputGroupFile01"
			      aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label" for="inputGroupFile01">Pilih file Akte Lahir</label>
			  </div>
			</div>
	</div>
</div>