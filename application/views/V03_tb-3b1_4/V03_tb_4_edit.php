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
    
    <title>TB 3b72</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_4/index') ?>" class="btn btn-primary float-start">Back</a> <h3>EDIT DATA</h3>
        </div>
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
				</div>
                <?php $this->session->unset_userdata('success'); ?>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="txt_id" value="<?php echo $tb_4->id?>" />
                <div class="mb-3 row">
                    <label for="txt_jenis_penggunaan" class="col-sm-2 col-form-label">Jenis Penggunaan<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select name="txt_jenis_penggunaan" class="form-control <?php echo form_error('txt_jenis_penggunaan') ? 'is-invalid':'' ?>" aria-label="Default select example">
                            <option selected disabled>Jenis Penggunaan</option>
                            <option value="1" <?= $tb_4->jenis_penggunaan == '1' ? 'selected' : '' ?>>Biaya Operasional Pendidikan <br> a. Biaya Dosen (Gaji, Honor)</option>
                            <option value="2" <?= $tb_4->jenis_penggunaan == '2' ? 'selected' : '' ?>>Biaya Operasional Pendidikan <br> b. Biaya Tenaga Kependidikan (Gaji, Honor)</option>
                            <option value="3" <?= $tb_4->jenis_penggunaan == '3' ? 'selected' : '' ?>>Biaya Operasional Pendidikan <br> c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</option>
                            <option value="4" <?= $tb_4->jenis_penggunaan == '4' ? 'selected' : '' ?>>Biaya Operasional Pendidikan <br> d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</option>
                            <option value="5" <?= $tb_4->jenis_penggunaan == '5' ? 'selected' : '' ?>>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</option>
                            <option value="6" <?= $tb_4->jenis_penggunaan == '6' ? 'selected' : '' ?>>Jumlah <br> Biaya Penelitian</option>
                            <option value="7" <?= $tb_4->jenis_penggunaan == '7' ? 'selected' : '' ?>>Jumlah <br> Biaya PkM</option>
                            <option value="8" <?= $tb_4->jenis_penggunaan == '8' ? 'selected' : '' ?>>Jumlah <br> Biaya Investasi SDM</option>
                            <option value="9" <?= $tb_4->jenis_penggunaan == '9' ? 'selected' : '' ?>>Jumlah <br> Biaya Investasi Sarana</option>
                            <option value="10" <?= $tb_4->jenis_penggunaan == '10' ? 'selected' : '' ?>>Jumlah <br> Biaya Investasi Prasarana</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_jenis_penggunaan') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_upps_ts_2" class="col-sm-2 col-form-label">Unit Pengelola Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_upps_ts_2') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_upps_ts_2" 
                                placeholder="Unit Pengelola Program Studi (Rupiah)" 
                                value="<?= $tb_4->upps_ts_2?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_upps_ts_2') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_upps_ts_1" class="col-sm-2 col-form-label">Unit Pengelola Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_upps_ts_1') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_upps_ts_1" 
                                placeholder="Unit Pengelola Program Studi (Rupiah) TS-1" 
                                value="<?= $tb_4->upps_ts_1?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_upps_ts_1') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_upps_ts" class="col-sm-2 col-form-label">Unit Pengelola Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_upps_ts') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_upps_ts" 
                                placeholder="Unit Pengelola Program Studi (Rupiah) TS" 
                                value="<?= $tb_4->upps_ts?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_upps_ts') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_upps_ts_rata" class="col-sm-2 col-form-label">Unit Pengelola Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_upps_ts_rata') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_upps_ts_rata" 
                                placeholder="Unit Pengelola Program Studi (Rupiah) Rata-rata" 
                                value="<?= $tb_4->upps_ts_rata?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_upps_ts_rata') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_ps_ts_2" class="col-sm-2 col-form-label">Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_ps_ts_2') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_ps_ts_2" 
                                placeholder="Program Studi TS-2 (Rupiah)" 
                                value="<?= $tb_4->ps_ts_2?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_ps_ts_2') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_ps_ts_1" class="col-sm-2 col-form-label">Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_ps_ts_1') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_ps_ts_1" 
                                placeholder="Program Studi TS-1 (Rupiah)" 
                                value="<?= $tb_4->ps_ts_1?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_ps_ts_1') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_ps_ts" class="col-sm-2 col-form-label">Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_ps_ts') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_ps_ts" 
                                placeholder="Program Studi TS (Rupiah)" 
                                value="<?= $tb_4->ps_ts?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_ps_ts') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_ps_ts_rata" class="col-sm-2 col-form-label">Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_ps_ts_rata') ? 'is-invalid':'' ?>" 
                                type="text" name="txt_ps_ts_rata" 
                                placeholder="Program Studi Rata-rata (Rupiah)" 
                                value="<?= $tb_4->ps_ts_rata?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_ps_ts_rata') ?>
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