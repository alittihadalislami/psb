<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5 class="h4">Asesment / Interview</h5>
		<h5>Ma'had Al Ittihad <?= date("Y"); ?></h5>
	</div>
  <div class="card-body rounded-0">
  	<div class="row">
  		<div class="col-md-9 text-justify mb-5">
  			<p id="box-pertanyaan"><span id="id-perty"></span></p>
        <input class="d-none" id="id-perty">
        <div id="box-jawaban">
          <div class="custom-control custom-radio">
          	<input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
          	<label class="custom-control-label" for="customRadioInline1">Toggle this first option</label>
        	</div>
        	<div class="custom-control custom-radio">
          	<input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
          	<label class="custom-control-label" for="customRadioInline2">Toggle this first option</label>
        	</div>
        </div>
        
        <br>

        <div class="btn btn-outline-danger"><i class="fi-cnsrxm-chevron-solid"></i></div>
        <div class="btn btn-primary" id="simpan-asesment">Simpan, lanjut</div>
        <hr class="mt-5 d-md-none">
  		</div>

  	<div class="col-md-3 justify-content-end">
      <?php for ($i=1; $i<=$jumlah_soal; $i++): ?>
          <span style="height: 25px; width: 25px; font-size: 12px;" onclick="tampilPertanyaan(<?=$i?>)" class="btn btn-outline-primary p-1 m-1 p-0 text-small" >
            <?= $i ?>
          </span>
      <?php endfor ?>
  	</div>
  </div>
</div>