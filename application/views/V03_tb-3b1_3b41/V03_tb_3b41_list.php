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
    
    <title>TB 3b41</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_3b41/add') ?>" class="btn btn-primary float-start">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Publikasi</th>
                            <th>Jumlah Judul TS-2</th>
                            <th>Jumlah Judul TS-1</th>
                            <th>Jumlah Judul TS</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 0; 
                            foreach ($tb_3b41 as $data):
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
                            <td width="150">
                                <a href="<?php echo site_url('/C03_tb_3b41/edit/'.$data->id) ?>"
                                    class="btn btn-small btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                <button  onclick="deleteConfirm('<?php echo site_url('/C03_tb_3b41/delete/'.$data->id) ?>')"
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
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        } );
    </script>
  </body>
</html>