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
        <h2 style="margin-top:0px">M_mengajar Read</h2>
        <table class="table">
	    <tr><td>Mapel Id</td><td><?php echo $mapel_id; ?></td></tr>
	    <tr><td>Kelas Id</td><td><?php echo $kelas_id; ?></td></tr>
	    <tr><td>Asatid Id</td><td><?php echo $asatid_id; ?></td></tr>
	    <tr><td>Tahun Id</td><td><?php echo $tahun_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('m_mengajar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>