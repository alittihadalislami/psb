<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	th, td {
	  border: 1px solid grey;
	  width: 20px;
	  text-align: center;
	}


	table {
	  border-collapse: collapse;
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<div>
			<?php 	

					$nl1 = str_split($nilai);
					$nl2 = str_split($nilai2);
					$hsl = str_split($hasil);
					$c1 = count($nl1);
					$c2 = count($nl2);
					$ch = count($hsl);
					$selisih = $ch-$c1;

			?>
			<table>
				<tr>
					<?php for ($i=0; $i<$ch; $i++): ?>
						<?php if ($i>=$selisih): ?>
							<td><?=$nl1[$i-$selisih]?></td>	
						<?php endif ?>
						<?php if ($i<$selisih): ?>
							<td></td>	
						<?php endif ?>
					<?php endfor ?>
				</tr>
				<tr>
					<?php for ($i=0; $i<$ch; $i++): ?>
						<?php if ($i>=$selisih): ?>
							<td><?=$nl2[$i-$selisih]?></td>	
						<?php endif ?>
						<?php if ($i<$selisih): ?>
							<td></td>	
						<?php endif ?>
					<?php endfor ?>
				</tr>
				<tr><td colspan="<?= $ch ?>"></td></tr>
						 
				<?php 
					
					$line=0; 
					foreach ($baris as $value) {					

						$angka = str_split($value);
						$jml_angka = count($angka);
						$slsh= $ch - $jml_angka;

						echo "<tr>";

						for ($i=0; $i<$ch ; $i++) { 
							$x = $slsh-$line;
							if ($i>=$x) {
								echo '<td style="font-size:10px; line-height: 10px">';
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
				<tr><td colspan="<?= $ch ?>"></td></tr>
				<tr>
					<?php foreach ($hsl as $v): ?>
						<td style="font-weight: bolder;"><?=$v?></td>
					<?php endforeach ?>
				</tr>
			</table>
		</div>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>