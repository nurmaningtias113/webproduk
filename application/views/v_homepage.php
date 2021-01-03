<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TTR Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    #hero {
      background: url("<?php echo base_url();?>assets/img/skatesepatu.jpg") top center;
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
          <li><a href="<?php echo base_url();?>index.php/sepatu/login_page">Login</a></li>

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
            <h3><a href="#">Pria</a></h3>

          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="button">
           
            <h3><a href="#">Wanita</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="button">
 
            <h3><a href="#">Anak</a></h3>
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
            <img src="<?php echo base_url();?>assets/img/sepatu.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>BARANG 100% BARU REAL PICTURE</h3>
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
                 No. 51 Yogyakarta<br><br>
                <strong>Phone:</strong> 0813 2456 0945<br>
                <strong>Email:</strong> ttrstore@gmail.com<br>
              </p>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

  <script type="text/javascript">
    $(function () {

      $("#send").click(function(){
        var nama = document.getElementById('nama').value;
        var email = document.getElementById('email').value;
        var pesanan = document.getElementById('pesanan').value;
        var keterangan = document.getElementById('keterangan').value;

        var phone = '6285725951069';
        window.open('https://api.whatsapp.com/send?phone='+phone+'&text='+ 'halo saya '+nama+' (email : ' +email+ ') ingin memesan '+pesanan+' dengan ketentuan '+ keterangan);
    });
        
    });
</script>

</body>

</html>