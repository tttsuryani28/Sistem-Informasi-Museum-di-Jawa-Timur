<?php
  include(APPPATH.'views/admin/v_header.php');
?> 
<!-- partial -->

<div id="page-wrapper" >
    <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"> 
                        <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Tambah Kota <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Tambah Kota</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

<!-- <div class="main-panel">
  <div class="content-wrapper"> -->
  <!-- Page Title Header Starts-->
<!--     <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 style="margin-left: 30px" class="page-title">Tambah Kota</h4>
        </div>
      </div>
    </div> -->
  <!-- Page Title Header Ends-->
  <!-- <div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">

        <form class="form-horizontal" method="post" action="">
          <div class="modal-body"> -->
<!--             <div class="form-group">
                <label class="control-label col-xs-3" >No</label>
                <div class="col-xs-9">
                    <input name="no" class="form-control" type="text" placeholder="">
                </div>
            </div> -->
<div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('admin/c_data_museum/tambah_museum') ?>">
          <div class="modal-body">
            
            <div class="form-group">
                <label class="control-label col-xs-3" >kode</label>
                <div class="col-xs-9">
                    <input name="kode" class="form-control" type="text" placeholder="">
                    <p class="text-danger"><?= form_error('kode'); ?></p>
                </div>
            </div>  

            <div class="form-group">
                <label class="control-label col-xs-3" >kota</label>
                <div class="col-xs-9">
                    <input name="kota" class="form-control" type="text" placeholder="">
                    <p class="text-danger"><?= form_error('kota'); ?></p>
                </div>
            </div>   
           <!--  <div class="form-group">
                <label class="control-label col-xs-3" >museum</label>
                <div class="col-xs-9">
                    <input name="museum" class="form-control" type="text" placeholder="">
                    <p class="text-danger"><?= form_error('museum'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >alamat</label>
                <div class="col-xs-9">
                    <input name="alamat" class="form-control" type="text" placeholder="">
                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                </div>
            </div>  -->

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
