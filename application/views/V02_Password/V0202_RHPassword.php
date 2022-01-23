<?php 
/*
| -----------------------------------------------------------------------
| Nama Program			: V0201_TDPassword.php
| Fungsi Program		: Pembuatan Password untuk Login
| Penempatan Program	: View 
| Tanggal Programming	: Bandung, 3 Oktober 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Nama Mahasiswa
| -----------------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<!DOCTYPE html>
<html lang="en">

	<meta charset="utf-8">
	<title>SIJADKULTO</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

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

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

	<meta charset="utf-8">
	<title>SIJADKUL UMBandung</title>
	
	<script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('main.css') ?>" type="text/css" />
 
 <script type="text/javascript">
    $(document).ready(function() {
      $("#id_password").keyup(function(){
		var password = $("#id_password").val();
		$.ajax({
		  type:"post",
		  url: "<?php echo site_url('C01_Login/pengecekan_password'); ?>",
		  data: {
			id_password: password
		  },
		  success: function(data){
			$('.password-msg').html(data.teks);
			$('#username').val(data.data.username);	
			$('#nidn').val(data.data.nidn_dosen);
            $('#fakx').val(data.data.id_fakultas);
			$('#prodi').val(data.data.id_prodi);
			$('#jabx').val(data.data.jabatan);			
		  }
		});
		});

	$("#tabel tbody tr").on("click", function(event){
		alert("TEST");
	});
  }); 
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
<!--
.style10 {font-family: Arial, Helvetica, sans-serif}
-->
h1 { color: #444;
	 background-color: transparent;		
	 font-size: 17px;
	 font-weight: normal;
	 margin: 0 0 14px 0;
	 padding: 14px 15px 10px 15px;}
 </style>
 
 <style type="text/css">
<!--
.style31 {
	color: #FF0000;
	font-weight: bold;
}
.style33 {color: #0000FF}
.style38 {color: #FFFFFF}
.style39 {font-weight: bold}
.style41 {
	color: #FFFF00;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
 </style>
 
<body style="background-color: #FFFFFF;" style="font-size: 100%;">
<form id="form" method="post" action="Proses_Entrydatapassword_3"> 
<CENTER>
<table width="900" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="61" scope="col"><span class="style31">FORM-5</span></th>
    <th colspan="2" class="style33" scope="col"><div align="center">RALAT/HAPUS AKUNTABILITAS DATA PASSWOORD DOSEN PENGAMPU</div></th>
    <th width="74" scope="col"><div align="right"><span class="style31">@NKK_363</span></div></th>
  </tr> 
  
</table>
<table  bgcolor="#87CEEB" width="800" border="0" cellspacing="1" ; >
  <tr>
    <td colspan="9"><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td width="1">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="35"><div align="center" class="style12 style38"><span class="style6 style10">01.</span></div></td>
    <td width="272"><span class="style11 style10 style6 style38"><strong>Kode-Nama Fakultas</strong></span></td>
    <td width="28"><div align="center" class="style38 style12"><strong><span class="style8">:</span> </strong></div>
    <td width="579">
	 <input name="fakx" type="text" size = 7 id="fakx" readonly class="required range" />
	 <td colspan="3">  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">02.</span></div></td>
    <td><span class="style11 style10 style6 style38"><strong>Kode-Nama Program Studi </strong></span></td>
    <td><div align="center" class="style38 style11"><strong><span class="style8">:</span></strong></div></td>
    <td width="579">
	<input name="prodi" type="text" size = 7 id="prodi" readonly class="required range" />
    
  <td colspan="3">  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">03.</span></div></td>
    <td><span class="style11 style10 style6 style38"><strong>NIDN-Nama Dosen Pengampu </strong></span></td>
    <td><div align="center" class="style12 style11 style38 style39">
        <div align="center"><span class="style8">:</span></div>
    </div></td>
	<td width="579">
    <input name="nidn" type="text" size = 12 id="nidn" readonly class="required range" />
    </select></td>
    <td colspan="3">  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">04.</span></div></td>
    <td><div align="left"><span class="style11 style10 style6 style38"><strong>Password</strong></span></div></td>
    <td><div align="center" class="style12 style11 style38 style39">
        <div align="center"><span class="style8">:</span></div>
    </div></td>
    <td><input name="id_password" type="password" id="id_password" size="30" ></td>
    <td colspan="3">  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">05.</span></div></td>
    <td><div align="left"><span class="style11 style10 style6 style38"><strong>Username </strong></span></div></td>
    <td><div align="center" class="style12 style11 style38 style39">
        <div align="center"><span class="style8">:</span></div>
    </div></td>
    <td><input name="username" type="text" id="username" size="40"></td>
    <td colspan="3">  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style12 style38"><span class="style6 style10">06.</span></div></td>
    <td><div align="left"><span class="style11 style10 style6 style38"><strong>Kode-Jabatan</strong></span></div></td>
    <td><div align="center" class="style12 style11 style38 style39">
        <div align="center"><span class="style8">:</span></div>
    </div></td>
    <td><input name="jabx" type="text" id="jabx" size="10" readonly ></td>
    <td colspan="3">  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right"><span class="style41">Entry Data </span></div></td>
    <td><div align="center"><span class="style38 style8"><strong>:</strong></span></div></td>
    <td><form name="form2">
      <select name="menu_ralathapus" onChange="#">
	    <option>0. Pilih</option>
        <option>1. Ralat Data</option>
        <option>2. Hapus Data</option>      
      </select>
      <label>
      <input type="submit" name="Submit" value="Proses">
      </label>
        </form>    </td>
    <td colspan="3"><label></label>  </tr>
  
  <tr>
    <td colspan="9">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="9"><span class="form-group"></span></td>
    <label></label>
    <td width="10"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
</table>
<tr>
              <td colspan="7">&nbsp;</td>
</tr>
</body>
</html> 
</form>
		
</body>