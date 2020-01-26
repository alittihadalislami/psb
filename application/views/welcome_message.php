<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
  	<!-- Favicon -->
  	<link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Latihan Perkalian</title>
  </head>
  <body>
    
    <div class="row container mt-5 mx-auto px-1">
    	<div id="date" class="col-xl-12 mb-3"></div>
    	<div class="col-xl-4">
    	<div class="shadow p-1 mb-3 rounded">
			<?php 	

					$nl1 = str_split($nilai);
					$nl2 = str_split($nilai2);
					$hsl = str_split($hasil);
					$c1 = count($nl1);
					$c2 = count($nl2);
					$ch = count($hsl);
					$selisih = $ch-$c1;

			?>
			<table class="table table-bordered table-sm text-center">
				<tr class="font-weight-bolder" style="line-height: 40px; height: 40px; width: 30px">
					<?php for ($i=0; $i<$ch; $i++): ?>
						<?php if ($i>=$selisih): ?>
							<td><?=$nl1[$i-$selisih]?></td>	
						<?php endif ?>
						<?php if ($i<$selisih): ?>
							<td></td>	
						<?php endif ?>
					<?php endfor ?>
				</tr>
				<tr class="font-weight-bolder" style="line-height: 40px; height: 40px; border-bottom: 3px solid black">
					<?php for ($i=0; $i<$ch; $i++): ?>
						<?php if ($i>=$selisih): ?>
							<td><?=$nl2[$i-$selisih]?></td>	
						<?php endif ?>
						<?php if ($i<$selisih): ?>
							<td></td>	
						<?php endif ?>
					<?php endfor ?>
				</tr>
						 
				<?php 
					
					$line=0; 
					foreach ($baris as $value) {					

						$angka = str_split($value);
						$jml_angka = count($angka);
						$slsh= $ch - $jml_angka;

						echo '<tr class="baris">';

						for ($i=0; $i<$ch ; $i++) { 
							$x = $slsh-$line;
							if ($i>=$x) {
								echo '<td style="font-size:15px; font-weight:bold; line-height: 15px; color:grey;">';
									if (isset($angka[$i-$x]) ) {
											echo $angka[$i-$x];
									}else{
										echo "";
									}
								echo '</td>';
							}else{
								echo '<td></td>';
							}
						}

						echo "</tr>";
					$line += 1;
					}
				?> 
				<tr class="baris font-weight-bolder" style="line-height: 40px; height: 40px; font-size: 20px; border-top: 3px solid black">
					<?php foreach ($hsl as $v): ?>
						<td><?=$v?></td>
					<?php endforeach ?>
				</tr>
			</table>
		</div>
    	<div id="Timer" class="shadow btn btn-block btn-light">Mulai</div>
    	<div id="start" class="shadow btn btn-block btn-success">Selesai</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script>
    	$(document).ready(function(){
    		var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
			var dayNames= ["Ahad","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
			// var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

			var newDate = new Date();
			newDate.setDate(newDate.getDate() );    
			$('#date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

			var start = new Date;

			$('#start').hide();
			$('.baris').hide();

			$('#Timer').on('click', function(){
				
				$('#start').show();

				setInterval(function() {
					let detik = (new Date - start) / 1000 / 60 ;
					$('#Timer').text(detik.toFixed(3));

					$('#start').on('click', function(){
						$('.baris').show("slow");
						$('#Timer').hide();
						$('#start').text(detik.toFixed(2) + ' Menit');
					})

				}, 1000);
			})
			

    	})
    </script>
  </body>
</html>