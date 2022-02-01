<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b5 extends CI_Model
{
    private $_table = "tb-3b5";

    public $nama_dosen;
    public $jml_artikel_sitasi;
    public $jumlah_sitasi;

    public function rules()
    {
        return [
            ['field' => 'txt_nama_dosen',
            'label' => 'Nama Dosen',
            'rules' => 'required'],

            ['field' => 'txt_jml_artikel_sitasi',
            'label' => 'Jumlah Artikel',
            'rules' => 'required|numeric'],

            ['field' => 'txt_jumlah_sitasi',
            'label' => 'Jumlah Sitasi',
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
        $this->nama_dosen = $post["txt_nama_dosen"];
        $this->jml_artikel_sitasi = $post["txt_jml_artikel_sitasi"];
        $this->jumlah_sitasi = $post["txt_jumlah_sitasi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama_dosen = $post["txt_nama_dosen"];
        $this->jml_artikel_sitasi = $post["txt_jml_artikel_sitasi"];
        $this->jumlah_sitasi = $post["txt_jumlah_sitasi"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}