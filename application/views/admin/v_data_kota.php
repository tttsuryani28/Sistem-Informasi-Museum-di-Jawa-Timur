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
                Data Kota <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: orange">Data Kota</h2>   
                    </div>
                </div>
<hr />
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="<?php echo base_url('admin/c_data_kota/tambah_kota') ?>" class="btn btn-md btn-warning"><i class="fa fa-plus"></i>Tambah Data Kota</a>
            
            <table class="table table-bordered table-striped" style="margin-top: 20px;text-align: center;">
              <thead>
                <tr>
                  <th> No. </th>
                  <th> Kode </th>
                  <th> Kota </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $id_kota = 0; 
                    foreach ($data as $admin) :
                    $id_kota++
                  ?>
                  <td><?php echo $id_kota ?></td>
                  <td><?php echo $admin['kode'] ?></td>
                  <td><?php echo $admin['kota'] ?></td>
                  <td>
                    <a href="<?php echo base_url('admin/c_data_kota/edit_kota/') ?><?php echo $admin['id_kota']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_data_kota/hapus_kota/') ?><?php echo $admin['id_kota']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>