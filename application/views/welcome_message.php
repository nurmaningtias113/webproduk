<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    #hero {
      background: url("assets/img/skatesepatu.jpg") top center;
      background-size: cover;
      position: relative;
  }
  </style>

  <!-- =======================================================
  * Template Name: Gp - v2.2.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">TTR Store<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Menu Utama</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>JELAJAH <span> SEPATU </span></h1>
          <h2>Terbaikmu Disini</h2>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="button">
            <h3><a href="#sepatu-pria">Pria</a></h3>

          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="button">
           
            <h3><a href="#sepatu-wanita">Wanita</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="button">
 
            <h3><a href="#sepatu-anak">Anak - Anak</a></h3>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/sepatu.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>BARANG 100% BARU REAL PICT</h3>
            <p class="font-italic">
              Empuk, Ringan, Elastis<br>
              <b>Beli Sepatu Gratis BOX</b>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Model Baru dan Keren </li>
              <li><i class="ri-check-double-line"></i> Sepatu Casual Cocok untuk bepergian, jalan, kerja, dll</li>
              <li><i class="ri-check-double-line"></i> Sepatu berkualitas dengan harga bersahabat</li>
            </ul>
            <p>
             TTR Store merupakan toko sepatu online yang didirikan pada tanggal 19 Desember 2020 di Yogyakarta. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="sepatu-pria" class="counts">
      <div class="container" data-aos="fade-up">
         <?php foreach ($sepatu_pria->result_array() as $pria) { ?>
        <div class="row no-gutters">
         <!-- <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>-->
         <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100">
            <?php echo '<img width = "100%" src="data:image/jpeg;base64,'.base64_encode( $pria['Foto'] ).'"/>'; ?>
         </div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3><?php echo $pria['Jenis'];?> <?php echo $pria['Merk'];?></h3>
              <h5> id : <?php echo $pria['id'];?></h5>
              <h5> Harga : <?php echo $pria['Harga'];?></h5>
              <h5> Stok : <?php echo $pria['Stok'];?></h5>
              <h5> Ukuran : <?php echo $pria['Ukuran'];?></h5>
            </div><!-- End .content-->
          </div>
        </div>
         <?php } ?>
      </div>
    </section><!-- End Counts Section -->

      <section id="sepatu-wanita" class="counts">
      <div class="container" data-aos="fade-up">
         <?php foreach ($sepatu_wanita->result_array() as $wanita) { ?>
        <div class="row no-gutters">
         <!-- <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>-->
         <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100">
            <?php echo '<img width = "100%" src="data:image/jpeg;base64,'.base64_encode( $wanita['Foto'] ).'"/>'; ?>
         </div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3><?php echo $wanita['Jenis'];?> <?php echo $wanita['Merk'];?></h3>
              <h5> id : <?php echo $wanita['id'];?></h5>
              <h5> Harga : <?php echo $wanita['Harga'];?></h5>
              <h5> Stok : <?php echo $wanita['Stok'];?></h5>
              <h5> Ukuran : <?php echo $wanita['Ukuran'];?></h5>
            </div><!-- End .content-->
          </div>
        </div>
         <?php } ?>
      </div>
    </section><!-- End Counts Section -->
     <section id="sepatu-anak" class="counts">
      <div class="container" data-aos="fade-up">
         <?php foreach ($sepatu_anak->result_array() as $anak) { ?>
        <div class="row no-gutters">
         <!-- <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>-->
         <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100">
            <?php echo '<img width = "100%" src="data:image/jpeg;base64,'.base64_encode( $anak['Foto'] ).'"/>'; ?>
         </div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3><?php echo $anak['Jenis'];?> <?php echo $anak['Merk'];?></h3>
              <h5> id : <?php echo $anak['id'];?></h5>
              <h5> Harga : <?php echo $anak['Harga'];?></h5>
              <h5> Stok : <?php echo $anak['Stok'];?></h5>
              <h5> Ukuran : <?php echo $anak['Ukuran'];?></h5>
            </div><!-- End .content-->
          </div>
        </div>
         <?php } ?>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ttrstore@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>whatsApp</h4>
                <p>0813 2456 0945</p>
              </div>

            </div>

          </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>TTR Store<span>.</span></h3>
              <p>
                Jl. Tentara Rakyat Mataram <br>
                 nO. 51 Yogyakarta<br><br>
                <strong>Phone:</strong> 0813 2456 0945<br>
                <strong>Email:</strong> ttrstore@gmail.com<br>
              </p>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>