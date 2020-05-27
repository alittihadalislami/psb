<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model','mm');

		if ( !$this->session->userdata('nik') ) {
			redirect('welcome','refresh');
		}


		$this->data['data'] = $this->mm->cekData(['nik'=>$this->session->userdata('nik')])[0];

		$this->data ['navigasi'] = [
			'Home' => [base_url('home/index'),'index'],
			'Formulir' => [base_url('home/formulir'),'formulir'],
			'Asesment' => [base_url('home/asesment'),'asesment'],
			'Unggah File' => [base_url('home/unggahfile'),'unggahfile'],
			'Resume' => [base_url('home/resume'),'resume'],
			'Keuangan' => [base_url('home/keuangan'),'keuangan']
		];
	}

	public function index()
	{
		$data = $this->data;
		$data ['konten'] = $this->load->view('login/home', $data, TRUE);
		$this->load->view('login/login_home',$data);
	}

	public function asesment()
	{
		$data = $this->data;
		$data ['jumlah_soal'] = count($this->mm->listPertanyaan(3)); //id 3 adalah soal untuk psb
		$data ['konten'] = $this->load->view('login/asesment', $data, TRUE);
		$this->load->view('login/login_home',$data);
	}

	public function unggahfile()
	{
		$data = $this->data;
		$data ['konten'] = $this->load->view('login/unggahfile', $data, TRUE);
		$this->load->view('login/login_home',$data);
	}

	function simpanFile()
	{

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('arsip'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('upload_success', $data);
        }


	}

	public function formulir()
	{
		$data = $this->data;
		$id = $data['data']['id_data_awal'];

		$this->db->where('data_awal_id', $id);
		$data['tersedia'] = $this->db->get('p_pendaftaran')->row_array();

		$this->db->where('data_awal_id', $id);
		$tersedia_wali = $this->db->get('p_wali_pendaftaran')->result_array();

		if ($data['tersedia'] != null ) 
		{
			$hit = 0;
			$dari = 0;
			foreach ($data['tersedia'] as $v) {
				if ($v==null) 
				{
					$hit += 1 ;
				}
				$dari += 1;
			}

			$hit2 = 0;
			$dari2 = 0;
			foreach ($tersedia_wali as $w) {
				foreach ($w as $wl=> $l) {
					if ($l == null) {
						$hit2 += 1;
					}
					$dari2 += 1;
				}
			}

			$data['proses'] = ($hit2+$hit)/($dari + $dari2) * 100;
		}else{
			$data['proses'] = 70;
		}

		$this->setProses($id,$data['proses']); 

		$data['desa'] = $this->mm->tampilDesa($id);

		$wali_arr = [];
		foreach ($tersedia_wali as $wali => $val) {
			foreach ($val as $v => $i) {
				$wali_arr [ $v.$val['sts'] ] = $i;
			}
		}

		$data['tersedia_wali'] = $wali_arr;

		$data ['kolom_tabel'] = $this->db->get('u_tabel_baris')->result_array();
		$data ['konten'] = $this->load->view('login/formulir', $data, TRUE);

		$this->load->view('login/login_home',$data);
	}

	function setProses($id, $proses){

		$this->db->where('id_data_awal', $id);
		$this->db->update('p_data_awal', ['proses'=> intval(100-$proses) ] );
	}

	function kosongJadiNull($param)
	{
		if ($param == '' ) {
			return $param = NULL ;
		} else {
			return $param;
		}
	}

	function simpanFormulirAjax()
	{

		$daput = $this->input->post();


		foreach ($daput as $key => $value) {
			$daput [$key] = $this->kosongJadiNull($value);
		}

		$this->db->where('data_awal_id', $daput['data_awal_id']);
		$ada = $this->db->get('p_pendaftaran')->num_rows(); 

		if ($ada > 0) {
			$this->db->where('data_awal_id', $daput['data_awal_id']);
			$this->db->update('p_pendaftaran', $daput);
			$data = 'update';
		}else{
			$this->db->insert('p_pendaftaran', $daput);
			$data = 'insert';

		}
			echo json_encode($data);

	}

	function simpanFormulirAjax3()
	{

		$daput = $this->input->post();

		foreach ($daput as $key => $value) {
			$daput [$key] = $this->kosongJadiNull($value);
		}

		$kata_arr= [];

		foreach ($daput as $key => $value) {
			if ($key != 'data_awal_id') {
				$kata = strlen($key)-1;
				$kata_arr [] = substr($key, 0, $kata);
			}else{
				$kata_arr [] = $key;
			}
		}

		$daput_arr = array_unique($kata_arr);

		for ($i=1; $i <4 ; $i++) { 

			$where = [
				'sts'=> $daput['sts'.$i],
				'data_awal_id'=> $daput['data_awal_id'.$i]
			];
			
			$ada = $this->db->get_where('p_wali_pendaftaran', $where)->num_rows(); 

			if ($ada > 0) {
				$object = [
					'nama_ortu' => $daput["nama_ortu".$i],
					'nik_ortu' => $daput["nik_ortu".$i],
					'tmp_lahir_ortu' => $daput["tmp_lahir_ortu".$i],
					'tgl_lahir_ortu' => $daput["tgl_lahir_ortu".$i],
					'pendidikan_ortu' => $daput["pendidikan_ortu".$i],
					'pekerjaan_ortu' => $daput["pekerjaan_ortu".$i],
					'penghasilan_ortu' => $daput["penghasilan_ortu".$i],
					'no_hp_ortu' => $daput["no_hp_ortu".$i],
					'keterangan_ortu' => $daput["keterangan_ortu".$i]
				];
				$this->db->where($where);
				$this->db->update('p_wali_pendaftaran', $object);
				$data = 'update';
			}else{
				$object = [
					'data_awal_id' => $daput["data_awal_id".$i],
					'sts' => $daput["sts".$i],
					'nama_ortu' => $daput["nama_ortu".$i],
					'nik_ortu' => $daput["nik_ortu".$i],
					'tmp_lahir_ortu' => $daput["tmp_lahir_ortu".$i],
					'tgl_lahir_ortu' => $daput["tgl_lahir_ortu".$i],
					'pendidikan_ortu' => $daput["pendidikan_ortu".$i],
					'pekerjaan_ortu' => $daput["pekerjaan_ortu".$i],
					'penghasilan_ortu' => $daput["penghasilan_ortu".$i],
					'no_hp_ortu' => $daput["no_hp_ortu".$i],
					'keterangan_ortu' => $daput["keterangan_ortu".$i]
				];
				$this->db->insert('p_wali_pendaftaran', $object);
				$data = 'insert';
			}
		}
		echo json_encode($data);
	}

	function keluar()
	{
		session_destroy();
		redirect('welcome','refresh');
	}

	function tampilPertanyaan(){

		$nomor = $this->input->post('data');

		$list_pertanyaan = $this->mm->listPertanyaan(3); //3 Id soal(kumpulan soal) untuk psb

		$pertanyaan = $list_pertanyaan[$nomor-1];

		$perty_id = $list_pertanyaan[$nomor-1]['id_perty'];
		$list_pilihan = $this->mm->listPilihan($perty_id);
		
		$data = [$pertanyaan,$list_pilihan];

		echo json_encode($data);
	}

}