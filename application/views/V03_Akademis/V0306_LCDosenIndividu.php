<?php 
/*
| -----------------------------------------------------------------------
| Nama Program			: V03_l03Iddosen.php
| Fungsi Program		: Melihat Dosen Per Program Studi
| Penempatan Program	: "/Views/V0002/"
| Tanggal Programming	: Bandung, 11 November 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Dieka Nugraha Karyana, S.Kom.
| -----------------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/css_cetakdata01.css') ?>" />
</head>

<html lang="en">
<head>

<!DOCTYPE html>
<html lang="en">

	<meta charset="utf-8">
	<title>SIJADKULTO</title>

	<style type="text/css">
code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
p.footer {
		text-align: right;
		font-size: 6px;
		border-top: 1px solid #D0D0D0;
		line-height: 10px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	</style>

	<meta charset="utf-8">
	<title>SIJADKUL UMBandung</title>
	
	 <link rel ="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap41/bootstrap.min.css') ?>">       
     <script type ="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script> 


<script type ="text/javascript">
$(function(){ 
		$.ajaxSetup({ type:"POST",    
          url: "<?php  echo base_url('index.php/C03_Akademik/ambil_data') ?>", cache: false, });
	      $("#fakultas").change(function(){ var value=$(this).val(); 
	      $.ajax({ data:{modul:'modul-prodi',id:value},
          success: function(respond){$("#respon-prodi").html(respond); }})});
      	      			 
	      $("#respon-prodi").change(function(){ 
		  var value=$(this).val();
          $.ajax({ 
			data:{modul:'modul-dosampu',id:value},
			success: function(respond){$("#respon-dosampu").html(respond); }})
		});		  
		  
		  $("#respon-desampu").change(function(){ var value=$(this).val();
          $.ajax({ data:{modul:'modul-matkul',id:value},
          success: function(respond){ $("#respon-matkul").html(respond); }})});
			 
          $("#respon-matkul").change(function(){ var value=$(this).val();
          $.ajax({ data:{modul:'modul-gunru',id:value},
          success: function(respond){ $("#respon-gunru").html(respond); }})})	
	  
 })

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

 <style type="text/css">
<!--
.style10 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #FFFF00; font-weight: bold; }
-->
 </style>

</script>

 <style type="text/css">

 <style type="text/css">
<!--
.style31 {
	color: #FF0000;
	font-weight: bold;
}
.style33 {color: #0000FF}
.style38 {color: #FFFFFF}
.style39 {font-weight: bold}
.style41 {color: #000099; font-weight: bold; }
-->
 </style>
 
<body style="background-color: #FFFFFF;" style="font-size: 100%;">
<div id="container">
<CENTER>
<table width="1027" border="0" cellspacing="1" cellpadding="1">
<tr>
    <td colspan="9"><span class="form-group"></span></td>
        <td width="10"></td>
		<td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <th width="61" scope="col"><span class="style31">FORM-5</span></th>
    <th colspan="2" class="style33" scope="col"><div align="center">MELIHAT AKUNTABILITAS DATA DOSEN PER INIDIVIDU</div></th>
    <th width="90" scope="col"><div align="right"><span class="style31">@NKK_363</span></div></th>
  </tr>
  
</table>
<table  bgcolor="#87CEEB" width="1028" border="0" cellspacing="1" cellpadding="1">
  <tr><td colspan="9">&nbsp;</td></tr>
  <tr>
    <td colspan="9"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="1">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="35"><div align="center" class="style12 style38"><span class="style6 style10">01.</span></div></td>
    <td width="272"><span class="style11 style10 style6 style38"><strong>Kode-Nama Fakultas</strong></span></td>
    <td width="28"><div align="center" class="style38 style12"><strong><span class="style8">:</span> </strong></div>
    <td width="579"><select name="select_fak" class='form-control' id='fakultas'>
	   <?php echo "<option value='0'>--pilih--</option>";	  
	     foreach ($data_fakultasx->result_array() as $prov) { 
	       echo "<option value='$prov[id_fakultas]'>$prov[id_fakultas] -   $prov[nama_fakultas]</option>"; } ?>
    </select>
  <td colspan="3">  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">02.</span></div></td>
    <td><span class="style11 style10 style6 style38"><strong>Kode-Nama Program Studi </strong></span></td>
    <td><div align="center" class="style38 style11"><strong><span class="style8">:</span></strong></div></td>
    <td><select name="select_prodi" class='form-control' id='respon-prodi'>
    </select></td>
  <td colspan="3">  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">03.</span></div></td>
    <td><span class="style11 style10 style6 style38"><strong>NIDN-Nama Dosen Pengampu </strong></span></td>
    <td><div align="center" class="style12 style11 style38 style39">
        <div align="center"><span class="style8">:</span></div>
    </div></td>
    <td><select name="select_desampu" class='form-control' id='respon-dosampu' maxlength = "70"; >
    </select></td>
    <td colspan="3"><label></label>  </tr>  
  <tr>
    <td colspan="9">&nbsp;</td>
    <td></td>
  </tr>  
  <tr>
    <td colspan="3"></td>
  </tr>
</table>
<tr>
    <td colspan="9"><span class="form-group"></span></td>
        <td width="10"></td>
		<td colspan="9">&nbsp;</td>
  </tr>
</html> 
</form>
		
</body>