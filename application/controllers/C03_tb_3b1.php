<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C03_tb_3b1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M03_tb_3b1");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tb_3b1"] = $this->M03_tb_3b1->getAll();
        $this->load->view("V03_tb-3b1_3b41/V03_tb_3b1_list", $data);
    }

    public function add()
    {
        
        $M03_tb_3b1 = $this->M03_tb_3b1;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b1->rules());

        if ($validation->run()) {
            $M03_tb_3b1->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["query_data_fakultasx"] = $this->db->get('tb_02fakultas');
        $this->load->view("V03_tb-3b1_3b41/V03_tb_3b1_add", $data);
    }

    public function prodi($id){   
        $id_fak = $this->input->post('id');

        $M03_tb_3b1 = $this->M03_tb_3b1;
        $data = $M03_tb_3b1->getProdi($id);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('V03_tb-3b1_3b41/V03_tb_3b1_list');
       
        $M03_tb_3b1 = $this->M03_tb_3b1;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b1->rules());

        if ($validation->run()) {
            $M03_tb_3b1->update();
            $this->session->set_flashdata('success', 'Berhasil edit');
        }

        $data["tb_3b1"] = $M03_tb_3b1->getById($id);
        if (!$data["tb_3b1"]) show_404();
        
        $this->load->view("V03_tb-3b1_3b41/V03_tb_3b1_edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M03_tb_3b1->delete($id)) {
            redirect(site_url('/C03_tb_3b1/index'));
        }
    }

    public function print(){
        $data["tb_3b1"] = $this->M03_tb_3b1->getAll();


        $this->load->view("V03_tb-3b1_3b41/V03_tb_3b1_print", $data);
    }
}