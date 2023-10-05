  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Pedagang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('pedagang')?>">Data Pedagang</a></li>
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
                    <form role="form" action=" " method="post">
                        <!-- text input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk Pedagang</label>
                                <input type="text" name="noip" id="noip" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?= form_error('noip')?></small>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter ...">
                                <small class="form-text text-danger"><?= form_error('nama')?></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Enter ...">
                                <small class="form-text text-danger"><?= form_error('jenis_kelamin')?></small>
                            </div>
                            <div class="form-group">
                                <label>Tampat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Enter ...">
                                <small class="form-text text-danger"><?= form_error('tempat_lahir')?></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" >
                                <small class="form-text text-danger"><?= form_error('tanggal_lahir')?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                                <small class="form-text text-danger"><?= form_error('alamat')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Tambah" class="btn btn-primary"></input>
                                <a href="<?=site_url('pedagang');?>" class="btn btn-warning">Kembali</a>
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
