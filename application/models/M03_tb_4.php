<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_4 extends CI_Model
{
    private $_table = "tb-4";

    public $jenis_penggunaan;

    public $upps_ts_2;
    public $upps_ts_1;
    public $upps_ts;
    public $upps_ts_rata;
    
    public $ps_ts_2;
    public $ps_ts_1;
    public $ps_ts;
    public $ps_ts_rata;

    public function rules(){
        return [
            ['field' => 'txt_jenis_penggunaan',
            'label' => 'Jenis Penggunaan',
            'rules' => 'required'],

            ['field' => 'txt_upps_ts_2',
            'label' => 'Unit Pengelola Program Studi (Rupiah)',
            'rules' => 'required|numeric'],
 
            ['field' => 'txt_upps_ts_1',
            'label' => 'Unit Pengelola Program Studi (Rupiah)',
            'rules' => 'required|numeric'],
 
            ['field' => 'txt_upps_ts',
            'label' => 'Unit Pengelola Program Studi (Rupiah)',
            'rules' => 'required|numeric'],
 
            ['field' => 'txt_upps_ts_rata',
            'label' => 'Unit Pengelola Program Studi (Rupiah)',
            'rules' => 'required|numeric'],

            ['field' => 'txt_ps_ts_2',
            'label' => 'Program Studi (Rupiah)',
            'rules' => 'required|numeric'],

            ['field' => 'txt_ps_ts_1',
            'label' => 'Program Studi (Rupiah)',
            'rules' => 'required|numeric'],
            
            ['field' => 'txt_ps_ts',
            'label' => 'Program Studi (Rupiah)',
            'rules' => 'required|numeric'],
            
            ['field' => 'txt_ps_ts_rata',
            'label' => 'Program Studi (Rupiah)',
            'rules' => 'required|numeric'],


            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->jenis_penggunaan = $post["txt_jenis_penggunaan"];
        $this->upps_ts_2 = $post["txt_upps_ts_2"];
        $this->upps_ts_1 = $post["txt_upps_ts_1"];
        $this->upps_ts = $post["txt_upps_ts"];
        $this->upps_ts_rata = $post["txt_upps_ts_rata"];
        $this->ps_ts_2 = $post["txt_ps_ts_2"];
        $this->ps_ts_1 = $post["txt_ps_ts_1"];
        $this->ps_ts = $post["txt_ps_ts"];
        $this->ps_ts_rata = $post["txt_ps_ts_rata"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->jenis_penggunaan = $post["txt_jenis_penggunaan"];
        $this->upps_ts_2 = $post["txt_upps_ts_2"];
        $this->upps_ts_1 = $post["txt_upps_ts_1"];
        $this->upps_ts = $post["txt_upps_ts"];
        $this->upps_ts_rata = $post["txt_upps_ts_rata"];
        $this->ps_ts_2 = $post["txt_ps_ts_2"];
        $this->ps_ts_1 = $post["txt_ps_ts_1"];
        $this->ps_ts = $post["txt_ps_ts"];
        $this->ps_ts_rata = $post["txt_ps_ts_rata"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}