<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b74 extends CI_Model
{
    private $_table = "tb-3b74";

    public $luaran_penelitian_pkm;
    public $tahun;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'txt_luaran_penelitian_dan_pkm',
            'label' => 'Luaran Penelitian dan PKM',
            'rules' => 'required'],

            ['field' => 'txt_tahun',
            'label' => 'Tahun',
            'rules' => 'required|numeric'],

            ['field' => 'txt_keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],

            
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
        $this->luaran_penelitian_pkm = $post["txt_luaran_penelitian_dan_pkm"];
        $this->tahun = $post["txt_tahun"];
        $this->keterangan = $post["txt_keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->luaran_penelitian_pkm = $post["txt_luaran_penelitian_dan_pkm"];
        $this->tahun = $post["txt_tahun"];
        $this->keterangan = $post["txt_keterangan"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}