  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('pegawai')?>">Data Pegawai</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    
      <!-- Default box -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <div class="box-body">
                    <form role="form" action="" method="POST">
                        <!-- text input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk Pegawai</label>
                                <input type="text" name="NIP" class="form-control" value="<?= $pegawai->NIP?>">
                                <small class="form-text text-danger"><?= form_error('NIP')?></small>
                            </div>
                            <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input type="text" name="NIK" class="form-control" value="<?= $pegawai->NIK?>" id="NIK">
                                <small class="form-text text-danger"><?= form_error('NIK')?></small>
                            </div>
                            <div class="form-group">
                                <label>Nomor Pokok Wajib Pajak</label>
                                <input type="text" name="NPWP" class="form-control" value="<?= $pegawai->NPWP?>" >
                                <small class="form-text text-danger"><?= form_error('NPWP')?></small>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $pegawai->NAMA_PGW?>">
                                <small class="form-text text-danger"><?= form_error('nama')?></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value="<?= $pegawai->JENIS_KELAMIN_PGW?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="<?= $pegawai->TEMPAT_LAHIR_PGW?>">
                                <small class="form-text text-danger"><?= form_error('tempat_lahir')?></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?= $pegawai->TANGGAL_LAHIR_PGW?>">
                                <small class="form-text text-danger"><?= form_error('tanggal_lahir')?></small>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"><?= $pegawai->ALAMAT_PGW?></textarea>
                                <small class="form-text text-danger"><?= form_error('alamat')?></small>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="text" name="no_telepone" class="form-control" value="<?= $pegawai->NO_TELEPONE?>">
                                <small class="form-text text-danger"><?= form_error('no_telepone')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-success"></input>
                                <a href="<?=site_url('pegawai');?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
