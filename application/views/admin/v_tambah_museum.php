<?php
  include(APPPATH.'views/admin/v_header.php');
?>

    <div id="page-wrapper" >
    <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Tambah Museum <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Tambah Museum</h2>   
                    </div>
                </div>
                <hr>

  <div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('admin/c_data_museum/tambah_museum') ?>">
          <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Nama</label>
                <div class="col-xs-9">
                    <input name="nama" class="form-control" type="text" placeholder="Nama">
                    <p class="text-danger"><?= form_error('nama'); ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Kota</label>
                <div class="col-xs-9">

                <select class="form-control" name="kota"> 
                  <?php foreach($kota as $kot): ?>
                    <option value="<?= $kot['kota'] ?>"><?= $kot['kota'] ?></option>
                  <?php endforeach ?>
                </select>  

<!--                 <select class="form-control" name="kota"> 
                  <?php foreach($relasi as $kot): ?>
                    <option value="<?= $kot->kota ?>"><?= $kot->kota ?></option>
                  <?php endforeach ?>
                </select>  --> 

                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Alamat</label>
                <div class="col-xs-9 ">
                    <input name="alamat" class="form-control" type="text" placeholder="Alamat">
                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Telepon</label>
                <div class="col-xs-9">
                    <input name="telepon" class="form-control" type="text" placeholder="Telepon">
                    <p class="text-danger"><?= form_error('telepon'); ?></p>
                </div>
            </div>   
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
              <button class="btn btn-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>