<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_wali_model extends CI_Model
{

    public $table = 't_wali';
    public $id = 'id_wali';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_wali,kelas_id,asatid_id,tra_tri,tahun_id');
        $this->datatables->from('t_wali');
        //add this line for join
        //$this->datatables->join('table2', 't_wali.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('t_wali/read/$1'),'Read')." | ".anchor(site_url('t_wali/update/$1'),'Update')." | ".anchor(site_url('t_wali/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_wali');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_wali', $q);
	$this->db->or_like('kelas_id', $q);
	$this->db->or_like('asatid_id', $q);
	$this->db->or_like('tra_tri', $q);
	$this->db->or_like('tahun_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_wali', $q);
	$this->db->or_like('kelas_id', $q);
	$this->db->or_like('asatid_id', $q);
	$this->db->or_like('tra_tri', $q);
	$this->db->or_like('tahun_id', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file T_wali_model.php */
/* Location: ./application/models/T_wali_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-21 08:59:51 */
/* http://harviacode.com */