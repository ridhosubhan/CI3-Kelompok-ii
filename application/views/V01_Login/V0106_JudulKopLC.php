<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: V0100_KopJudul.php
| Fungsi Program		: Menampilkan Judul Kop 
| Penempatan Program	: Views
| Tanggal Programming	: Bandung, 29 Desember 2021 
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Mahasiswa
| -----------------------------------------------------------------------
*/ ?>

<body>
   <Center>
   <?php
      $no = 1; $judl1 =""; $judl2 =""; $judl3 ="";  $cetak = 0 ; 
	  
      if ($akses =="01")
	    { $judul1 = $jdlc1; $judul2 =""; $judul3 = "UNIVERSITAS MUHAMMADIYAH BANDUNG"; $judul4 =""; }
			
	  if ($akses =="02")
	    { foreach ($tb_03prodix as $u) { $judul1 = $jdlc1;
	        $judul2 = "PROGRAM STUDI ".strtoupper($u->nama_prodi); }		    
	        foreach ($data_fakultasx as $u){ $judul3 = strtoupper($u->nama_fakultas); 
		           $judul4 ="UNIVERSITAS MUHAMMADIYAH BANDUNG"; } }
      
	  $judul5 = "Jalan Soerkarno-Hatta Nomor 752 Kelurahan Cipadung Kidul,";
	  $judul6 = "Kecamatan Panyileukan Kota Bandung (04614)";
	  
	  $tgl = date('d'); $bln = date('m'); $th = date('Y'); 
	  if ($bln =="01"){$blnz ="Januari";}  if ($bln =="02"){$blnz ="Pebruari";}  if ($bln =="03"){$blnz ="Maret";} 
	  if ($bln =="04"){$blnz ="April";}    if ($bln =="05"){$blnz ="Mei";}       if ($bln =="06"){$blnz ="Juni";} 
	  if ($bln =="07"){$blnz ="Juli";}     if ($bln =="08"){$blnz ="Agustus";}   if ($bln =="09"){$blnz ="September";} 
	  if ($bln =="10"){$blnz ="Oktober";}  if ($bln =="11"){$blnz ="November";}  if ($bln =="12"){$blnz ="Desember";} 
	  $tanggal = $tgl.'-'.$bln.'-'.$th; // Contoh 01 Januari 2022 Penulisannya: $tanggal = $tgl.'-'.$blnz.'-'.$th; 
	?>
  <Center>
  <form id="form1" name="form1" method="post" action="">
  <table width="1300" border="0 cellspacing="1" cellpadding="1">
    <tr>
      <td width="83" rowspan="4"><div align="center"><img src="<?php echo base_url(); ?>images/kopumbandung.jpg" width = 70 ></div></td>
      <td width="987"><div align="center"><B><font color="Blue"><?php echo $judul1; ?></font></B></div></td>
      <td width="100"><font color="Blue"><B>Tanggal Cetak</B></font></td>
      <td width="20"><div align="center">:</div></td>
      <td width="98"><font color="Blue"><B><?php echo $tanggal ?></B></font></td>
    </tr>
    <tr>
      <td><div align="center"><font color="Blue"><B><?php echo $judul2; ?></B></font></div></td>
      <td>SISPROG</td>
      <td><div align="center">:</div></td>
      <td>@NKK-363</td>
    </tr>
    <tr>
      <td><div align="center"><font color="Blue"><B><?php echo $judul3; ?></B></font></div></td>
      <td></td>
      <td>&nbsp;</td>
      <td><div align="Left"></div></td>	  
    </tr>
	<tr>
      <td><div align="center"><font color="Blue"><B><?php echo $judul4; ?></B></font></div></td>
      <td>&nbsp;</td>
      <td><div align="Left"></div></td>	  
    </tr>
	 <tr>
	  <td>&nbsp;</td>
	  <td><div align="center"><font color ="Red"><B><?php echo $judul5.' '.$judul6; ?></B></font></div></td>       
    </tr>    
</Center>
</html>