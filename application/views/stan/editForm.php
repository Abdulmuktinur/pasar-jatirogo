 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Stan</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?=site_url('stan')?>">Data Stan</a></li>
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
                                <label>Nomor Stan</label>
                                <input type="text" name="nomor_stan" class="form-control" value="<?= $stan['NOMOR_STAN']?>">
                                <small class="form-text text-danger"><?=form_error('nomor_stan')?></small>
                            </div>
                            <div class="form-group">
                                <label for="NOIP">Nama Pedagang</label>
                                <select class="form-control" id="NOIP" name="NOIP">
                                    <?php 
                                    foreach($pedagang->result() as $key => $data){?>
                                        <option value="<?=$data->NOIP?>" <?=$data->NOIP == $stan['NOIP'] ? "selected" : null ?>><?=$data->NAMA_PDG?></option>
                                    <?php }?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('NOIP')?></small>
                            </div>
                            <div class="form-group">
                                <label for="ID_CATEGORY">Category</label>
                                <select class="form-control" id="ID_CATEGORY" name="ID_CATEGORY">
                                    <?php 
                                    foreach($category->result() as $key => $data){?>
                                        <option value="<?=$data->ID_CATEGORY?>" <?=$data->ID_CATEGORY == $stan['ID_CATEGORY'] ? "selected" : null ?>><?=$data->CATEGORY?></option>
                                    <?php }?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('ID_CATEGORY')?></small>
                            </div>
                            <div class="form-group">
                                <label for="KD_KONTRAK">Biaya</label>
                                <select class="form-control" id="KD_KONTRAK" name="NOIP">
                                    <?php 
                                    foreach($biaya->result() as $key => $data){?>
                                        <option value="<?=$data->KD_KONTRAK?>" <?=$data->KD_KONTRAK == $stan['KD_KONTRAK'] ? "selected" : null ?>><?=$data->BIAYA?></option>
                                    <?php }?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('ID_CATEGORY')?></small>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Stan</label>
                                <input type="text" name="lokasi_stan" class="form-control" value="<?= $stan['LOKASI_STAN']?>">
                                <small class="form-text text-danger"><?=form_error('lokasi_stan')?></small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-success"></input>
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
