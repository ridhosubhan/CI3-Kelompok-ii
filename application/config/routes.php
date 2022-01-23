<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -----------------------------------------------------------------------------
| Nama Program	      : routes.php
| Fungsi Program	  : Mengakses Database 
| Tanggal Programming : Bandung, 29 November 2021
| Sistem Analist	  : Nana Karyana Kurdi, SE., M.Kom.
| Programmer		  : nama mahasiswa
| -----------------------------------------------------------------------------
*/
 defined('BASEPATH') OR exit('No direct script access allowed');
 $route['default_controller']   = 'C01_Login'; 
 $route['(:any)']               = 'views/V01_Login/KELOMPOK-I/$1';
 $route['404_override']         = '';
 $route['translate_uri_dashes'] = FALSE;
?>
