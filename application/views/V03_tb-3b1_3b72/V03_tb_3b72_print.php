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
<html>
<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/css_cetakdata01.css') ?>" />
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body onload="window.print()">
    <!-- HEADER -->
    <table width="100%">
        <tr>
            <td>
                <img src="<?php echo base_url('images/kopumbandung.jpg') ?>" height="70px" alt="">
            </td>
            <td>
                <span class="text-center">
                    <h6>Luaran Penelitian/PkM Lainnya - HKI (Hak Cipta, Desain Produk Industri, dll.)</h6>
                    <h5>Universitas Muhammadiyah Bandung</h5>
                    <p style="font-size: 12px;">Jalan Soerkarno-Hatta Nomor 752 Kelurahan Cipadung Kidul,<br>Kecamatan Panyileukan Kota Bandung (04614)</p>
                </span>
            </td>
            <td width="150">
                <p style="font-size: 12px;"><b>Tanggal : <?=date("d/m/Y")?></b> </p>
                <p style="font-size: 12px;"><b>SISPROG : ODOD </b></p>
            </td>
        </tr>
    </table>
    <!-- HEADER -->
    <hr style="border: 2px solid black;">
    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Luaran Penelitian dan PKM</th>
                <th>Tahun (YYYY)</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0; 
                foreach ($tb_3b72 as $data):
                    $no++; 
            ?>
            <tr>
                <td width="10">
                    <?php echo $no ?>
                </td>
                <td width="150">
                    <?php 
                        if($data->luaran_penelitian_dan_pkm==1){
                            echo "Hak Cipta";
                        } 
                        else if($data->luaran_penelitian_dan_pkm==2){
                            echo "Desain Produk Industri";
                        }
                        else if($data->luaran_penelitian_dan_pkm==3){
                            echo "Perlindungan Varietas Tanaman";
                        }
                        else if($data->luaran_penelitian_dan_pkm==4){
                            echo "Desain Tata Letak Sirkuit Terpadu";
                        }
                        else if($data->luaran_penelitian_dan_pkm==5){
                            echo "Dan Lain-lain";
                        }                           
                        else{
                            echo "-";
                        }
                    ?>
                </td>
                <td>
                    <?php echo $data->tahun ?>
                </td>
                <td>
                    <?php echo $data->keterangan?>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>