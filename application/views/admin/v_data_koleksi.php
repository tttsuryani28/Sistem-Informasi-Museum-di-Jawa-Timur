<?php
  include(APPPATH.'views/admin/v_header.php');
?> 
<?php
  include(APPPATH.'views/admin/v_sidebar.php');
?> 
<div id="page-wrapper" >
    <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"> 
            
            <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data Koleksi <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Data Koleksi</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                <a href="<?php echo base_url('admin/c_data_koleksi/tambah_koleksi') ?>" class="btn btn-md btn-warning"><i class="fa fa-plus"></i>Tambah Koleksi</a>
                
                <a href="<?php echo base_url('admin/c_data_koleksi/pdf/') ?><?= $kondisi ?>" class="btn btn-md btn-warning"><i class="fa fa-print"></i>Cetak PDF</a>

                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-filter"></i>Filter</button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a class = "dropdown-item" href="<?php echo base_url('admin/c_data_koleksi/getkategori/0/') ?>">All</a> </li>
                    <?php foreach($kategori as $kat): ?>
                   
                    <li role="presentation"><a class = "dropdown-item" href="<?php echo base_url()?>admin/c_data_koleksi/getkategori/<?= $kat['id_kategori'] ?>"> <?= $kat['kategori'] ?></a></li>
                    <?php endforeach ?>
                  </ul>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
            <table class="table table-bordered table-striped" style="margin-top: 20px;text-align: center;">
              <thead>
                <tr>
                  <th> No.</th>
                  <th> Museum</th>
                  <th> Nama</th>
                  <th> Kategori </th>
                  <th> Deskripsi </th>
                  <th> Tanggal Masuk </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  $i=1;
                  foreach ($koleksi as $admin) :
                    ?>
                  <td><?php echo $i ?></td>
                  <td><?php echo $admin['museum'] ?></td>
                  <td><?php echo $admin['nama'] ?></td>
                  <td><?php echo $admin['kategori'] ?></td>
                  <td><?php echo $admin['deskripsi'] ?></td>
                  <td><?php echo $admin['tanggal_masuk'] ?></td>
                  <td>
                    <a href="<?php echo base_url('admin/c_data_koleksi/edit_koleksi/') ?><?php echo $admin['id_benda']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_data_koleksi/hapus_koleksi/') ?><?php echo $admin['id_benda']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
                  </td>
                </tr>
                <?php $i++ ?> 
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include(APPPATH.'views/admin/v_footer.php')
?>