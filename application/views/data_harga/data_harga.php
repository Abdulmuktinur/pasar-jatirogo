<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header" style="padding : 15px 5px 0 5px">
        <h1> Data 
          <small>Harga Komoditas</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Harga Komoditas</li>
        </ol>
    </section>

    <section class="content" style="padding : 15px 5px"> 
      <div class="box">
          <div class="box-header">
              <!-- <h3 class="box-tittle">Data Admin</h3> -->
              <div class="pull-right">
                  <a href="<?=site_url('data_harga/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Tambah
                  </a>
              </div>
          </div>
          <?php if($this->session->flashdata('flash') ) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Data harga komoditas<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
            </div>
          <?php endif;?>
          <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Komoditas</th>
                      <th>Satuan</th>
                      <th> <?= date("d M Y", strtotime("-4 days")) ?></th>
                      <th> <?= date("d M Y", strtotime("-3 days")) ?></th>
                      <th> <?= date("d M Y", strtotime("-2 days")) ?></th>
                      <th> <?= date("d M Y", strtotime("-1 days")) ?></th>
                      <th> <?= date("d M Y") ?></th>
                      <th class="text-center">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $data = $this->M_data_harga->groupData();
                      foreach($data as $dt): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt['NAMA_KOMODITAS'] ?></td>
                                <td><?= $dt['SATUAN'] ?></td>
                                <td><?= $dt[date('Y-m-d', strtotime("-4 days"))] ?></td>
                                <td><?= $dt[date('Y-m-d', strtotime("-3 days"))] ?></td>
                                <td><?= $dt[date('Y-m-d', strtotime("-2 days"))] ?></td>
                                <td><?= $dt[date('Y-m-d', strtotime("-1 days"))] ?></td>
                                <td><?= $dt[date('Y-m-d')] ?></td>
                                <td class="text-center">
                                    <form action="<?= site_url('data_harga/hapus')?>" method= "POST">
                                      <input type="hidden" name="ID_LAPORAN" value="<?=$dt['ID_LAPORAN']?>" >
                                      <button onClick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-flat btn-xs" >
                                        Hapus
                                      </button>
                                    </form>
                                </td>
                            </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
            </div>
        </div>
    </section>
</div>