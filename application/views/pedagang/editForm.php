  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Pedagang</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('pedagang')?>">Data Pedagang</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
        <div class="box box-warning">
            <div class="box-header with-border">
            <br>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="noip">Nomor Induk Pedagang</label>
                            <input type="text" name="noip" class="form-control" id="noip" value="<?= $pedagang['NOIP']?>">
                            <small class="form-text text-danger"><?= form_error('noip')?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $pedagang['NAMA_PDG']?>">
                            <small class="form-text text-danger"><?= form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>&nbsp;<small>(Laki - Laki / Perempuan)</small>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $pedagang['JENIS_KELAMIN_PDG']?>">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $pedagang['TEMPAT_LAHIR_PDG']?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $pedagang['TANGGAL_LAHIR_PDG']?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"><?= $pedagang['ALAMAT_PDG']?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-success"></input>
                            <a href="<?=site_url('pedagang');?>" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
      <!-- /.row -->