  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Harga</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('data_harga')?>">Data Harga</a></li>
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    
      <!-- Default box -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="" method="POST">
                        <!-- text input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Id Laporan</label>
                                <input type="text" name="id_laporan" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?=form_error('id_laporan')?></small>
                            </div>
                            <div class="form-group">
                              <label for="nama_komoditas">Nama Komoditas</label>
                              <select name="id_komoditas" id="id_komoditas" class="form-control">
                                    <option value=" ">--- Pilih ---</option>
                                    <?php foreach ($komoditas as $data) { ?>
                                        <option value="<?= $data['KD_KOMODITAS'];?>"><?=$data['NAMA_KOMODITAS'];?></option>
                                    <?php } ?>
                                    <!-- <small class="form-text text-danger"><?=form_error('nama_komoditas')?></small> -->
                              </select>
                              <small class="form-text text-danger"><?=form_error('id_komoditas')?></small>
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <select name="satuan" id="satuan" class="form-control">
                                    <option value=" ">--- Pilih ---</option>
                                    <?php foreach ($komoditas as $data) { ?>
                                        <option value="<?= $data['KD_KOMODITAS'];?>"><?=$data['SATUAN'];?></option>
                                    <?php } ?>
                                </select> 
                                <small class="form-text text-danger"><?=form_error('satuan')?></small>
                                <!-- <input type="text" name="satuan" class="form-control" placeholder="Enter ..."> -->
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?=form_error('harga')?></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal_laporan" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?=form_error('tanggal_laporan')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Tambah"></input>
                                <a href="<?= site_url('data_harga')?>" class="btn btn-warning">Kembali</a>
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
