<div class="card mt-5 rounded-0">
	<div class="card-header text-success">
		<h5>Status Pendaftaran</h5>
		<h5>Ma'had Al Ittihad 2021</h5>
	</div>
  <div class="card-body rounded-0">
	<div class="h4"><?= $data['nama'] ?></div>
	<br>
	<div class="row">
		<div class="col-md-12 table-responsive ">
			<table class="table table-striped">
			  <thead>
			    <tr class="bg-success text-light">
			      <th style="width: 5%">#</th>
			      <th style="width: 10%">Tahapan</th>
			      <th style="width: 10%">Status</th>
			      <th style="width: 50%">Keterangan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $no=0; foreach ($navigasi as $nav => $value): ?>
			  		<?php $no++; if ($no != 1 && $no != 6 ): ?>
					    <tr>
					      <td><?= $no-1 ?></td>
					      <td><?= $nav ?></td>
					      <td>
					      	<span class="badge badge-warning"><i class="fi-ctluxl-exclamation-mark-rounded text-danger"></i> belum selesai</span>
					      	<span class="badge badge-success"><i class="fi-cwsuxl-check text-dark"></i> selesai</span>
					      </td>
					      <td>
					      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque, iste unde deserunt illo! Distinctio similique, fugit quia dolorum dolor suscipit saepe, reiciendis quos sunt reprehenderit, possimus ab nihil vel?
					      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque, iste unde deserunt illo! Distinctio similique, fugit quia dolorum dolor suscipit saepe, reiciendis quos sunt reprehenderit, possimus ab nihil vel?
					      </td>
					    </tr>
			  		<?php endif ?>
			  	<?php endforeach ?>
			  </tbody>
			</table>
		</div>
	</div>


  </div>
</div>