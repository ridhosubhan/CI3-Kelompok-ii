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
    
    <title>TB 3b6</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_3b6/index') ?>" class="btn btn-primary float-start">Back</a> <h3>EDIT DATA</h3>
        </div>
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
				</div>
                <?php $this->session->unset_userdata('success'); ?>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="txt_id" value="<?php echo $tb_3b6->id?>" />
               <div class="mb-3 row">
                    <label for="txt_nama_dosen" class="col-sm-2 col-form-label">Nama Dosen<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_nama_dosen') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_nama_dosen" 
                                placeholder="Nama Dosen" 
                                value="<?= $tb_3b6->nama_dosen?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_nama_dosen') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_nama_produk_jasa" class="col-sm-2 col-form-label">Nama Produk/Jasa<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_nama_produk_jasa') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_nama_produk_jasa" 
                                placeholder="Nama Produk/Jasa" 
                                value="<?= $tb_3b6->nama_produk_jasa?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_nama_produk_jasa') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_deskripsi_produk_jasa" class="col-sm-2 col-form-label">Deskripsi Produk/Jasa<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_deskripsi_produk_jasa') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_deskripsi_produk_jasa" 
                                placeholder="Deskripsi Produk/Jasa"
                                value="<?= $tb_3b6->deskripsi_produk_jasa?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_deskripsi_produk_jasa') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_bukti" class="col-sm-2 col-form-label">Bukti<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_bukti') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_bukti" 
                                placeholder="Bukti"
                                value="<?= $tb_3b6->bukti?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_bukti') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_tahun" class="col-sm-2 col-form-label">Tahun<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_tahun') ? 'is-invalid':'' ?>" 
                                type="text" 
                                name="txt_tahun" 
                                placeholder="Tahun"
                                value="<?= $tb_3b6->tahun ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_tahun') ?>                        
                        </div>
                    </div>
                </div>
                <input class="btn btn-success float-end" type="submit" name="btn" value="Edit Data" />
            </form>
            
        </div>
    </div>



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

  </body>
</html>