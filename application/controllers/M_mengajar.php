<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_mengajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mengajar_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('m_mengajar/m_mengajar_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->M_mengajar_model->json();
    }

    public function read($id) 
    {
        $row = $this->M_mengajar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mengajar' => $row->id_mengajar,
		'mapel_id' => $row->mapel_id,
		'kelas_id' => $row->kelas_id,
		'asatid_id' => $row->asatid_id,
		'tahun_id' => $row->tahun_id,
	    );
            $this->load->view('m_mengajar/m_mengajar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_mengajar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_mengajar/create_action'),
    	    'id_mengajar' => set_value('id_mengajar'),
    	    'mapel_id' => set_value('mapel_id'),
    	    'kelas_id' => set_value('kelas_id'),
    	    'asatid_id' => set_value('asatid_id'),
    	    'tahun_id' => set_value('tahun_id'),
	);
        $this->load->view('m_mengajar/m_mengajar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'mapel_id' => $this->input->post('mapel_id',TRUE),
		'kelas_id' => $this->input->post('kelas_id',TRUE),
		'asatid_id' => $this->input->post('asatid_id',TRUE),
		'tahun_id' => $this->input->post('tahun_id',TRUE),
	    );

            $this->M_mengajar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_mengajar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_mengajar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_mengajar/update_action'),
		'id_mengajar' => set_value('id_mengajar', $row->id_mengajar),
		'mapel_id' => set_value('mapel_id', $row->mapel_id),
		'kelas_id' => set_value('kelas_id', $row->kelas_id),
		'asatid_id' => set_value('asatid_id', $row->asatid_id),
		'tahun_id' => set_value('tahun_id', $row->tahun_id),
	    );
            $this->load->view('m_mengajar/m_mengajar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_mengajar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mengajar', TRUE));
        } else {
            $data = array(
		'mapel_id' => $this->input->post('mapel_id',TRUE),
		'kelas_id' => $this->input->post('kelas_id',TRUE),
		'asatid_id' => $this->input->post('asatid_id',TRUE),
		'tahun_id' => $this->input->post('tahun_id',TRUE),
	    );

            $this->M_mengajar_model->update($this->input->post('id_mengajar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_mengajar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_mengajar_model->get_by_id($id);

        if ($row) {
            $this->M_mengajar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_mengajar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_mengajar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('mapel_id', 'mapel id', 'trim|required');
	$this->form_validation->set_rules('kelas_id', 'kelas id', 'trim|required');
	$this->form_validation->set_rules('asatid_id', 'asatid id', 'trim|required');
	$this->form_validation->set_rules('tahun_id', 'tahun id', 'trim|required');

	$this->form_validation->set_rules('id_mengajar', 'id_mengajar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "m_mengajar.xls";
        $judul = "m_mengajar";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Mapel Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Asatid Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Id");

	foreach ($this->M_mengajar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->mapel_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kelas_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asatid_id);
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
        header("Content-Disposition: attachment;Filename=m_mengajar.doc");

        $data = array(
            'm_mengajar_data' => $this->M_mengajar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('m_mengajar/m_mengajar_doc',$data);
    }

}
