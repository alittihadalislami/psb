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
        <h2 style="margin-top:0px">T_pertanyaan Read</h2>
        <table class="table">
	    <tr><td>Konten Perty</td><td><?php echo $konten_perty; ?></td></tr>
	    <tr><td>Soal Id</td><td><?php echo $soal_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('asesment') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>