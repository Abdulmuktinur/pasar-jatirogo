  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Stan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('stan')?>">Data Stan</a></li>
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
                                <label>Nomor Stan</label>
                                <input type="text" name="nomor_stan" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?=form_error('nomor_stan')?></small>
                            </div>
                            <div class="form-group">
                                <label for="NOIP">Nama Pedagang</label>
                                <select name="NOIP" id="NOIP" class="form-control">
                                    <option value=" ">--- Pilih ---</option>
                                    <?php foreach ($pedagang->result() as $key=>$data) { ?>
                                        <option value="<?= $data->NOIP;?>"><?=$data->NAMA_PDG;?></option>
                                    <?php } ?>
                                </select>
                                <small class="form-text text-danger"><?=form_error('NOIP')?></small>
                            </div>
                            <div class="form-group">
                                <label for="ID_CATEGORY">Category</label>
                                <select name="ID_CATEGORY" id="ID_CATEGORY" class="form-control">
                                    <option value=" ">--- Pilih ---</option>
                                    <?php foreach ($category->result() as $key=>$data) { ?>
                                        <option value="<?= $data->ID_CATEGORY;?>"><?=$data->CATEGORY;?></option>
                                    <?php } ?>
                                </select>
                                <small class="form-text text-danger"><?=form_error('ID_CATEGORY')?></small>
                            </div>
                            <div class="form-group">
                                <label for="KD_KONTRAK">Biaya</label>
                                <select name="KD_KONTRAK" id="KD_KONTRAK" class="form-control">
                                    <option value=" ">--- Pilih ---</option>
                                    <?php foreach ($biaya->result() as $key=>$data) { ?>
                                        <option value="<?= $data->KD_KONTRAK;?>"><?=$data->BIAYA;?></option>
                                    <?php } ?>
                                </select>
                                <small class="form-text text-danger"><?=form_error('KD_KONTRAK')?></small>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Stan</label>
                                <input type="text" name="lokasi_stan" class="form-control" placeholder="Enter ...">
                                <small class="form-text text-danger"><?=form_error('lokasi_stan')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Tambah" class="btn btn-primary"></input>
                                <a href="<?=site_url('stan');?>" class="btn btn-warning">Kembali</a>
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
