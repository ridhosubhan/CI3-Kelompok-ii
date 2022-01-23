<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
/* 
| -----------------------------------------------------------------------
| Nama Program		    : autoload.php
| Fungsi Program		: Mendefinisikan Model
| Penempatan Program	: "/xampp/htdocs/KELOMPOK-I/application/config/"
| Tanggal Programming	: Bandung, 29 Desember 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: nama mahasiswa
| -----------------------------------------------------------------------  */
defined('BASEPATH') OR exit('No direct   access allowed');
   $autoload['packages']  = array();
   $autoload['libraries'] = array('database');
   $autoload['drivers']   = array();
   $autoload['helper']    = array('url','file','form','html');
   $autoload['config']    = array();
   $autoload['language']  = array(); 
   $autoload['model']     = array('M01_Password');
   $autoload['model']     = array('M02_Akademik');
   /* $autoload['model']     = array('M02_tb......');
      dan setrusnya
   */
?>    
