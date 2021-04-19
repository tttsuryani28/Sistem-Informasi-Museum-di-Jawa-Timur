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
                Edit Koleksi <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Edit Koleksi</h2>   
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
              <input type="hidden" name="id" value="<?php echo $admin['id_benda']; ?>">
            </div>  
            <div class="form-group">
                
                <div class="col-xs-9">
                    <input name="id_benda" class="form-control" type="hidden" placeholder="" style="width:280px;" value="<?php echo $admin['id_benda'] ?>" >
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Museum</label>
                <div class="col-xs-9">
                <select class="form-control" name="museum"> 
                  <?php foreach($koleksi as $mus): ?>
                    <?php if($mus['nama']==$admin['museum']): ?>
                      <option value="<?= $mus['nama'] ?>" selected ><?= $mus['nama'] ?></option>
                    <?php  else : ?>
                      <option value="<?= $mus['nama'] ?>"><?= $mus['nama'] ?></option>
                    <?php  endif;?>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Nama</label>
                <div class="col-xs-9">
                    <input name="nama" class="form-control" type="text" placeholder="" style="width:280px;" value="<?php echo $admin['nama'] ?>">
                    <p class="text-danger"><?= form_error('nama'); ?></p>
                </div>
            </div>   

          <div class="form-group">
                <label class="control-label col-xs-3" >Kategori</label>
                <div class="col-xs-9">

                <select class="form-control" name="kategori"> 
                  <?php foreach($kolek as $kategori): ?>
                    <?php if($kategori ==$admin['kategori']): ?>
                      <option value="<?= $kategori ?>" selected ><?= $kategori ?></option>
                    <?php  else : ?>
                      <option value="<?= $kategori ?>"><?= $kategori ?></option>
                    <?php  endif;?>
                  <?php endforeach ?>
                </select>

            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Deskripsi</label>
                <div class="col-xs-9" >
                    <textarea name="deskripsi" class="form-control" type="text" placeholder="" style="width:520px;" value="<?php echo $admin['deskripsi'] ?>"> <?php echo $admin['deskripsi'] ?> </textarea> 
                    <p class="text-danger"><?= form_error('deskripsi'); ?></p>
                </div>
            </div> 

          <div class="form-group">
                <label class="control-label col-xs-3" >Tanggal Masuk</label>
                <div class="col-xs-9">
                    <input name="tanggal_masuk" class="form-control" type="date" placeholder="" style="width:280px;" value="<?php echo $admin['tanggal_masuk'] ?>">
                    <p class="text-danger"><?= form_error('tanggal_masuk'); ?></p>
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