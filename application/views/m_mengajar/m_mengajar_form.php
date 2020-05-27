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
        <h2 style="margin-top:0px">M_mengajar <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Mapel Id <?php echo form_error('mapel_id') ?></label>
            <input type="text" class="form-control" name="mapel_id" id="mapel_id" placeholder="Mapel Id" value="<?php echo $mapel_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kelas Id <?php echo form_error('kelas_id') ?></label>
            <input type="text" class="form-control" name="kelas_id" id="kelas_id" placeholder="Kelas Id" value="<?php echo $kelas_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Asatid Id <?php echo form_error('asatid_id') ?></label>
            <input type="text" class="form-control" name="asatid_id" id="asatid_id" placeholder="Asatid Id" value="<?php echo $asatid_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tahun Id <?php echo form_error('tahun_id') ?></label>
            <input type="text" class="form-control" name="tahun_id" id="tahun_id" placeholder="Tahun Id" value="<?php echo $tahun_id; ?>" />
        </div>
	    <input type="hidden" name="id_mengajar" value="<?php echo $id_mengajar; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('m_mengajar') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>