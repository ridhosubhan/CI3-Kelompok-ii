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

 class C01_Login extends CI_Controller
  { function __construct()
    { parent::__construct();
        $this->load->model('M01_Password'); 
        $this->load->model('M02_Akademik'); 			
		$this->load->helper(array('file','form','url','html'));			
   	}
   	
    public function index()  // Mengaktifkan Form Lagin
	 { $data['tb01_passwordz'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
       $this->load->view('V01_Login/V0101_KopLem');                           
       $this->load->view('V01_Login/V0102_FormLogin', $data);       
	   $this->load->view('V01_Login/V0103_Waktu'); }  
		
	public function pengecekan_password()  // Cek Password
	 { $id_password  = $this->input->post('id_password'); 
	   $cek_passuser = array('id_password'=>md5($id_password)); 	        	
	   if ($this->M01_Password->cari_password($cek_passuser)){
		  $response['data'] = $this->M01_Password->get_data($cek_passuser)[0];
		  $response['teks'] = 'Ralat/Hapus';
		   } else { $response['teks'] = 'Tambah: '; }
	           $this->output->set_status_header(200)
					->set_content_type('application/json')
					->set_output(json_encode($response)); 
	  }
	  
    public function lanjut_kemenuutama_siakreditasi()
     {$data['tb01_passwordz'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
	  $this->load->view('V01_Login/V0101_KopLem');
      $this->load->view('V01_Login/V0104_MenuKelopok1', $data); // Sesuaikan dengan nama kelompok Anda 
	  $this->load->view('V01_Login/V0103_Waktu');}	
  }
 ?>	
