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

		$data['nilai'] =  $nilai;
		$data['nilai2'] =  $nilai2;


		$y = str_split($nilai2);

		$baris= 1;
		foreach (array_reverse($y) as $pecah) {

			if ( $pecah*$nilai == 0 ) {
				$nol="0";
				for ($i=0; $i<count(str_split($nilai)) ; $i++) { 
					$nol = $nol."0";
				}
				$data['baris'][$baris++] = $nol;
			}else{
				$data['baris'][$baris++] = $pecah*$nilai;
			}
		}

		$data['hasil'] = $nilai * $nilai2;
		$data['judul'] = "Latih hitung";

		$this->load->view('welcome_message',$data);

	}
}

