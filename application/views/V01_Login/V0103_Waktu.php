<?php
/*
| ---------------------------------------------------------------------------
| Nama Program	  : V03_Waktu.php
| Lokasi Program	  : “\xampp\htdocs\
| Fungsi Program	  : Mengakses Hari, dan Jam 
| Tanggal Programming: Bandung, 9 November 2021
| Sistem Analist	  : Nana Karyana Kurdi, SE., M.Kom.
| Programmer		  : nama Programmer
| ---------------------------------------------------------------------------
*/

?>

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
	<style type="text/css">
	   ::selection { background-color: #E13300; color: white; }
	   ::-moz-selection { background-color: #E13300; color: white; }
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			var waktu = new Date();
			    var namaHari  = new Array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
				var hari      = namaHari[waktu.getDay()];
				var namaBulan = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli',
				'Agustus','September','Oktober','November','Desember');
				var tanggal   = waktu.getDate();
				var bulan     = namaBulan[waktu.getMonth()];
				var tahun     = waktu.getFullYear();
				$('.tanggal').text('Bandung, '+hari+' '+tanggal+' '+bulan+' '+tahun);
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				var waktu = new Date();
				var jam   = waktu.getHours()<10?"0"+waktu.getHours():""+waktu.getHours();
				var menit = waktu.getMinutes()<10?"0"+waktu.getMinutes():""+waktu.getMinutes();
				var detik = waktu.getSeconds()<10?"0"+waktu.getSeconds():""+waktu.getSeconds();
				$('.jam').text('Pukul: '+jam+':'+menit+':'+detik+' WIB');
			},1000);
		});
	</script>
</head>

<body>
  <Center>
  <table width="1236" border="0">
   <tr>
   <th width="493" scope="col"><div align="left"><font Color ="Blue"><b>
      <div class="tanggal"></div></b></font></th>
      <th width="290" scope="col"><div align="right"><font Color ="Blue"><b>
	  <div class="jam"></div></b></font></div></th>
    </tr>
  </table>
  <Center>
</body>
