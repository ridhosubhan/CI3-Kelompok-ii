<?php
/*
| ---------------------------------------------------------------------------
| Nama Program	       : V02_FormLogin.php
| Fungsi Program	   : Login ke SIMPADU-UMBandung
| Tanggal Programming  : Bandung, 9 November 2021 
| Sistem Analist	   : Nana Karyana Kurdi, SE., M.Kom.
| Programmer		   : nama programmer
| ---------------------------------------------------------------------------
*/
?>

<html>
<head>
   <script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
   <script  type="text/javascript">
   function popup(){
	  window.open('tell_friend2.php', 'tellafriend_script','scrollbars=1,statusbar=1,resizable=1,width=400,height=510');
	}
   </script>
   
   <link rel="stylesheet" href="<?php echo base_url('main.css') ?>" type="text/css" />
   <script type="text/javascript">
      $(document).ready(function() {
        $("#id_password").keyup(function(){
			var password = $("#id_password").val();
			
			$.ajax({
				type:"post",
				url: "<?php echo site_url('C01_Login/pengecekan_password'); ?>",  // mengecek data dalam tabel
				data: {
					id_password: password,					
				},
				success: function(data){
					console.log(data.teks);
					if (data.teks == "Ralat/Hapus") {
						window.location.href = "<?php echo site_url('C01_Login/lanjut_kemenuutama_siakreditasi') ?>"; // lanjut_kemenuutama_baak
					}
				}
			});
		});
    });
   </script>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/background_01.css') ?>" />
   <style type="text/css">
	.gelembung{
		position: absolute;
		top: 0;
		border: 2px solid #888;
		border-radius: 50%;
		z-index: 10;
	}
</style>
<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
<script type="text/javascript">
	$('document').ready(function(){
		var top;
		
		$(window).mousemove(function(e){
				var mouseX = e.pageX;
				var mouseY = e.pageY;
				var width = Math.random() * 25 + 5;
				var height =  width;
					
					$('<div class="gelembung"></div>').appendTo('body')
						.css({'left': mouseX, 'top': mouseY, 'width': width, 'height': height});
		
					
					$('.gelembung').each(function(){						
						top = parseInt($(this).css('top'));
						$(this).animate({'top': top - (Math.random() * 200 + 50)},Math.random()* 600 + 400,function(){
							$(this).remove();
						});
					});				
		});
	});
</script>
</head>

<body>
   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
   <div id="body">
		<p align="center"><img src="<?php echo base_url('images/Bismillah.jpg') ?>" width="259" height="80">
		<h2><font Color    ="Red"><b>Bila Saudara Telah Memiliki Password Silahkan Melakukan Login Masuk Lingkungan</b></font></h2>
        <p><h2><font Color ="Red"><b>Sistem Informasi Akreditasi Program Studi (SIAKREDITASI_PS)</b></font></h2></p>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
  <div class="demo">
  
  <form id="form1" name="form1" method="post" action="index.php/C0001/pengecekan_password">
    <table bgcolor="black" width="200" border="1" align="center" cellpadding="1" cellspacing="0">
    <tr><Center>
      <th width="528" scope="col"><div align="right"><B></B><font Color ="Yellow">Password</font></B></div></th>
      <th width="11" scope="col">:</th>
      <th width="527" scope="col"><div align="left">
        <label>
        <input type="password" name="id_password" id ="id_password" size=30 min="30" max="30" class="required range" />
        </label>
      </div></th>
	    </Center>
    </tr>
  </table>
</body>
</html>
