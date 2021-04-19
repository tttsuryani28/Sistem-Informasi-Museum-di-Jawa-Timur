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
                Edit Museum <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Edit Museum</h2>   
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
              <input type="hidden" name="id" value="<?php echo $admin['id_museum']; ?>">
            </div>  
            <div class="form-group">
                <div class="col-xs-9">
                    <input name="id_museum" class="form-control" type="hidden" placeholder="" style="width:280px;" value="<?php echo $admin['id_museum'] ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Nama Museum</label>
                <div class="col-xs-9">
                    <input name="nama" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['nama'] ?>">
                    <p class="text-danger"><?= form_error('nama'); ?></p>
                </div>
            </div>  


            <div class="form-group">
                <label class="control-label col-xs-3" >Lokasi</label>
                <div class="col-xs-9">
                <select class="form-control" name="lokasi"> 
                  <?php foreach($kota as $kot): ?>
                    <?php if($kot['kota']==$admin['lokasi']): ?>
                      <option value="<?= $kot['kota'] ?>" selected ><?= $kot['kota'] ?></option>
                    <?php  else : ?>
                      <option value="<?= $kot['kota'] ?>"><?= $kot['kota'] ?></option>
                    <?php  endif;?>
                  <?php endforeach ?>
                </select>
              </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Alamat</label>
                <div class="col-xs-9">
                    <textarea name="alamat" class="form-control" type="text" placeholder="" style="width:520px;"> <?php echo $admin['alamat'] ?></textarea>
                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                </div>
            </div> 
                        <div class="form-group">
                <label class="control-label col-xs-3" >Telepon</label>
                <div class="col-xs-9">
                    <input name="telepon" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['telepon'] ?>" >
                </div>
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
<?php
  include(APPPATH.'views/admin/v_footer.php')
?>