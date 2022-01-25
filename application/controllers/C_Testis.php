<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -----------------------------------------------------------------------
| Nama Program		: C01_Login.php
| Fungsi Program		: Mengontrol Sistem Informasi Anda
| Penempatan Program	: Controllers
| Tanggal Programming	: Bandung, 20 Januari 2022
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Kelompok
| -----------------------------------------------------------------------
*/

 class C_Testis extends CI_Controller{ 

    function __construct(){ 
        parent::__construct();
        $this->load->model('M01_Password'); 
        $this->load->model('M02_Akademik'); 			
		$this->load->helper(array('file','form','url','html'));			
   	}

    public function index(){ 
        $data['tb01_passwordz'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
        $this->load->view('V01_Login/V0101_KopLem');
        $this->load->view('testis/V_HeaderMenu', $data);                 
        $this->load->view('testis/indek');          
        $this->load->view('V01_Login/V0103_Waktu');               
    }  

}
 ?>	
