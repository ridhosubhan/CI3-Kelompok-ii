<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C03_tb_3b6 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M03_tb_3b6");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tb_3b6"] = $this->M03_tb_3b6->getAll();
        $this->load->view("V03_tb-3b1_3b6/V03_tb_3b6_list", $data);
    }

    public function add()
    {
        $M03_tb_3b6 = $this->M03_tb_3b6;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b6->rules());

        if ($validation->run()) {
            $M03_tb_3b6->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["query_data_fakultasx"] = $this->db->get('tb_02fakultas');
        $this->load->view("V03_tb-3b1_3b6/V03_tb_3b6_add", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('V03_tb-3b1_3b6/V03_tb_3b6_list');
       
        $M03_tb_3b6 = $this->M03_tb_3b6;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b6->rules());

        if ($validation->run()) {
            $M03_tb_3b6->update();
            $this->session->set_flashdata('success', 'Berhasil edit');
        }

        $data["tb_3b6"] = $M03_tb_3b6->getById($id);
        if (!$data["tb_3b6"]) show_404();
        
        $this->load->view("V03_tb-3b1_3b6/V03_tb_3b6_edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M03_tb_3b6->delete($id)) {
            redirect(site_url('/C03_tb_3b6/index'));
        }
    }

    public function print(){
        $data["tb_3b6"] = $this->M03_tb_3b6->getAll();
        $this->load->view("V03_tb-3b1_3b6/V03_tb_3b6_print", $data);
    }
}