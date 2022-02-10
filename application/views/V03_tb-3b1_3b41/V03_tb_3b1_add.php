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
    
    <title>PENGAKUAN / REKOGNISI DOSEN</title>
  </head>
  <body>

    <?php $this->load->view("layouts/V_HeaderMenu.php") ?>
    <?php $this->load->view("V01_Login/V0101_KopLem") ?>
    

    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('/C03_tb_3b1/index') ?>" class="btn btn-primary float-start">Back</a> <h3>TAMBAH DATA PENGAKUAN / REKOGNISI DOSEN</h3>
        </div>
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
				</div>
                <?php $this->session->unset_userdata('success'); ?>
            <?php endif; ?>
            <form action="<?php echo site_url('/C03_tb_3b1/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="mb-3 row">
                    <label for="txt_kode_fakultas" class="col-sm-2 col-form-label">Kode - Nama Fakultas<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select name="txt_kode_fakultas" id="txt_kode_fakultas" class="form-control <?php echo form_error('txt_kode_fakultas') ? 'is-invalid':'' ?>" aria-label="Default select example">
                            <?php 
                                echo "<option value='0'>--pilih--</option>";
                                foreach ($query_data_fakultasx->result() as $prov) { 
                                    echo "<option value='$prov->id_fakultas'>$prov->id_fakultas -   $prov->nama_fakultas</option>"; 
                                } 
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_kode_fakultas') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_kode_prodi" class="col-sm-2 col-form-label">Kode - Nama Program Studi<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select name="txt_kode_prodi" id="txt_kode_prodi" class="form-control <?php echo form_error('txt_kode_prodi') ? 'is-invalid':'' ?>" aria-label="Default select example">
                        
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_kode_prodi') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_nama_dosen" class="col-sm-2 col-form-label">NIDN - Nama Dosen <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_nama_dosen') ? 'is-invalid':'' ?>" type="text" name="txt_nama_dosen" placeholder="Nama Lengkap Dosen" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_nama_dosen') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_bidang_keahlian" class="col-sm-2 col-form-label">Bidang Keahlian<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_bidang_keahlian') ? 'is-invalid':'' ?>" type="text" name="txt_bidang_keahlian" placeholder="Bidang Keahlian" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_bidang_keahlian') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_rekognisi_dan_bukti_pendukung" class="col-sm-2 col-form-label">Rekognisi Bukti Pendukung<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_rekognisi_dan_bukti_pendukung') ? 'is-invalid':'' ?>" type="text" name="txt_rekognisi_dan_bukti_pendukung" placeholder="Rekognisi Dan Bukti Pendukung" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_rekognisi_dan_bukti_pendukung') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_tingkat_wilayah" class="col-sm-2 col-form-label">Tingkat Wilayah<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_tingkat_wilayah') ? 'is-invalid':'' ?>" type="text" name="txt_tingkat_wilayah" placeholder="Tingkat Wilayah" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_tingkat_wilayah') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_tingkat_nasional" class="col-sm-2 col-form-label">Tingkat Nasional <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_tingkat_nasional') ? 'is-invalid':'' ?>" type="text" name="txt_tingkat_nasional" placeholder="Tingkat Nasional" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_tingkat_nasional') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_tingkat_internasional" class="col-sm-2 col-form-label">Tingkat Internasional <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_tingkat_internasional') ? 'is-invalid':'' ?>" type="text" name="txt_tingkat_internasional" placeholder="Tingkat Internasional" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_tingkat_internasional') ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="txt_tahun" class="col-sm-2 col-form-label">Tahun <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('txt_tahun') ? 'is-invalid':'' ?>" type="text" name="txt_tahun" placeholder="Tahun (YYYY)" />
                        <div class="invalid-feedback">
                            <?php echo form_error('txt_tahun') ?>
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

    <script>
        $(document).on('change', '#txt_kode_fakultas', function() {
            var vid = $('option:selected', this).attr('value');
            $.ajax({
                type: "POST",
                url: "<?= site_url('/C03_tb_3b1/prodi/')?>"+vid,
                data:{ id:vid},
                success: function(results) {
                    $('#txt_kode_prodi').html('<option value="">-Pilih Program Studi-</option>');
                    var result = JSON.parse(JSON.stringify(results));
                    for (var i = 0; i < result.length; i++) {
                        $('#txt_kode_prodi').append("<option value='"+ result[i].id_kodeprodi +"'>" + result[i].id_kodeprodi + " - "+result[i].nama_prodi +
                            "</option>");
                    }
                }
            });
        });

        
    </script>
  </body>
</html>