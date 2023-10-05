<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pasar Jatirogo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/components/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/components/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="<?=base_url()?>assets/components/dt/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/components/dt/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/components/dt/css/responsive.bootstrap4.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?=base_url('user')?>"><span>Pasar Jatirogo</span></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?=site_url('user')?>">BERANDA</a></li>
          <li><a href="<?=site_url('user')?>">TENTANG</a></li>
          <li class="active drop-down"><a href="#datapasar">DATA PASAR</a>
            <ul>
              <li><a href="<?=site_url('u_data_pegawai')?>">Data Pegawai</a></li>
              <li><a href="<?=site_url('u_data_pedagang')?>">Data Pedagang</a></li>
              <li><a href="<?=site_url('u_data_harga')?>">Data Harga Komoditas</a></li>
            </ul>
          </li>
          <li><a href="<?=site_url('user')?>">KOMODITAS</a></li>
          <li><a href="#contact">KONTAK</a></li>
          <?php $query=$this->session->userdata('admin_id');
          if ($query) { ?>
            <li class="get-started">
              <a href="<?=site_url('Login/logout')?>">Sign Out</a>
            </li>
          <?php } else { ?>
            <li class="get-started">
              <a href="<?=site_url('login')?>">Login</a>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?=base_url()?>assets/components/icon/stan pasar.svg" class="img-fluid animated" width="50%" alt="">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Data Stan Pasar</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Informasi mengenai stan pasar <br>Unit Pelaksana Teknis Daerah Pasar Jatirogo.</h2>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= data pegawai ======= -->
    <section id="data_stan_pasar" class="datapasar">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Data Stan Pasar</h2>
          </div>
        <section class="content" data-aos="fade-up">
          <div class="box">
            <div class="box-body table-responsive">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nomor Stan</th>
                  <th>Nama Pedagang</th>
                  <th>Blok Stan</th>
                  <th>Barang Dagangan</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                          $no = 1;
                        foreach ($pedagang as $row) :?>
                        <tr>
                          <td><?= $no++?>.</td>
                          <td><?= $row['NOMOR_STAN']?></td>
                          <td><?= $row['NAMA_PDG']?></td>
                          <td><?= $row['LOKASI_STAN']?></td>
                          <td><?= $row['CATEGORY']?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
              </table>
              <a href="<?=site_url('u_data_pedagang')?>" class="btn btn-primary btn-flat">Kembali</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>KONTAK</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Lokasi Pasar Jatirogo</h3>
              <!-- <p>Unit Pelaksana Teknis Daerah Pasar Jatirogo adalah pasar tradisional yang berada di wilayah kecamatan jatirogo yang bertanggung jawab secara langsung ke DINAS KOPERASI DAN PERDAGANGAN</p> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.07791754172!2d111.65414825!3d-6.88826985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77135ea7e30477%3A0x282063effdb8c288!2sPasar%20Jatirogo!5e0!3m2!1sid!2sid!4v1611215228142!5m2!1sid!2sid" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <div class="info">
                <div>
                  <i class="ri-map-pin-line"></i>
                  <p>Jl. Ronggolawe No.01, Ds. Sadang, Kec. Jatirogo, Tuban, Jawa Timur 62362</p>
                </div>

                <div>
                  <i class="ri-mail-send-line"></i>
                  <p>pasarjatirogo@gmail.com</p>
                </div>

                <div>
                  <i class="ri-phone-line"></i>
                  <p>(0356)551355</p>
                </div>
              </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>UPTD</strong>. Pasar Jatirogo
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/components/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url()?>assets/components/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/components/js/main.js"></script>

  <script src="<?=base_url()?>assets/components/dt/js/jquery-3.5.1.js"></script>
  <script src="<?=base_url()?>assets/components/dt/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/components/dt/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/components/dt/js/dataTables.responsive.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function () {
      $('#table1').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
  </script>

</body>
</html>