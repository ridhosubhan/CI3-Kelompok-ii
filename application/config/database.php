<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -----------------------------------------------------------------------------
| Nama Program	      : database.php
| Fungsi Program	  : Mengakses Database 
| Tanggal Programming : Bandung, 29 Desember 2021
| Sistem Analist	  : Nana Karyana Kurdi, SE., M.Kom.
| Programmer		  : nama mahsiswa 
| -----------------------------------------------------------------------------
*/

defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',   // tidak boleh kosong harus diisi
	'password' => '',
	'database' => 'kelompok-ii',  // Disesuai dengan database yang kita buat
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt'  => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
?>
