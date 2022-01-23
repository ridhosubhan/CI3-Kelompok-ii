<?php 
/*
| -----------------------------------------------------------------------
| Nama Program			: V04_C04Password.php
| Fungsi Program		: Pencarian Data Password
| Penempatan Program	: "/Views/V0002/"
| Tanggal Programming	: Bandung, 11 November 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Dieka Nugraha Karyana, S.Kom.
| -----------------------------------------------------------------------
*/

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
   <head>
      <script type="text/JavaScript">
<!--
      function MM_jumpMenu(targ,selObj,restore){ //v3.0
      eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
      if (restore) selObj.selectedIndex=0;
}
//-->
   </script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/background_01.css') ?>" />
   <style type="text/css">
<!--
.style1 {
	color: #FFFF00;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style3 {
	color: #FFFF00;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
   </style>
   </head>

   <body>
     
     <div id="container">
        <div class="pics">
           <?php echo form_open("C0001/proses_pencarian_datapassword"); ?>
             <tr>
	           <Center>
	              <div id="panel">
                    <table width="582" border="1" align="center" cellpadding="1" cellspacing="0" bgcolor="Blue" >
    <tr>
      <th colspan="3" scope="col"><span class="style2"><font Color="White">Pencarian Data Password Dosen Pengampu </font></span></th>
    </tr>
    <tr>
	  <td width="258" rowspan="3"><table width="259">
        <tr>
          <td width="251"><span class="style4">
            <label>
            <input type="radio" name="RadioGroup" value="semua" />
            <font Color="White">Cari data di keseluruhan Field</font></label>
          </span></td>
        </tr>
        <tr>
          <td><span class="style4">
            <label>
            <input type="radio" name="RadioGroup" value="kategori_field" />
            <font Color="White">Cari data berdasarkan Field</font></label>
          </span></td>
        </tr>
        <tr>
          <td><span class="style4">
            <label>
            <input type="radio" name="RadioGroup" value="uniq_data" />
            <font Color="White">Cari data Uniq pada Field</font></label>
          </span></td>
        </tr>
      </table>      </td>
      <td width="12"><div align="center"><span class="style1">:</span></div></td>
      <td width="298"><div align="center" class="style5 style3">Kata Kunci</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style1">:</span></div></td>
      <td><label>
        <input name="kata_kunci" type="text" id="kata_kunci" size="40" maxlength="40" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style1">:</span></div></td>
      <td><label>
      <select name="kategori" id="kategori">
        <option value="">-- Kategori --</option>
        <option value="id_fakultas ">Fakultas</option>
        <option value=" id_prodi">Program Studi</option>
        <option value="nidn_dosen">Dosen Pengampu</option>
        <option value="username ">Username</option>
            </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Cari" />
      </label></td>
    </tr>
  </table>
				 </div>
				</div>
			 </tr>
	    </div>
     </div>
   </body>
</html>
