<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('utama/landing');
	}

	public function hitung()
	{
		$digit = rand(2,5);

		switch ($digit) {
			case $digit == 2:
				$min = 10;
				$max = 99;
			break;

			case $digit == 3:
				$min = 100;
				$max = 999;
			break;

			case $digit == 4:
				$min = 1000;
				$max = 9999;
			break;
			
			default:
				$min = 10000;
				$max = 99999;
			break;
		}
		$nilai = rand($min,$max);
		$nilai2 = rand($min,$max);

		echo $nilai.'<br/>';
		echo $nilai2.'<br/>';

		echo '<hr>';

		$y = str_split($nilai2);


		foreach (array_reverse($y) as $pecah) {

			echo $pecah*$nilai.'<br>';
		}
		echo '<hr>';
		echo $nilai * $nilai2;

		echo "<a href='javascript:window.location.href=window.location.href'>";
	}
}

