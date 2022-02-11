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
                    <h5>Daftar Penggunaan Dana</h5>
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
                <th rowspan="2">Jenis Penggunaan</th>
                <th colspan="4">Unit Pengelolaan Program Studi (Rupiah)</th>
                <th colspan="4">Program Studi (Rupiah)</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0; 
                foreach ($tb_4 as $data):
                    $no++; 
            ?>
            <tr>
                <td width="100">
                    <?php echo $no ?>
                </td>
                <td width="400">
                    <?php 
                        if($data->jenis_penggunaan==1){
                            echo "Biaya Operasional Pendidikan \r\n a. Biaya Dosen (Gaji, Honor)";
                        } 
                        else if($data->jenis_penggunaan==2){
                            echo "Biaya Operasional Pendidikan \n b. Biaya Tenaga Kependidikan (Gaji, Honor)";
                        }                       
                        else if($data->jenis_penggunaan==3){
                            echo "Biaya Operasional Pendidikan \n c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)";
                        }                       
                        else if($data->jenis_penggunaan==4){
                            echo "Biaya Operasional Pendidikan \n d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)";
                        }                       
                        else if($data->jenis_penggunaan==5){
                            echo "Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).";
                    }                       
                    else if($data->jenis_penggunaan==6){
                        echo "Jumlah \n Biaya Penelitian";
                    }                       
                    else if($data->jenis_penggunaan==7){
                        echo "Jumlah \n Biaya PkM";
                    }                       
                    else if($data->jenis_penggunaan==8){
                        echo "Jumlah \n Biaya Investasi SDM";
                    }                       
                    else if($data->jenis_penggunaan==9){
                        echo "Jumlah \n Biaya Investasi Sarana";
                    }                       
                    else if($data->jenis_penggunaan==10){
                        echo "Jumlah \n Biaya Investasi Prasarana";
                    }                       
                        else{
                            echo "-";
                        }
                    ?>
                </td>
                <td>
                    <?php echo $data->upps_ts_2 ?>
                </td>
                <td>
                    <?php echo $data->upps_ts_1?>
                </td>
                <td>
                    <?php echo $data->upps_ts_1?>
                </td>
                <td>
                    <?php echo $data->upps_ts_rata?>
                </td>
                <td>
                    <?php echo $data->ps_ts_2?>
                </td>
                <td>
                    <?php echo $data->ps_ts_1?>
                </td>
                <td>
                    <?php echo $data->ps_ts?>
                </td>
                <td>
                    <?php echo $data->ps_ts_rata?>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>