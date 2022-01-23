<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: V0203_LCPassword.php
| Fungsi Program		: Melihat Data prodi
| Penempatan Program	: Views
| Tanggal Programming	: Bandung, 2 Jabuari 2022 
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Mahasiswa
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
		 <th><font color="Red"><B>KODE <bR/>FAKULTAS</B></td>
         <th><font color="Red"><B>KODE <bR/>PRODI</B></td>         
		 <th><font color="Red"><B>NIDN</B></font></td>
         <th><font color="Red"><B>USERNAME</B></font></td>  
         <th><font color="Red"><B>KODE <bR/>JABATAN</B></td>    	 
       </tr>
     </thead>
	</Center> 
   <tbody>
    <?php $no = 0;  $hawalz = 0;
    foreach($data_passwordx as $u)
      { $no++; { ?>
		 <tr>
	     <td><div align='right'><?php  echo $no."."             ?></div></td>
         <td><div align='left'><?php   echo $u->id_fakultas     ?></div></td>
		 <td><div align='left'><?php   echo $u->id_prodi        ?></div></td>
		 <td><div align='left'><?php   echo $u->nidn_dosen      ?></div></td>
		 <td><div align='left'><?php   echo $u->username        ?></div></td>  
		 <td><div align='left'><?php   echo $u->jabatan         ?></div></td> 
		</tr>
	  <?php }}  ?>
</table>
</body>
</html>