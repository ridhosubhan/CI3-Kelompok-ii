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
                    <h5>DAFTAR PKM DTPS</h5> 
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
                <th rowspan="2" width="350">Sumber Pembiayaan</th>
                <th colspan="3">Jumlah Judul PKM</th>
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
                foreach ($tb_3b3 as $data):
                    $no++; 
            ?>
            <tr>
                <td width="10">
                    <?php echo $no ?>
                </td>
                <td width="150">
                    <?php 
                        if($data->sumber_pembiayaan==1){
                            echo "a.) Perguruan tinggi";
                        } 
                        else if($data->sumber_pembiayaan==2){
                            echo "b.) Mandiri";
                        }
                        else if($data->sumber_pembiayaan==3){
                            echo "Lembaga dalam negeri (diluar PT)";
                        }
                        else if($data->sumber_pembiayaan==4){
                            echo "Lembaga luar negeri";
                        }
                        else{
                            echo "-";
                        }
                    ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_pkm_TS_2 ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_pkm_TS_1 ?>
                </td>
                <td>
                    <?php echo $data->jml_judul_pkm_TS ?>
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