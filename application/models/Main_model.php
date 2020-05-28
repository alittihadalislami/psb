<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	function cekData($data)
	{
		return $this->db->get_where('p_data_awal', $data)->result_array();
	}

	function listPertanyaan($id)
	{
		$stringQ = " SELECT  p.`id_perty`,p.`konten_perty`
					FROM t_pertanyaan p
					WHERE p.`soal_id` = $id ";
		return $this->db->query($stringQ)->result_array();
	}

	function listPilihan($id)
	{
		$stringQ = " SELECT p.`id_pilihan`, p.`konten_pilihan`
					FROM t_pilihan p
					WHERE p.`perty_id` = $id ";
		return $this->db->query($stringQ)->result_array();

	}

	function tampilDesa($id)
	{
		$stringQ = " SELECT d.`name` AS ds, k.`name` AS kec , b.`name` AS kab, v.`name` AS prop
				FROM p_data_awal a JOIN i_desa d
				ON a.`desa_id` = d.`id` JOIN i_kecamatan k
				ON k.`id` = d.`kecamatan_id` JOIN i_kabkot b
				ON k.`kabkot_id` = b.`id` JOIN i_propinsi v
				ON v.`id` = b.`propinsi_id` WHERE a.`id_data_awal` = $id ";
		$hasil =  $this->db->query($stringQ)->row_array();
		
		if ($hasil != NULL){
			
			return $hasil;

		}else{
			$this->db->select('desa_id');
			$desa = $this->db->get_where('p_data_awal', ['id_data_awal' => $id])->row_array();
			
			$tingkat = [
				13 => 'ds',
				8 => 'kec',
				5 => 'kab',
				2 => 'prop',
			];
			
			foreach ($tingkat as $tk => $val) {
				$kode = substr($desa['desa_id'], 0, $tk);

				$this->db->select('nama');
				$data = $this->db->get_where('wilayah_2020', ['kode'=>$kode])->row_array();
				$hasil [$val] = $data['nama'] ;
			}

			return $hasil;
		}
	}

	function selectTerpilih($baris,$id)
	{
		$this->db->select("$baris");
		$this->db->where('data_awal_id', $id);
		return $this->db->get('p_pendaftaran')->row_array();
	}

	function selectTerpilihWali($baris,$id)
	{
		$this->db->select("$baris");
		$this->db->where('data_awal_id', $id);
		return $this->db->get('p_wali_pendaftaran')->row_array();
	}

}