<?php
/*
| -----------------------------------------------------------------------
| Nama Program		: M01_Password.php
| Fungsi Program		: Models Login SIMPADU_UMB
| Penempatan Program	: Models
| Tanggal Programming	: Bandung, 29 November 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Kelompok
| -----------------------------------------------------------------------
*/
class M01_Password extends CI_Model

  { public function aktifkan_tb_01password($tabelz) 
      {if (!empty($tabelz)){ $this->db->order_by('id_fakultas ASC, id_prodi ASC'); 
	     return $password = $this->db->get($tabelz); }}			 
	
	public function cari_password($cek_passuserz)
	  { if (!empty($cek_passuserz)){ 
			$query = $this->db->get_where('tb_01password', array('id_password'=>$cek_passuserz['id_password']), 1);
			if ($query->num_rows() > 0){
				return true;}} return false; }
	
    public function get_data($password){ 
	  if (!empty($password)){
		  $query = $this->db->get_where('tb_01password', array('id_password'=>$password['id_password']), 1);
		  return $query->result();}
	     }
	
	// Proses Entry Data Password
	
	public function insert_datapassword($simpan_data,$tambah) // Simpada Data Password
      { if (!empty($tambah)){ $this->db->where($tambah);
	        return $this->db->insert('tb_01password',$simpan_data);} }

	public function update_datapassword($ralat_data, $ralat) // Ralat data di tabel
	  { if (!empty($ralat)){ $this->db->where($ralat); 
	        return $this->db->update('tb_01password',$ralat_data);}}    

    public function delete_datapassword($hapusz)
	  { if (!empty($hapusz)){$this->db->where($hapusz);
	        return $this->db->delete('tb_01password');} } // Hapus data
	
	 public function cari_password_semua($kata_kunciz)  // Cari di semua field
	  { if (!empty($kata_kunciz)){ 
		    $this->db->from("tb_01password");
			$this->db->like('id_fakultas',$kata_kunciz);
			$this->db->or_like('id_prodi',$kata_kunciz);
			$this->db->or_like('nidn_dosen',$kata_kunciz);
		    $this->db->or_like('Username',$kata_kunciz);
		    return $this->db->get(); }   // Mengeksekusi semua perintah di atas
        }

    public function cari_password_kategori($kategoriz,$kata_kunciz)
	  { if (!empty($kategoriz)){
	        $this->db->from("tb_01password");
	   	    $this->db->like($kategoriz,$kata_kunciz);
		    return $this->db->get(); }
	    }

	public function cari_password_uniqdata($kategoriz,$kata_kunciz)
      { if (!empty($kategoriz))
		    { $this->db->from("tb_01password");
              $this->db->where($kategoriz,$kata_kunciz);
		      return $this->db->get(); }
	  }
	
	public function cari_password_kategoriz($kategori,$kata_kunci)
	  { if (!empty($kategori)){
	        $this->db->from("tb_01password");
	   	    $this->db->like($kategori,$kata_kunci);
		    return $this->db->get(); }
	    }

	public function cari_password_uniqdataz($kategori,$kata_kunci)
      { if (!empty($kategori))
		    { $this->db->from("tb_01password");
              $this->db->where($kategori,$kata_kunci);
		      return $this->db->get(); }
	  }

  }
?>  
