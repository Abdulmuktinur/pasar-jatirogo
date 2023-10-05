  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Stan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Stan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
          <div class="box-header">
              <!-- <h3 class="box-tittle">Data Admin</h3> -->
              <?php if($this->session->userdata('admin_id') == 1) {?>
                <div class="pull-right">
                    <a href="<?=site_url('stan/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah
                    </a>
                </div>
              <?php }?>
          </div>
          <?php if($this->session->flashdata('flash') ) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Data stan<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
            </div>
          <?php endif;?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nomor Stan</th>
                  <th>Nama Pedagang</th>
                  <th>Barang Dijual</th>
                  <th>Biaya Stan</th>
                  <th>Lokasi Stan</th>
                  <th class="text-center">Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                          $no = 1;
                        foreach ($stan as $row) :?>
                        <!-- <?php if (date('d M Y') == date('d M Y', strtotime($row['tanggal_tenggang']))){
                              // $class = 'background:red';
                              $class = 'color:#ffffff;background:red';
                            }else{
                              // $class=null;
                              $class=null;
                            }
                            ?> -->
                        <tr>
                          <td><?= $no++?>.</td>
                          <td><?= $row['NOMOR_STAN']?></td>
                          <td><?= $row['NAMA_PDG']?></td>
                          <td><?= $row['CATEGORY']?></td>
                          <td><?= $row['BIAYA']?></td>
                          <td><?= $row['LOKASI_STAN']?></td>
                          <td class="text-center">
                              <a href="<?= site_url('stan/ubah/'.$row['NOMOR_STAN'])?>" class="btn btn-primary btn-flat btn-xs float-right">Ubah</a>
                              <form action="<?= site_url('stan/hapus')?>" method= "POST">
                                <input type="hidden" name="NOMOR_STAN" value="<?=$row['NOMOR_STAN']?>" >
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
