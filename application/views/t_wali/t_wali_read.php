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
        <h2 style="margin-top:0px">T_wali Read</h2>
        <table class="table">
	    <tr><td>Kelas Id</td><td><?php echo $kelas_id; ?></td></tr>
	    <tr><td>Asatid Id</td><td><?php echo $asatid_id; ?></td></tr>
	    <tr><td>Tra Tri</td><td><?php echo $tra_tri; ?></td></tr>
	    <tr><td>Tahun Id</td><td><?php echo $tahun_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_wali') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>