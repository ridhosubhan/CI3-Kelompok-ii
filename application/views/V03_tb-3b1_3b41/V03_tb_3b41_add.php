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
    
    <title>PUBLIKASI ILMIAH DTPS</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_3b41/index') ?>" class="btn btn-primary float-start">Back</a>
        </div>
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
				</div>
                <?php $this->session->unset_userdata('success'); ?>
            <?php endif; ?>
            <form action="<?php echo site_url('/C03_tb_3b41/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="mb-3 row">
                    <label for="txt_jenis_publikasi" class="col-sm-2 col-form-label">Jenis Publikasi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select name="txt_jenis_publikasi" class="form-control <?php echo form_error('txt_jenis_publikasi') ? 'is-invalid':'' ?>" aria-label="Default select example">
                            <option selected disabled>Jenis Publikasi</option>
                            <option value="1">Jurnal penelitian tidak terakreditasi</option>
                            <option value="2">Jurnal penelitian nasional terakreditasi</option>
                            <option value="3">Jurnal penelitian internasional</option>
                            <option value="4">Jurnal penelitian internasional bereputasi</option>
                            <option value="5">Seminar wilayah/lokal/perguruan tinggi</option>
                            <option value="6">Seminar nasional</option>
                            <option value="7">Seminar internasional</option>
                            <option value="8">Tulisan di media massa wilayah</option>
                            <option value="9">Tulisan di media massa nasional</option>
                            <option value="10">Tulisan di media massa internasional</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jenis_publikasi') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_jml_judul_TS_2" class="col-sm-2 col-form-label">Jumlah Judul TS-2<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_jml_judul_TS_2') ? 'is-invalid':'' ?>" type="text" name="txt_jml_judul_TS_2" placeholder="Jumlah Judul TS-2" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jml_judul_TS_2') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_jml_judul_TS_1" class="col-sm-2 col-form-label">Jumlah Judul TS-1<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_jml_judul_TS_1') ? 'is-invalid':'' ?>" type="text" name="txt_jml_judul_TS_1" placeholder="Jumlah Judul TS-1" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jml_judul_TS_1') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_jml_judul_TS" class="col-sm-2 col-form-label">Jumlah Judul TS<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_jml_judul_TS') ? 'is-invalid':'' ?>" type="text" name="txt_jml_judul_TS" placeholder="Jumlah Judul TS" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jml_judul_TS') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_jumlah" class="col-sm-2 col-form-label">Jumlah<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_jumlah') ? 'is-invalid':'' ?>" type="text" name="txt_jumlah" placeholder="Jumlah" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jumlah') ?>                        
                        </div>
                    </div>
                </div>
                <input class="btn btn-success float-end" type="submit" name="btn" value="Simpan Data" />
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