<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b2 extends CI_Model
{
    private $_table = "tb-3b2";

    public $sumber_pembiayaan;
    public $jml_judul_penelitian_TS_2;
    public $jml_judul_penelitian_TS_1;
    public $jml_judul_penelitian_TS;
    public $jumlah;

    public function rules()
    {
        return [
            ['field' => 'txt_sumber_pembiayaan',
            'label' => 'Sumber Pembiayaan',
            'rules' => 'required'],

            ['field' => 'txt_jml_judul_penelitian_TS_2',
            'label' => 'Jumlah Penelitian',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jml_judul_penelitian_TS_1',
            'label' => 'Jumlah Penelitian',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jml_judul_penelitian_TS',
            'label' => 'Jumlah Penelitian',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jumlah',
            'label' => 'Jumlah',
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
        $this->sumber_pembiayaan = $post["txt_sumber_pembiayaan"];
        $this->jml_judul_penelitian_TS_2 = $post["txt_jml_judul_penelitian_TS_2"];
        $this->jml_judul_penelitian_TS_1 = $post["txt_jml_judul_penelitian_TS_1"];
        $this->jml_judul_penelitian_TS = $post["txt_jml_judul_penelitian_TS"];
        $this->jumlah = $post["txt_jumlah"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->sumber_pembiayaan = $post["txt_sumber_pembiayaan"];
        $this->jml_judul_penelitian_TS_2 = $post["txt_jml_judul_penelitian_TS_2"];
        $this->jml_judul_penelitian_TS_1 = $post["txt_jml_judul_penelitian_TS_1"];
        $this->jml_judul_penelitian_TS = $post["txt_jml_judul_penelitian_TS"];
        $this->jumlah = $post["txt_jumlah"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}