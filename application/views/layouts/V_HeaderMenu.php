<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -----------------------------------------------------------------------
| Nama Program			: V0104_MenuSiakre.php
| Fungsi Program		: Cobtrollers SI_Travel
| Penempatan Program	: Controllers
| Tanggal Programming	: Bandung, 29 Desember 2021
| Sistem Analist		: Nana Karyana Kurdi, SE., M.Kom.
| Programmer			: Idem
| -----------------------------------------------------------------------
*/ ?>
<!DOCTYPE html>
<html>
<head>
 <title>Multilevel Dropdown Menu</title>
 <style type="text/css">
 body {
   margin:0;
   padding:0;
   line-height: 1.5;
   background: #fff; <?php // Warna Latar Belakang putih ?>
  }
  .menu-wrapper {
   margin:10px auto;
   position: relative;
   width:1250px;     <?php // Panjang Kotak Judul Horisontal  ?>
   z-index: 1;
  }
  .menu-wrapper ul{
   margin:0;
   padding:0;
   background-color: #8A2BE2;  <?php // Warna Kotak Horisontal Menu Utama ?>
   z-index: 1;
  }
  ul.menu-horizontal { <?php // Kotak Horisontal ?>   
    width:100%;
	background-color: #0000FF;
    position: relative;    	
   }
  ul.menu-horizontal li {
    list-style: none;	
   }
   ul.level-2{   <?php // Lebar dan Warna Kotak #006400 #191970  1. Tambah....6. Cetak ?>
	width: 350px;  
    background-color: #6495ED; 
   }
   
  /* Style menu horizontal */ 
   ul.menu-horizontal >li{  <?php // Menampilkan Judul Horisontal Style menu horizontal ?>
    display: inline-block;
   } 
  ul.menu-horizontal li a{
    position: relative;
    display: block;
    padding: 10px 45px;      <?php // Jarak Antarjudul Vertikal dan Horisontal ?>   
    text-decoration: none;
    color: #eee;   <?php // Warna Tulisan ?>         
   }   
   ul.menu-horizontal li a:hover {
    background-color:#4db2ec; <?php // Warna Sorot ?>
    -webkit-transition:all 0.5s ease-in-out;
   }
   /*Style Tanda panah pada menu yang mempunyai sub menu*/
   ul.menu-horizontal >li >a >span.arrow {  <?php // Menampilkan Tanda Panah Bawah ?>
    width:0;
    height: 0;
    border:5px solid transparent;
    border-top:7px solid Red;  <?php // Warna Panah Bawah ?>
    position: absolute;
    right: 5px;
    top:17px;
    z-index:1;
   }
   /*Style tanda panah pada sub menu level 1 dan level 2*/
   ul.menu-horizontal li ul li span.arrow { <?php // Menampilkan Tanda Panah Kiri ?>
    width:0;
    height: 0;
    border:5px solid transparent;
    border-left:7px solid White; <?php // Warna Panah Kanan ?>
    position: absolute;
    right: 5px;
    top:17px;
    z-index:1;
   }
    /*Menyembunyikan sub menu ketika tidak dihover*/
   ul.submenu {  <?php // Sebunyikan Submenu ?> 
    position: absolute;
    display: none;
   }
   ul.submenu li {    <?php // Membuat Posisi Submenu Jadi Relatif  ?> 
    position: relative;	
   }
   /*untuk menciptakan efek animasi ketika dihover*/
   @-webkit-keyframes mantul-vertikal {
    0%{top: -300px;opacity: 0;}
    50%{top: 120%;opacity: 1;}
    75%{top: 80%;opacity: 1;}
    100%{opacity: 1;top:100%;}
   }
   @keyframes mantul-vertikal {
    0%{top: -300px;opacity: 0;}
    50%{top: 120%;opacity: 1;}
    75%{top: 80%;opacity: 1;}
    100%{opacity: 1;top:100%;}
   }
   @-webkit-keyframes mantul-horizontal {
    0%{left:300%;opacity: 0}
    50%{left: 80%;opacity: 1;}
    75%{left: 110%;opacity: 1;}
    100%{left:100%;opacity: 1}
   }
   @keyframes mantul-horizontal {
    0%{left:300%;opacity: 0}
    50%{left: 80%;opacity: 1;}
    75%{left: 110%;opacity: 1;}
    100%{left:100%;opacity: 1}
   }
   /*Menampilkan sub menu level 1 ketika menu di hover*/
   ul.menu-horizontal li:hover ul.level-1 {  <?php // Menampilan Submenu Vertikal Tambah-Ralat...dst  ?> 
    min-width: 190px;
    display: block;
    top:100%;
    -webkit-animation:mantul-vertikal 1s;
    animation:mantul-vertikal 1s;   	
   }
    /*Menampilkan sub menu level 1 ketika menu di hover*/
   ul.menu-horizontal li ul li:hover ul.level-2 { <?php // Menampilan Submenu Vertikal Tambah-Ralat...dst  ?> 
    min-width: 190px;
    display: block;
    -webkit-animation:mantul-horizontal 1s;
    animation:mantul-horizontal 1s;	
    top:0;
    left:100%;		
   }
 </style>
</head>

