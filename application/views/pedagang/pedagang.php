  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data
      <small>Pedagang</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Pedagang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <?php if($this->session->userdata('admin_id') == 1) {?>
              <div class="pull-right">
                  <a href="<?=site_url('pedagang/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Tambah
                  </a>
              </div>
            <?php }?>
        </div>
        <?php if($this->session->flashdata('flash') ) : ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data pedagang<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
          </div>
        <?php endif;?>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor Induk Pedagang</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $no = 1;

                        foreach ($pedagang as $row) : ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $row['NOIP'] ?></td>
                            <td><?= $row['NAMA_PDG'] ?></td>
                            <td><?= $row['JENIS_KELAMIN_PDG'] ?></td>
                            <td><?= $row['TEMPAT_LAHIR_PDG'] ?></td>
                            <td><?= date('d M Y', strtotime($row['TANGGAL_LAHIR_PDG']))?></td>
                            <td><?= $row['ALAMAT_PDG'] ?></td>
                            <td class="text-center">
                              <a href="<?= site_url('pedagang/ubah/'.$row['NOIP'])?>" class="btn btn-primary btn-xs btn-flat float-right">Ubah</a>
                              <form action="<?= site_url('pedagang/hapus')?>" method= "POST">
                                <input type="hidden" name="NOIP" value="<?=$row['NOIP']?>" >
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