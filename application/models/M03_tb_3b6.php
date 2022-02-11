<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b6 extends CI_Model
{
    private $_table = "tb-3b6";

    public $nama_dosen;
    public $nama_produk_jasa;
    public $deskripsi_produk_jasa;
    public $bukti;
    public $tahun;

    public function rules()
    {
        return [
            ['field' => 'txt_nama_dosen',
            'label' => 'Nama Dosen',
            'rules' => 'required'],

            ['field' => 'txt_nama_produk_jasa',
            'label' => 'Nama Produk dan Jasa',
            'rules' => 'required'],

            ['field' => 'txt_deskripsi_produk_jasa',
            'label' => 'Deskripsi Produk dan Jasa',
            'rules' => 'required'],

            ['field' => 'txt_bukti',
            'label' => 'Bukti',
            'rules' => 'required'],

            ['field' => 'txt_tahun',
            'label' => 'Tahun',
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
        $this->nidn = $post["txt_nama_dosen"];
        $this->nama_dosen = $post["txt_nama_dosen_asli"];
        $this->nama_produk_jasa = $post["txt_nama_produk_jasa"];
        $this->deskripsi_produk_jasa = $post["txt_deskripsi_produk_jasa"];
        $this->bukti = $post["txt_bukti"];
        $this->tahun = $post["txt_tahun"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nidn = $post["txt_nama_dosen"];
        $this->nama_dosen = $post["txt_nama_dosen_asli"];
        $this->nama_produk_jasa = $post["txt_nama_produk_jasa"];
        $this->deskripsi_produk_jasa = $post["txt_deskripsi_produk_jasa"];
        $this->bukti = $post["txt_bukti"];
        $this->tahun = $post["txt_tahun"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}