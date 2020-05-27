<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">T_pertanyaan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="longtext">Konten Perty <?php echo form_error('konten_perty') ?></label>
            <input type="text" class="form-control" name="konten_perty" id="konten_perty" placeholder="Konten Perty" value="<?php echo $konten_perty; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Soal Id <?php echo form_error('soal_id') ?></label>
            <input type="text" class="form-control" name="soal_id" id="soal_id" placeholder="Soal Id" value="<?php echo $soal_id; ?>" />
        </div>
	    <input type="hidden" name="id_perty" value="<?php echo $id_perty; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('asesment') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>