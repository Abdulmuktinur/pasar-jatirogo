  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Komoditas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('komoditas')?>">Data Komoditas</a></li>
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
                                <label>Kode Komoditas</label>
                                <input type="text" name="id_komoditas" class="form-control" value="<?= $komoditas->KD_KOMODITAS?>">
                                <small class="form-text text-danger"><?=form_error('id_komoditas')?></small>
                            </div>
                            <div class="form-group">
                                <label>Nama Komoditas</label>
                                <input type="text" name="nama_komoditas" class="form-control" value="<?= $komoditas->NAMA_KOMODITAS?>">
                                <small class="form-text text-danger"><?=form_error('nama_komoditas')?></small>
                            </div>
                            <div class="form-group">
                                <label for="ID_CATEGORY">Category</label>
                                <select class="form-control" id="ID_CATEGORY" name="ID_CATEGORY">
                                    <?php 
                                    foreach($category->result() as $key => $data){?>
                                        <option value="<?=$data->ID_CATEGORY?>" <?=$data->ID_CATEGORY == $komoditas->ID_CATEGORY ? "selected" : null ?>><?=$data->CATEGORY?></option>
                                    <?php }?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('ID_CATEGORY')?></small>
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="text" name="satuan" class="form-control" value="<?=$komoditas->SATUAN?>">
                                <small class="form-text text-danger"><?=form_error('satuan')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-success"></input>
                                <a href="<?=site_url('komoditas');?>" class="btn btn-warning">Kembali</a>
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
