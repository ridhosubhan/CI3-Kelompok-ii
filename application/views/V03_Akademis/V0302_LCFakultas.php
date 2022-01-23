<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: V00_L00Fakultas.php
| Fungsi Program		: Melihat Data Fakultas
| Penempatan Program	: Views
| Tanggal Programming	: Bandung, 29 Desember 2021 
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
		 <th><font color="Red"><B>KODE <bR/>PTS</B></td>
         <th><font color="Red"><B>KODE <bR/>FAKULTAS</B></td>
         <th><font color="Red"><B>NAMA FAKULTAS</B></td>
         <th><div align='center'><font color="Red"><B>JENJANG</B></font></td>
		 <th><font color="Red"><B>NOMOR SK</B></font></td>
         <th><font color="Red"><B>TGL. SK</B></font></td>         
       </tr>
     </thead>
	</Center> 
   <tbody>
    <?php $no = 0;  $hawalz = 0;
      foreach($tb_02fakultas as $u)
      { $no++;
        /* if (($no >= $hawalz) and ($no <= $hakhir)) */ { ?>
		 <tr>
	     <td><div align='right'><?php  echo $no."."             ?></div></td>
         <td><div align='left'><?php   echo $u->kode_pts        ?></div></td>
		 <td><div align='left'><?php   echo $u->id_fakultas     ?></div></td>
		 <td><div align='left'><?php   echo $u->nama_fakultas   ?></div></td>
		 <td><div align='center'><?php echo $u->strata          ?></div></td>		
         <td><div align='left'><?php   echo $u->nomor_sk        ?></div></td>
		 <td><div align='left'><?php   echo $u->tgl_sk          ?></div></td>
		</tr>
	  <?php }}  ?>
   </table>
</body>
</html>