<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: V03_L03Dosen.php
| Fungsi Program		: Melihat Data Dosen
| Penempatan Program	: Views
| Tanggal Programming	: Bandung, 9 November 2021 
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: idem
| -----------------------------------------------------------------------
*/ ?>
<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/css_cetakdata01.css') ?>" />
</head>
<body>
   <Center>           
   <table id="gradient-style">
     <thead>
       <tr>        
		 <th width="25"><font color="Red"><B>No.</B></td>
         <th><font color="Red"><B>KODE <bR/>PRODI</B></td>
         <th><font color="Red"><B>NIDN</B></td>
		 <th><font color="Red"><B>NAMA DOSEN</B></td>
         <th><font color="Red"><B>JABATAN</B></font></td>
		 <th><div align='center'><font color="Red"><B>NOMOR HP-1</B></font></td>
		 <th><div align='center'><font color="Red"><B>NOMOR HP-2</B></font></td> 
		 <th><font color="Red"><B>E-MAIL</B></font></td>
       </tr>
     </thead>
	 
   <tbody>
    <?php $no = 0;  $hawalz = 0;
     
	 foreach($tb_04dosenumbx as $u)
      { $no++;
        /* if (($no >= $hawalz) and ($no <= $hakhir)) */ { ?>
		 <tr>
	     <td><div align='right'><?php  echo $no."."          ?></div></td>
         <td><div align='left'><?php   echo $u->id_kodeprodi ?></div></td>
		 <td><div align='left'><?php   echo $u->id_nidn      ?></div></td>
		 <td><div align='left'><?php   echo $u->nama_dosen   ?></div></td>
		 <td><div align='left'><?php   echo $u->jabatan      ?></div></td>		
         <td><div align='center'><?php echo $u->no_hp1       ?></div></td>
		 <td><div align='center'><?php echo $u->no_hp2       ?></div></td>
		 <td><div align='left'><?php echo $u->email          ?></div></td>
		</tr>
	  <?php }}  ?>
</table>
</body>
</html>