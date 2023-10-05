<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pasar Jatirogo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/components/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/owl.carousel/<?=base_url()?>assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/components/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/components/css/style.css" rel="stylesheet">

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
          <li class="active"><a href="<?=base_url('user')?>">BERANDA</a></li>
          <li><a href="#tentang">TENTANG</a></li>
          <li class="drop-down"><a href="#datapasar">DATA PASAR</a>
            <ul>
              <li><a href="<?=site_url('U_Data_Pegawai')?>">Data Pegawai</a></li>
              <li><a href="<?=site_url('U_Data_Pedagang')?>">Data Pedagang</a></li>
              <li><a href="<?=site_url('U_Data_Harga')?>">Data Harga Komoditas</a></li>
            </ul>
          </li>
          <li><a href="#komoditas">KOMODITAS</a></li>
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
          <img src="<?=base_url()?>assets/components/icon/homemin.svg" class="img-fluid animated" alt="">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang di Website</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Unit Pelaksana Teknis Daerah (UPTD) Pasar Jatirogo</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#tentang" class="btn-get-started scrollto">Go</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="tentang" class="tentang">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p style="text-align: justify;">
              Pasar tradisional Jatirogo  merupakan unit pelaksana teknis daerah yang berada di bawah naungan Dinas Koperasi Perindustrian dan Perdagangan Kabupaten Tuban. Berlokasi di Jl. Ronggolawe No.01, Sadang, Jatirogo, Kabupaten Tuban, pasar ini menjadi pusat transaksi ekonomi masyarakat Jatirogo. Berbagai produk dan komoditas yang bisa dijumpai di dalamnya, layaknya pasar tradisional pada umumnya.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p style="text-align: justify;">
              Pasar Jatirogo dibangun pada tahun 1991 dan telah direvitalisasi pada tahun 2001. Hingga saat ini, Pasar Jatirogo masih ramai dikunjungi masyarakat baik dari dalam area Jatirogo, maupun dari kecamatan lainnya. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Data Pasar ======= -->
    <section id="datapasar" class="datapasar">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>DATA PASAR</h2>
          <p>Informasi mengenai data pegawai, pedagang, stan pasar serta data harga komoditas.</p>
        </div>

        <div class="row" style="margin-left: 150px; margin-right: -75px;">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="<?=site_url('U_Data_Pegawai')?>">Daftar Pegawai</a></h4>
              <p class="description">Informasi pegawai UPTD Pasar Jatirogo.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="<?=site_url('U_Data_Pedagang')?>">Daftar Pedagang</a></h4>
              <p class="description">Informasi pedagang UPTD Pasar Jatirogo.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="<?=site_url('U_Data_Harga')?>">Daftar Harga Komoditas Perhari</a></h4>
              <p class="description">Informasi data harga komoditas selama lima hari terakhir.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Komoditas Section ======= -->
    <section id="komoditas" class="komoditas">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>KOMODITAS</h2>
          <p>Informasi Komoditas yang di jual di Pasar Jatirogo.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4 komoditas-img">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/sembako.svg" alt="">
              <h3><a href="">Sembako</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Buah dan Sayur.svg" alt="">
              <h3><a href="">Sayur dan Buah</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Alat Rumah Tangga.svg" alt="">
              <h3><a href="">Perkakas</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Pakaian.svg" alt="">
              <h3><a href="">Pakaian</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Makanan.svg" alt="">
              <h3><a href="">Makanan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Daging Sapi, Ayam dan Ikan.svg" alt="">
              <h3><a href="">Daging</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/snack.svg" alt="">
              <h3><a href="">Camilan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img width="22%" src="<?=base_url()?><?=base_url()?>assets/components/icon/Lainnya.svg" alt="">
              <h3><a href="">Lainnya</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

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

</body>
</html>