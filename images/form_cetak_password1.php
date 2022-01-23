<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--Bab6-7.html-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Rounded Corner Table</title>
<style type="text/css">
body {  line-height: 1em; }
#rounded-corner {
	font-family: Verdana, Arial, Sans-Serif;
	font-size: 12px;
	margin: 15px;
	width: 1100px;
	text-align: left;
	border-collapse: collapse;
}
#rounded-corner thead th.rounded-company {
	background: #b9c9fe url("left.png") left -1px no-repeat;
}
#rounded-corner thead th.rounded-q4 {
	background: #b9c9fe url("right.png") right -1px no-repeat;
}
#rounded-corner th {
	padding: 8px;
	font-weight: normal;
	font-size: 13px;
	color: #039;
	background: #b9c9fe;
}
#rounded-corner td {
	padding: 8px;
	background: #e8edff;
	border-top: 1px solid #fff;
	color: #669;
}
#rounded-corner tfoot td.rounded-foot-left {
	background: #e8edff url("botleft.png") left bottom no-repeat;
}
#rounded-corner tfoot td.rounded-foot-right {
	background: #e8edff url("botright.png") right bottom no-repeat;
}
#rounded-corner tbody tr:hover td {
	background: #d0dafd;
}
</style>

</head>

<body>
<Center>
 <?php  $no = 0;?>
	<section class ="content-header">
       <Center><B>DAFTAR ANGGOTA KEPESERTAAN DAPENSYMU WILAYAH MUHAMMADIYAH 
	   <br>PROVINSI JAWA BARAT</B></center>
    </section>	
 <table width="1400" id ="rounded-corner">
<thead>
 <tr>
    <table width="1400" id ="rounded-corner">
    <td width="31"  id="rounded-company" scope="col">No.</td>
    <td width="156" id="rounded-q1" scope="col">Username</td>
    <td width="248" id="rounded-q2" scope="col">Nama Lengkap </td>
    <td width="96"  id="rounded-q3" scope="col">NKTAM</td>
    <td width="95"  id="rounded-q4" scope="col">Hand Phone </td>
    <td width="158" id="rounded-q1" scope="col">E-Mail</td> 
 </tr>
</thead>

<tbody>
   <?php foreach($tb01_password as $u)
      { $no++; ?>
		<tr bgcolor="#FFFFFF">
	       <td><div align="right"><?php echo $no+". "; ?></div></td>              
           <td><label><?php echo $u->username; ?></label></td> 
           <td><label><?php echo $u->nama_lengkap; ?></label></td>
	       <td><label><?php echo $u->nktam; ?></label></td>
		   <td><label><?php echo $u->nomor_hp; ?></label></td>
		   <td><label><?php echo $u->email; ?></label></td>
		</tr>
   <?php } ?> 	     
</tbody>
</table>
</Center>
</body>
</html>

