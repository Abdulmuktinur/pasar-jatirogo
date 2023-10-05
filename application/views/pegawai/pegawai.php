<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header" style="padding : 15px 5px 0 5px">
        <h1> Data 
          <small>Pegawai</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Pegawai</li>
        </ol>
    </section>

    <section class="content" style="padding : 15px 5px"> 
      <div class="box">
          <div class="box-header">
              <!-- <h3 class="box-tittle">Data Admin</h3> -->
                <div class="pull-right">
                    <a href="<?=site_url('pegawai/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah
                    </a>
                </div>
          </div>
          <?php if($this->session->flashdata('flash') ) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Data pegawai<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
            </div>
          <?php endif;?>
          <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nomor Induk Pegawai</th>
                          <th>Nomor Pokok Wajib Pajak</th>
                          <th>Nomor Induk Keluarga</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>No Handphone</th>
                          <th class="text-center">Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                          $no = 1;
                          // include 'dataStatis.php';
                          foreach ($pegawai->result() as $key => $data) {?>
                          <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->NIP ?></td>
                            <td><?= $data->NIK ?></td>
                            <td><?= $data->NPWP ?></td>
                            <td><?= $data->NAMA_PGW ?></td>
                            <td><?= $data -> JENIS_KELAMIN_PGW?></td>
                            <td><?= $data->TEMPAT_LAHIR_PGW ?></td>
                            <td><?= date('d M Y', strtotime($data->TANGGAL_LAHIR_PGW));?></td>
                            <td><?= $data->ALAMAT_PGW?></td>
                            <td><?= $data->NO_TELEPONE ?></td>
                            <td class="text-center">
                              <a href="<?= site_url('pegawai/ubah/'.$data->NIP)?>" class="btn btn-primary btn-flat btn-xs">Ubah</a>
                              <form action="<?= site_url('pegawai/hapus')?>" method= "POST">
                                <input type="hidden" name="NIP" value="<?=$data->NIP?>" >
                                <br>
                                <button onClick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-flat btn-xs" >
                                  Hapus
                                </button>
                              </form>
                            </td>
                          </tr>
                    <?php }?>
                  </tbody>
              </table>
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>