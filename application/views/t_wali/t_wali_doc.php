<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>T_wali List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kelas Id</th>
		<th>Asatid Id</th>
		<th>Tra Tri</th>
		<th>Tahun Id</th>
		
            </tr><?php
            foreach ($t_wali_data as $t_wali)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_wali->kelas_id ?></td>
		      <td><?php echo $t_wali->asatid_id ?></td>
		      <td><?php echo $t_wali->tra_tri ?></td>
		      <td><?php echo $t_wali->tahun_id ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>