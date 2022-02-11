<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- datatable -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- datatable button -->
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <title>Penggunaan Dana</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_4/add') ?>" class="btn btn-primary float-start">Tambah Data</a>
            <a href="<?php echo site_url('/C03_tb_4/print') ?>" target="_blank" href="#" class=" ms-3 btn btn-info text-white float-start">Print</a>
            <h3>Penggunaan Dana</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Jenis Penggunaan</th>
                            <th colspan="4">Unit Pengelolaan Program Studi (Rupiah)</th>
                            <th colspan="4">Program Studi (Rupiah)</th>
                            <th rowspan="2">Aksi</th>
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
                            
                            <td width="150">
                                <a href="<?php echo site_url('/C03_tb_4/edit/'.$data->id) ?>"
                                    class="btn btn-small btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                <button  onclick="deleteConfirm('<?php echo site_url('/C03_tb_4/delete/'.$data->id) ?>')"
                                    class="btn btn-small btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DELETE MODALS -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data yang dihapus tidak akan bisa dikembalikan.
            </div>
            <div class="modal-footer">
                    <a id="btn-delete" type="button" class="btn btn-primary">Delete</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- DELETE MODAL -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script> -->

    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
    
    <!-- datatable print -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        function deleteConfirm(url){
            console.log("KLIK : "+ url);
            $('#deleteModal').modal('show');
            $('#btn-delete').attr('href', url);
        }
        
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'frtip'
            });
        } );
    </script>
  </body>
</html>