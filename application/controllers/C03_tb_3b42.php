<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C03_tb_3b42 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M03_tb_3b42");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tb_3b42"] = $this->M03_tb_3b42->getAll();
        $this->load->view("V03_tb-3b2_3b42/V03_tb_3b42_list", $data);
    }

    public function add()
    {
        $M03_tb_3b42 = $this->M03_tb_3b42;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b42->rules());

        if ($validation->run()) {
            $M03_tb_3b42->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("V03_tb-3b2_3b42/V03_tb_3b42_add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('V03_tb-3b2_3b42/V03_tb_3b42_list');
       
        $M03_tb_3b42 = $this->M03_tb_3b42;
        $validation = $this->form_validation;
        $validation->set_rules($M03_tb_3b42->rules());

        if ($validation->run()) {
            $M03_tb_3b42->update();
            $this->session->set_flashdata('success', 'Berhasil edit');
        }

        $data["tb_3b42"] = $M03_tb_3b42->getById($id);
        if (!$data["tb_3b42"]) show_404();
        
        $this->load->view("V03_tb-3b2_3b42/V03_tb_3b42_edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M03_tb_3b42->delete($id)) {
            redirect(site_url('/C03_tb_3b42/index'));
        }
    }
}