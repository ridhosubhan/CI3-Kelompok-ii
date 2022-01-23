<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: M02_Akademis.php
| Fungsi Program		: Models Login SIMPADU_UMB
| Penempatan Program	: Models
| Tanggal Programming	: Bandung, 29 Desember 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Dieka Nugraha Karyana, S.Kom
| -----------------------------------------------------------------------
*/
class M02_Akademik extends CI_Model

 { public function aktifkan_tb_02fakultas($tabelz) 
    {if (!empty($tabelz)){ $this->db->order_by('id_fakultas'); 
	     return $fakultas = $this->db->get($tabelz); }}
    
   public function aktifkan_tb_03prodi($tabelz) 
    {if (!empty($tabelz)){ $this->db->order_by('id_kodeprodi'); 
	     return $prodi = $this->db->get($tabelz); }}	

   public function aktifkan_tb_04dosenumb($tabelz) 
    {if (!empty($tabelz)){ $this->db->order_by('id_kodeprodi ASC, nama_dosen ASC'); 
	     return $dosen = $this->db->get($tabelz); }}
   
   public function aktifkan_tb02_Carifakultas($fakultas,$kd_fakz)
    { if (!empty($kd_fakz)){ 
	    $this->db->order_by('id_fakultas','ASC');
	    $query = $this->db->get_where($fakultas,array('id_fakultas'=>$kd_fakz));
	  return $query->result();} }
   
   public function aktifkan_tb03_Carifaprodi($tb_03prodi,$kd_prodiz)
    {if (!empty($kd_prodiz)){
	   $this->db->order_by('id_kodeprodi','ASC');
       $query = $this->db->get_where($tb_03prodi,array('id_kodeprodi'=>$kd_prodiz));
	   return $query->result();		
	 }}
   
   public function aktifkan_tb04_Caridosenumb($tb_dosen,$kd_prodiz)
    {if (!empty($kd_prodiz)){ 
	   $this->db->order_by('id_kodeprodi ASC, nama_dosen ASC');
       $query = $this->db->get_where($tb_dosen,array('id_kodeprodi'=>$kd_prodiz));
	   return $query->result();
	 }}
	 
   function aktifkan_tabel_prodi($provId){
     $tb_prodi ="<option value='0'>--pilih--</pilih>";
     $this->db->order_by('id_kodeprodi','ASC');
     $prodif = $this->db->get_where('tb_03prodi',array('id_kodefakultas'=>$provId));
     foreach ($prodif->result_array() as $prodif ){
      $tb_prodi.= "<option value='$prodif[id_kodeprodi]'>$prodif[id_kodeprodi] - $prodif[nama_prodi]</option>"; }
      return $tb_prodi; }
   
   function aktifkan_tabel_dosampu($kabId){
     $tb_dosampu ="<option value='0'>--pilih--</pilih>"; 
     $this->db->order_by('nama_dosen','ASC');
     $dosampuf = $this->db->get_where('tb_04dosenumb',array('id_kodeprodi'=>$kabId));
     foreach ($dosampuf->result_array() as $data ){
       $tb_dosampu.= "<option value='$data[id_nidn]'>$data[id_nidn] - $data[nama_dosen]</option>"; }
     return $tb_dosampu; } 
 }	 
 ?>