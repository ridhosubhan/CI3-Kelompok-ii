<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M03_tb_3b1 extends CI_Model
{
    private $_table = "tb-3b1";

    // public $id_M03_tb_3b1;
    public $nama_dosen;
    public $bidang_keahlian;
    public $rekognisi_dan_bukti_pendukung;
    public $tingkat_wilayah;
    public $tingkat_nasional;
    public $tingkat_internasional;
    public $tahun;

    public function rules()
    {
        return [
            ['field' => 'txt_nama_dosen',
            'label' => 'Nama Dosen',
            'rules' => 'required'],

            ['field' => 'txt_bidang_keahlian',
            'label' => 'Bidang Keahlian',
            'rules' => 'required'],

            ['field' => 'txt_rekognisi_dan_bukti_pendukung',
            'label' => 'Bukti Pendukung',
            'rules' => 'required'],

            ['field' => 'txt_tingkat_wilayah',
            'label' => 'Tingkat Wilayah',
            'rules' => 'required'],

            ['field' => 'txt_tingkat_nasional',
            'label' => 'Tingkat Nasional',
            'rules' => 'required'],

            ['field' => 'txt_tingkat_internasional',
            'label' => 'Tingkat Internasional',
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
        $this->nama_dosen = $post["txt_nama_dosen"];
        $this->bidang_keahlian = $post["txt_bidang_keahlian"];
        $this->rekognisi_dan_bukti_pendukung = $post["txt_rekognisi_dan_bukti_pendukung"];
        $this->tingkat_wilayah = $post["txt_tingkat_wilayah"];
        $this->tingkat_nasional = $post["txt_tingkat_nasional"];
        $this->tingkat_internasional = $post["txt_tingkat_internasional"];
        $this->tahun = $post["txt_tahun"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama_dosen = $post["txt_nama_dosen"];
        $this->bidang_keahlian = $post["txt_bidang_keahlian"];
        $this->rekognisi_dan_bukti_pendukung = $post["txt_rekognisi_dan_bukti_pendukung"];
        $this->tingkat_wilayah = $post["txt_tingkat_wilayah"];
        $this->tingkat_nasional = $post["txt_tingkat_nasional"];
        $this->tingkat_internasional = $post["txt_tingkat_internasional"];
        $this->tahun = $post["txt_tahun"];
        return $this->db->update($this->_table, $this, array('id' => $post["txt_id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}