<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b42 extends CI_Model
{
    private $_table = "tb-3b4-2";

    public $jenis_publikasi;
    public $jml_judul_TS_2;
    public $jml_judul_TS_1;
    public $jml_judul_TS;
    public $jumlah;

    public function rules()
    {
        return [
            ['field' => 'txt_jenis_publikasi',
            'label' => 'Sumber Pembiayaan',
            'rules' => 'required'],

            ['field' => 'txt_jml_judul_TS_2',
            'label' => 'Jumlah Judul',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jml_judul_TS_1',
            'label' => 'Jumlah Judul',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jml_judul_TS',
            'label' => 'Jumlah Judul',
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
        $this->jenis_publikasi = $post["txt_jenis_publikasi"];
        $this->jml_judul_TS_2 = $post["txt_jml_judul_TS_2"];
        $this->jml_judul_TS_1 = $post["txt_jml_judul_TS_1"];
        $this->jml_judul_TS = $post["txt_jml_judul_TS"];
        $this->jumlah = $post["txt_jumlah"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->jenis_publikasi = $post["txt_jenis_publikasi"];
        $this->jml_judul_TS_2 = $post["txt_jml_judul_TS_2"];
        $this->jml_judul_TS_1 = $post["txt_jml_judul_TS_1"];
        $this->jml_judul_TS = $post["txt_jml_judul_TS"];
        $this->jumlah = $post["txt_jumlah"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}