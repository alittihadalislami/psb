<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_wali extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_wali_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('t_wali/t_wali_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->T_wali_model->json();
    }

    public function read($id) 
    {
        $row = $this->T_wali_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_wali' => $row->id_wali,
		'kelas_id' => $row->kelas_id,
		'asatid_id' => $row->asatid_id,
		'tra_tri' => $row->tra_tri,
		'tahun_id' => $row->tahun_id,
	    );
            $this->load->view('t_wali/t_wali_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_wali'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_wali/create_action'),
	    'id_wali' => set_value('id_wali'),
	    'kelas_id' => set_value('kelas_id'),
	    'asatid_id' => set_value('asatid_id'),
	    'tra_tri' => set_value('tra_tri'),
	    'tahun_id' => set_value('tahun_id'),
	);
        $this->load->view('t_wali/t_wali_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kelas_id' => $this->input->post('kelas_id',TRUE),
		'asatid_id' => $this->input->post('asatid_id',TRUE),
		'tra_tri' => $this->input->post('tra_tri',TRUE),
		'tahun_id' => $this->input->post('tahun_id',TRUE),
	    );

            $this->T_wali_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_wali'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_wali_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_wali/update_action'),
		'id_wali' => set_value('id_wali', $row->id_wali),
		'kelas_id' => set_value('kelas_id', $row->kelas_id),
		'asatid_id' => set_value('asatid_id', $row->asatid_id),
		'tra_tri' => set_value('tra_tri', $row->tra_tri),
		'tahun_id' => set_value('tahun_id', $row->tahun_id),
	    );
            $this->load->view('t_wali/t_wali_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_wali'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_wali', TRUE));
        } else {
            $data = array(
		'kelas_id' => $this->input->post('kelas_id',TRUE),
		'asatid_id' => $this->input->post('asatid_id',TRUE),
		'tra_tri' => $this->input->post('tra_tri',TRUE),
		'tahun_id' => $this->input->post('tahun_id',TRUE),
	    );

            $this->T_wali_model->update($this->input->post('id_wali', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_wali'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_wali_model->get_by_id($id);

        if ($row) {
            $this->T_wali_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_wali'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_wali'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kelas_id', 'kelas id', 'trim|required');
	$this->form_validation->set_rules('asatid_id', 'asatid id', 'trim|required');
	$this->form_validation->set_rules('tra_tri', 'tra tri', 'trim|required');
	$this->form_validation->set_rules('tahun_id', 'tahun id', 'trim|required');

	$this->form_validation->set_rules('id_wali', 'id_wali', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_wali.xls";
        $judul = "t_wali";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Asatid Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Tra Tri");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Id");

	foreach ($this->T_wali_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kelas_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asatid_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tra_tri);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tahun_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_wali.doc");

        $data = array(
            't_wali_data' => $this->T_wali_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('t_wali/t_wali_doc',$data);
    }

}

/* End of file T_wali.php */
/* Location: ./application/controllers/T_wali.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-21 08:59:51 */
/* http://harviacode.com */