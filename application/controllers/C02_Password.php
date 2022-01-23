<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -----------------------------------------------------------------------
| Nama Program		    : C02_Password.php
| Fungsi Program		: Cobtrollers SI_Travel
| Penempatan Program	: Controllers
| Tanggal Programming	: Bandung, 29 Desember 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Kelompok
| -----------------------------------------------------------------------
*/

 class C02_Password extends CI_Controller
  { function __construct()
    { parent::__construct();
	  	$this->load->model('M01_Password');
		$this->load->model('M02_Akademik'); 		
		$this->load->helper(array('file','form','url','html'));	}
   	
	public function ambil_data(){
	   $modul = $this->input->post('modul'); $id  = $this->input->post('id'); 
       if($modul=="modul-prodi"){echo $this->M02_Akademik->aktifkan_tabel_prodi($id);}	     
	      else if($modul=="modul-dosampu"){echo $this->M02_Akademik->aktifkan_tabel_dosampu($id); }			   
	   } 	 
	   
	public function Proses_Entrydatapassword_1()
	 { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password');
	   $data['data_fakultasx'] = $this->M02_Akademik->aktifkan_tb_02fakultas('tb_02fakultas');
	   $this->load->view('V01_Login/V0101_KopLem');
	   $this->load->view('V02_Password/V0201_TDPassword', $data ); 
	   $this->load->view('V01_Login/V0103_Waktu'); } 
	
	public function Proses_RalatDataPassword()
	  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();		             
		$this->load->view('V01_Login/V0101_KopLem'); 		        
		$this->load->view('V02_Password/V0202_RHPassword',$data); 
		$this->load->view('V01_Login/V0103_Waktu'); $nanz = 1; }
    
	public function Proses_LihatDataPassword()
	  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();		             
		$data['jdlc1'] = "DAFTAR NAMA DOSEN YAND SUDAH MEMBUAT PASSWORD"; $data['akses'] ="01";
	    $this->load->view('V01_Login/V0106_JudulKopLC', $data );
	    $this->load->view('V02_Password/V0203_LCPassword',$data); $nanz=1; }
	
	public function Proses_CariDataPassword()
	  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
		$this->load->view('V01_Login/V0101_KopLem');
        $this->load->view('V02_Password/V0204_CRPassword',$data); $nanz=1;
		$this->load->view('V01_Login/V0103_Waktu');}
	
	public function Proses_CetakDataPassword()
	  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
		$this->load->view('V01_Login/V0101_KopLem');
        $this->load->view('V02_Password/V0204_CRPassword',$data); $nanz=1;
		$this->load->view('V01_Login/V0103_Waktu');}
		
	public function proses_Entrydatapassword_2() 
	 { $menuxz = substr($this->input->post('menu_password'),0,1);
	  if (!empty($menuxz))
	   { $id_passwordx   = $this->input->post('id_password');
         $nanz           = '0';				   
	     $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
		 
        if (($menuxz ==="2") OR ($menuxz ==="3"))                   
		  { $this->load->view('V01_Login/V0101_KopLem'); 		        
		    $this->load->view('V02_Password/V0202_RHPassword',$data); 
		    $this->load->view('V01_Login/V0103_Waktu'); $nanz = 1; }
        
        if ($menuxz ==="4")                    
		  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
	        $data['jdlc1'] = "DAFTAR NAMA DOSEN YAND SUDAH MEMBUAT PASSWORD"; $data['akses'] ="01";
	        $this->load->view('V01_Login/V0106_JudulKopLC', $data );
	        $this->load->view('V02_Password/V0203_LCPassword',$data); $nanz=1; }

        if ($menuxz ==="5")                    
		  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
		    $this->load->view('V01_Login/V0101_KopLem');
            $this->load->view('V02_Password/V0204_CRPassword',$data); $nanz=1;
			$this->load->view('V01_Login/V0103_Waktu');}
		
        if ($menuxz ==="6")                    
			{ $data['data_fakultasx'] = $this->M01_Password->aktifkan_tabel_fakultas('');
		      $data['data_prodix']    = $this->M01_Password->aktifkan_tabel_prodi('');
		      $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result();
		      $this->load->view('V01_Login/V0101_KopLem');
              $this->load->view('V02_login/V0204_CRPassword',$data); $nanz=1; }
		
		if (!empty($id_passwordx))  // Tangkap Data dari Form V0202E_BuatPassword 
		  { $kd_fak        = $this->input->post('select_fak');       
		    $kd_prodi      = $this->input->post('select_prodi');    
		    $nidnx         = $this->input->post('select_desampu'); 
		    $password_md5  = md5($id_passwordx);                  
		    $usernamex     = $this->input->post('username'); 
			
            if (!empty($nidnx))     // Pencarian Kode Jabatan
		       { $this->db->order_by('id_nidn asc');  
			     $dosenf = $this->db->get_where('tb_04dosenumb',array('id_nidn'=>$nidnx));
		         foreach ($dosenf->result_array() as $nan ){
				    $jabatanx  = "";
				    $jabatanx .= "$nan[jabatan]"; }				       
		        } 			
		  
			if ($menuxz ==="1")                    
			  { $simpan_password   = array(
			     'id_fakultas '    =>$kd_fak, 
				 'id_prodi'        =>$kd_prodi,
				 'nidn_dosen'      =>$nidnx,
				 'id_password'     =>$password_md5,
				 'username'        =>$usernamex,
				 'jabatan'             =>$jabatanx);
				 
			    $caripss = array('id_password' =>$password_md5);
				$this->M01_Password->insert_datapassword($simpan_password,$caripss); $nanz="1"; 
				
                if ($nanz ==="1")			
                  { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password');
	                $data['data_fakultasx'] = $this->M02_Akademik->aktifkan_tb_02fakultas('tb_02fakultas');
	                $this->load->view('V01_Login/V0101_KopLem');
	                $this->load->view('V02_Password/V0201_TDPassword', $data ); 
	                $this->load->view('V01_Login/V0103_Waktu'); }	
			  }		
	       }
	    }		   
      }	
	 
	public function Proses_Entrydatapassword_3()
	  { $Prosesx = $this->input->post('menu_ralathapus'); 
	    $Prosesz = substr($Prosesx,0,1); $nanz = "0";
		
		if (!empty($Prosesz)) 
		 {  $id_passwordz  = md5($this->input->post('id_password')); // Primary Key
		    $nanz = "1";				
			$simpan_password = array(
			  'id_password'  =>$id_passwordz,                  
			  'id_fakultas'  =>$this->input->post('fakx'),
			  'id_prodi'     =>$this->input->post('prodi'), 
			  'nidn_dosen'   =>$this->input->post('nidn'),			  
			  'username'     =>$this->input->post('username'),
			  'jabatan'      =>$this->input->post('jabx'),);			                			  
			  $carirh = array('id_password' =>$id_passwordz);
		  } 
		 		  
		  if ($Prosesz =="1")
			  { $this->M01_Password->update_datapassword($simpan_password,$carirh);  } 
		  
          if ($Prosesz =="2")
		      { $this->M01_Password->delete_datapassword($carirh); } 
          
		  if ($nanz === "1")
		    { $data['data_passwordx'] = $this->M01_Password->aktifkan_tb_01password('tb_01password')->result(); 
		      $this->load->view('V01_Login/V0101_KopLem');		        
		      $this->load->view('V02_Password/V0202_RHPassword',$data); 
			  $this->load->view('V01_Login/V0103_Waktu'); }              			  
	   }
    
    public function proses_pencarian_datapassword()
	  { $rg =  $this->input->post('RadioGroup'); 
	    $cari_password  = $this->input->post('kata_kunci'); 	    
	    $ketegori       = $this->input->post('kategori');
		if (!empty($rg))
		  { if ($rg ==="semua")
		     { $data['data_passwordx']  = $this->M01_Password->cari_password_semua($cari_password)->result();}
	        if ($rg ==="kategori_field")
		     { $data['data_passwordx']  = $this->M01_Password->cari_password_kategori($ketegori, $cari_password)->result();}
	        if ($rg ==="uniq_data")
		      { $data['data_passwordx'] = $this->M01_Password->cari_password_uniqdata($ketegori, $cari_password)->result();}	        
	        $data['jdlc1'] = "DAFTAR NAMA DOSEN YAND SUDAH MEMBUAT PASSWORD"; $data['akses'] ="01";
	        $this->load->view('V01_Login/V0106_JudulKopLC', $data );
	        $this->load->view('V02_Password/V0203_LCPassword',$data); $nanz=1;
          }
	  }		  
 }
 ?>	
