 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li class="treeview"> -->
          <!-- <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li> -->
          <li><a href="<?= site_url('pegawai')?>"><i class="fa fa-files-o"></i><span>Pegawai</span></a></li>
          <li><a href="<?= site_url('pedagang')?>"><i class="fa fa-dashboard"></i> <span>Pedagang</span></a></li>
          <li><a href="<?=site_url('stan')?>"><i class="fa fa-files-o"></i><span>Stan</span></a></li>
          <li><a href="<?=site_url('komoditas')?>"><i class="fa fa-files-o"></i><span>Komoditas</span></a></li>
          <li><a href="<?=site_url('data_harga')?>"><i class="fa fa-files-o"></i><span>Data Harga</span></a></li>
        <?php 
              $query=$this->session->userdata('admin_id');
        if (!$query) { ?>
          <li class="header">Admin</li>
          <li><a href="<?=site_url('login')?>"><i class="fa fa-circle-o text-red"></i> <span>Login</span></a></li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>