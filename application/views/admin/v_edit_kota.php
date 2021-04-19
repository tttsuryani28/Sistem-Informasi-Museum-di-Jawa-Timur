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
                Edit Kota <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Edit Kota</h2>   
                    </div>
                </div>
<hr />
  <!-- Page Title Header Ends-->
  <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal" method="post" action="">
          <div class="modal-body">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $admin['id_kota']; ?>">
            </div>  
            <div class="form-group">
                
                <div class="col-xs-9">
                    <input name="id_kota" class="form-control" type="hidden" placeholder="" style="width:280px;" value="<?php echo $admin['id_kota'] ?>" >
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >kode</label>
                <div class="col-xs-9">
                    <input name="kode" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['kode'] ?>">
                    <p class="text-danger"><?= form_error('kode'); ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >kota</label>
                <div class="col-xs-9">
                    <input name="kota" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['kota'] ?>">
                    <p class="text-danger"><?= form_error('kota'); ?></p>
                </div>
            </div>   
<!--             <div class="form-group">
                <label class="control-label col-xs-3" >museum</label>
                <div class="col-xs-9">
                    <input name="museum" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['museum'] ?>">
                    <p class="text-danger"><?= form_error('museum'); ?></p>
                </div>
            </div> 
          </div>
          <div class="form-group">
                <label class="control-label col-xs-3" >alamat</label>
                <div class="col-xs-9">
                    <input name="alamat" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['alamat'] ?>">
                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                </div>
            </div> 
          </div> -->
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
              <button type="submit" class="btn btn-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/admin/v_footer.php')
?>