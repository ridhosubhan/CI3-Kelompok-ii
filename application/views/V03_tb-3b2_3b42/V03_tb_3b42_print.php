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
                    <h5>PUBLIKASI ILMIAH DTPS</h5>
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
                <th rowspan="2">No</th>
                <th rowspan="2" width="350">Jenis Publikasi</th>
                <th colspan="3" class="text-center">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0; 
                foreach ($tb_3b42 as $data):
                    $no++; 
            ?>
            <tr>
                <td width="10">
                    <?php echo $no ?>
                </td>
                <td width="150">
                    <?php 
                        if($data->jenis_publikasi==1){
                            echo "Jurnal penelitian tidak terakreditasi";
                        } 
                        else if($data->jenis_publikasi==2){
                            echo "Jurnal penelitian nasional terakreditasi";
                        }
                        else if($data->jenis_publikasi==3){
                            echo "Jurnal penelitian internasional";
                        }
                        else if($data->jenis_publikasi==4){
                            echo "Jurnal penelitian internasional bereputasi";
                        }
                        else if($data->jenis_publikasi==5){
                            echo "Seminar wilayah/lokal/perguruan tinggi";
                        }
                        else if($data->jenis_publikasi==6){
                            echo "Seminar nasional";
                        }
                        else if($data->jenis_publikasi==7){
                            echo "Seminar internasional";
                        }
                        else if($data->jenis_publikasi==8){
                            echo "Tulisan di media massa wilayah";
                        }
                        else if($data->jenis_publikasi==9){
                            echo "Tulisan di media massa nasional";
                        }
                        else if($data->jenis_publikasi==10){
                            echo "Tulisan di media massa internasional";
                        }
                        else{
                            echo "-";
                        }
                    ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_TS_2 ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_TS_1 ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_TS ?>
                </td>
                <td>
                    <?php echo $data->jumlah ?>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>