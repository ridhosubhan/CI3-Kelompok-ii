<?php
/*
| -----------------------------------------------------------------------
| Nama Program			: V01_L01Prodi.php
| Fungsi Program		: Melihat Data prodi
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
		 <th><font color="Red"><B>KODE <bR/>FAKULTAS</B></td>
         <th><font color="Red"><B>KODE <bR/>PRODI</B></td>	      
         <th><font color="Red"><B>PROGRAM STUDI</B></td>         
		 <th><div align='center'><font color="Red"><B>REGULER</B></font></td>
		 <th><font color="Red"><B>NON<bR/>REGULER</B></td>		 
		 <th><font color="Red"><B>NOMOR SK</B></font></td>
         <th><font color="Red"><B>TGL. SK</B></font></td>         
       </tr>
     </thead>
	</Center> 
   <tbody>
    <?php $no = 0;  $hawalz = 0;
     foreach($tb_03prodix as $u)
      { $no++;
        { ?>
		 <tr>
	     <td><div align='right'><?php  echo $no."."           ?></div></td>
		 <td><div align='left'><?php   echo $u->id_kodefakultas ?></div></td>
         <td><div align='left'><?php   echo $u->id_kodeprodi  ?></div></td>
		 <td><div align='left'><?php   echo $u->jenjang." ".$u->nama_prodi ?></div></td>
		 <td><div align='center'><?php echo $u->reguler       ?></div></td>	
         <td><div align='center'><?php echo $u->no_reguler    ?></div></td>		 
         <td><div align='left'><?php   echo $u->nomor_sk      ?></div></td>
		 <td><div align='left'><?php   echo $u->tgl_sk        ?></div></td>
		</tr>
	  <?php }}  ?>
</table>
</body>
</html>