<body>
<div class="menu-wrapper">
<ul class="menu-horizontal">
   <li><a href="#">1. Password Login <span class="arrow"></span></a>
      <ul class="submenu level-1">
        <li><a href="#">1.1. Buat Password<span class="arrow"></span></a>
		  <ul class="submenu level-2">
		     <li><a href="<?php echo site_url('C02_Password/Proses_Entrydatapassword_1');?>"><div align="left">1. Tambah Data (Insert)</div></a></li>
             <li><a href="<?php echo site_url('C02_Password/Proses_RalatDataPassword');?>"><div   align="left">2. Ralat Data (Edit)</div></a></li>
			 <li><a href="<?php echo site_url('C02_Password/Proses_RalatDataPassword');?>"><div   align="left">3. Hapus Data (Delete) </div></a></li>			 
			 <li><a href="<?php echo site_url('C02_Password/Proses_LihatDataPassword');?>"><div   align="left">4. Lihat Data (Display)</div></a></li>	
			 <li><a href="<?php echo site_url('C02_Password/Proses_CariDataPassword');?>"><div    align="left">5. Cari Data (Search)</div></a></li>	
			 <li><a href="<?php echo site_url('C02_Password/Proses_CetakDataPassword');?>"><div   align="left">6. Cetak Data (Print)</div></a></li>
          </ul>
		  </li>

      <li><a href="<?php echo site_url('C03_tb_3b1/index');?>">3.b1. Tabel 3b1</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b2/index');?>">3.b2. Tabel 3b2</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b3/index');?>">3.b3. Tabel 3b3</a></li>
      
      <li><a href="<?php echo site_url('C03_tb_3b41/index');?>">3.b41. Tabel 3b41</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b42/index');?>">3.b41. Tabel 3b42</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b5/index');?>">3.b41. Tabel 3b5</a></li>

      <li><a href="<?php echo site_url('C03_tb_3b6/index');?>">3.b41. Tabel 3b6</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b71/index');?>">3.b41. Tabel 3b71</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b72/index');?>">3.b41. Tabel 3b72</a></li>

      <li><a href="<?php echo site_url('C03_tb_3b73/index');?>">3.b41. Tabel 3b73</a></li>
      <li><a href="<?php echo site_url('C03_tb_3b74/index');?>">3.b41. Tabel 3b74</a></li>
      <li><a href="<?php echo site_url('C03_tb_4/index');?>">3.b41. Tabel 4</a></li>

	  </ul>	
	</li>
	
  <li><a href="#">2. Akuntabilitas Data-1<span class="arrow"></span></a></a>
    <ul class="submenu level-1">
        <li><a href="#"><div align="left">2.1. Tabel 1-4</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="#"><div align="left">1. tb-ps Tabel Daftar Program Studi di Unit Pengelola Program Studi</div></a></li>
          <li><a href="#"><div align="left">2. tb-11 Tabel 1 Kerjasama Tridharma - Pendidikan</div></a></li>             	 
      </ul>
		</li>
		<li><a href="#"><div align="left">2.2. Tabel 5-8</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="#"><div align="left">1. tb-2a Tabel 2.a Seleksi Mahasiswa</div></a></li>
          <li><a href="#"><div align="left">2. tb-2b Tabel 2.b Mahasiswa Asing</div></a></li>            		 
      </ul>
		</li>		
		<li><a href="#"><div align="left">3.1. Tabel 3b1-3b3</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="<?php echo site_url('C03_tb_3b1/index');?>"><div align="left">1. Tabel 3.b.1) Pengakuan/Rekognisi Dosen</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b2/index');?>"><div align="left">2. Tabel 3.b.2) Penelitian DTPS</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b3/index');?>"><div align="left">3. Tabel 3.b.3) PkM DTPS</div></a></li>         		 
      </ul>
		</li>		
		
    <li><a href="#"><div align="left">3.2. Tabel 3b41-3b5</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="<?php echo site_url('C03_tb_3b41/index');?>"><div align="left">1. Tabel 3.b.41) Publikasi Ilmiah DTPS</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b42/index');?>"><div align="left">2. Tabel 3.b.42) Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b5/index');?>"><div align="left">3. Tabel 3.b.5) Karya Ilmiah DTPS yang Disitasi</div></a></li>         		 
      </ul>
		</li>		
    
    <li><a href="#"><div align="left">3.3. Tabel 3b6-3b72</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="<?php echo site_url('C03_tb_3b6/index');?>"><div align="left">1. Tabel 3.b.6) Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b71/index');?>"><div align="left">2. Tabel 3.b.71) Luaran Penelitian/PkM Lainnya - HKI (Paten, Paten Sederhana)</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_372/index');?>"><div align="left">3. Tabel 3.b.72) Luaran Penelitian/PkM Lainnya - HKI (Hak Cipta, Desain Produk Industri, dll.)</div></a></li>         		 
      </ul>
		</li>	
    
    <li><a href="#"><div align="left">3.4. Tabel 3b73-4</div><span class="arrow"></span></a>
		  <ul class="submenu level-2">
          <li><a href="<?php echo site_url('C03_tb_3b73/index');?>"><div align="left">1. Tabel 3.b.73) Luaran Penelitian/PkM Lainnya - Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_3b74/index');?>"><div align="left">2. Tabel 3.b.74) Luaran Penelitian/PkM Lainnya - Buku ber-ISBN, Book Chapter</div></a></li>         		 
          <li><a href="<?php echo site_url('C03_tb_4/index');?>"><div align="left">3. Tabel 4 Penggunaan Dana</div></a></li>         		 
      </ul>
		</li>	

    </ul>	 
  </li>
    
    
</ul>
</div>
 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
   <!-- <img src="<?php echo base_url('images/gedungumbx.jpeg') ?>" width="400" height="300"/> -->
</Center>
</body>
</html>