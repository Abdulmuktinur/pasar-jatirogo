  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Komoditas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Komoditas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
         <div class="box-header">
              <div class="pull-right">
                  <a href="<?=site_url('komoditas/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Tambah
                  </a>
              </div>
          </div>
            <?php if($this->session->flashdata('flash') ) : ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data komoditas<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
              </div>
            <?php endif;?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Komoditas</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th class="text-center">Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                          $no = 1;
                        foreach ($komoditas as $row) :?>
                        <tr>
                          <td><?= $no++?>.</td>
                          <td><?= $row['NAMA_KOMODITAS']?></td>
                          <td><?= $row['CATEGORY']?></td>
                          <td><?= $row['SATUAN']?></td>
                          <td class="text-center">
                              <a href="<?= site_url('komoditas/ubah/'.$row['KD_KOMODITAS'])?>" class="btn btn-primary btn-flat btn-xs float-right">Ubah</a>
                              <form action="<?= site_url('komoditas/hapus')?>" method= "POST">
                                <input type="hidden" name="KD_KOMODITAS" value="<?=$row['KD_KOMODITAS']?>" >
                                <br>
                                <button onClick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-flat btn-xs" >
                                  Hapus
                                </button>
                              </form>
                          </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
