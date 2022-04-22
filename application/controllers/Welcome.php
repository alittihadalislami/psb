<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model','mm');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'nik', 
			'NIK Calon Santri', 
			'trim|required|min_length[16]|max_length[16]',
			[
				'min_length'=> '{field} harus 16 digit',
				'max_length'=> '{field} harus 16 digit'
			]
		);

		$this->form_validation->set_rules(
			'nisn', 
			'NISN Calon Santri', 
			'trim|required|min_length[10]|max_length[10]',
			[
				'min_length'=> '{field} harus 10 digit',
				'max_length'=> '{field} harus 10 digit'
			]
		);
	}

	public function index()
	{
		$this->load->view('utama/landing');
	}

	function login()
	{
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/index');
		} else {
			$this->cekData();
		}
	}

	function home()
	{
		$this->load->view('home', $data);
	}

	function listPropinsi()
	{
		$this->db->where('char_length(kode)', 2);
		$data = $this->db->get('wilayah_2020')->result_array();
		
		echo json_encode($data);
	}

	function listKabupaten()
	{	$id = $this->input->post('id',true);

		$this->db->where('char_length(kode)', 5);
		$this->db->like('kode', $id, 'after');
		$data = $this->db->get('wilayah_2020')->result_array();
		
		echo json_encode($data);
	}

	function listKecamatan()
	{	$id = $this->input->post('id',true);

		$this->db->where('char_length(kode)', 8);
		$this->db->like('kode', $id, 'after');
		$data = $this->db->get('wilayah_2020')->result_array();

		echo json_encode($data);
	}

	function listDesa()
	{	$id = $this->input->post('id',true);

		$this->db->where('char_length(kode)', 13);
		$this->db->like('kode', $id, 'after');
		$data = $this->db->get('wilayah_2020')->result_array();

		echo json_encode($data);
	}

	function cekData() 
  {
		$daput = $this->input->post(null,'true');

		$data_login = [
			'nik' => $daput['nik'],
			'nisn' => $daput['nisn']
		];

    // var_dump($daput);die;
    
		if (count($daput) == 2 ) {
      
      $tersedia2 = $this->mm->cekData($daput);
		
			if (count($tersedia2) == 1) {
				$this->session->set_userdata($data_login);
				redirect('home','refresh');
			} else{

				$tersedia_nik = $this->mm->cekData(['nik'=>$daput['nik']]);
				$tersedia_nisn = $this->mm->cekData(['nisn'=>$daput['nisn']]);

				$tersedi_salah_satu = count($tersedia_nik) + count($tersedia_nisn);

				if ($tersedi_salah_satu > 0 ) {
					$this->session->set_flashdata('pesan', '<div class="col-md-12 mb-4 alert alert-danger">
									        <div class="container">
									          <div class="alert-icon">
									            <i class="material-icons">error_outline</i>
									          </div>
									          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									            <span aria-hidden="true"><i class="material-icons">clear</i></span>
									          </button>
									          <b>Error Alert:</b> NIK atau NISN yang dimasukkan sudah terdaftar, silahkan login dengan Pasangan NIK yang NISN yang pernah didaftarkan sebelumnya...
									        </div>
									      </div>');
					redirect('welcome/login','refresh');
				}else{

					$data['input'] = $daput;
					$this->load->view('login/index2', $data);
				}
			}
		}else{
			$this->db->insert('p_data_awal', $daput);
			$this->session->set_userdata($data_login);
			redirect('home','refresh');
		}

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

