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
                Edit Pameran <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Edit Pameran</h2>   
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
              <input type="hidden" name="id" value="<?php echo $admin['id_pameran']; ?>">
            </div>  
            <div class="form-group">
                
                <div class="col-xs-9">
                    <input name="id_pameran" class="form-control" type="hidden" placeholder="" style="width:280px;" value="<?php echo $admin['id_pameran'] ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Nama Pameran</label>
                <div class="col-xs-9">
                    <input name="nama_pameran" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['nama_pameran'] ?>">
                    <p class="text-danger"><?= form_error('nama_pameran'); ?></p>
                </div>
            </div>   

            <div class="form-group">
                <label class="control-label col-xs-3" >Kota</label>
                <div class="col-xs-9">
                <select class="form-control" name="kota"> 
                  <?php foreach($pameran as $kota): ?>
                    <?php if($kota['kota']==$admin['kota']): ?>
                      <option value="<?= $kota['kota'] ?>" selected ><?= $kota['kota'] ?></option>
                    <?php  else : ?>
                      <option value="<?= $kota['kota'] ?>"><?= $kota['kota'] ?></option>
                    <?php  endif;?>
                  <?php endforeach ?>
                </select>
              </div>

          <div class="form-group">
                <label class="control-label col-xs-3" >Lokasi</label>
                <div class="col-xs-9">
                    <input name="alamat" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['alamat'] ?>">
                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                </div>
            </div> 
          </div>

          <div class="form-group">
                <label class="control-label col-xs-3" >Tanggal Pameran</label>
                <div class="col-xs-9">
                    <input name="tanggal_pameran" class="form-control" type="date" placeholder="" style="width:280px;" value="<?php echo $admin['tanggal_pameran'] ?>">
                    <p class="text-danger"><?= form_error('tanggal_pameran'); ?></p>
                </div>
            </div> 
          </div>
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