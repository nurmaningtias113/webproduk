<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

  <title>TTR STORE</title>
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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="active"><a href="#hero">TTR Store<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Menu Utama</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li> <a href="<?php echo base_url();?>index.php/sepatu/logout">Logout</a></li>
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
 
            <h3><a href="#sepatu-anak">Anak</a></h3>
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
              <h3><?php echo $pria['Jenis'];?></h3>
              <h3><?php echo $pria['Merk'];?></h3>
              <h5> id : <?php echo $pria['id'];?></h5>
              <h5> Harga : <?php echo $pria['Harga'];?></h5>
              <h5> Stok : <?php echo $pria['Stok'];?></h5>
              <h5> Ukuran : <?php echo $pria['Ukuran'];?></h5>
              <td>
              <form method="POST">
              <button type="button" class="btn btn-outline-warning"><a href="#contact">PESAN</a></button>
              </form>
              </td>
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
              <h3><?php echo $wanita['Jenis'];?></h3>
              <h3><?php echo $wanita['Merk'];?></h3>
              <h5> id : <?php echo $wanita['id'];?></h5>
              <h5> Harga : <?php echo $wanita['Harga'];?></h5>
              <h5> Stok : <?php echo $wanita['Stok'];?></h5>
              <h5> Ukuran : <?php echo $wanita['Ukuran'];?></h5>
              <td>
              <form method="POST">
              <button type="button" class="btn btn-outline-warning"><a href="#contact">PESAN</a></button>
              </form>
              </td>
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

              <h3><?php echo $anak['Jenis'];?></h3>
              <h3><?php echo $anak['Merk'];?></h3>
              <h5> id : <?php echo $anak['id'];?></h5>
              <h5> Harga : <?php echo $anak['Harga'];?></h5>
              <h5> Stok : <?php echo $anak['Stok'];?></h5>
              <h5> Ukuran : <?php echo $anak['Ukuran'];?></h5>
              <td>
              <form method="POST">
              <button type="button" class="btn btn-outline-warning"><a href="#contact">PESAN</a></button>
              </form>
              </td>
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
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Tentara Rakyat Mataram No. 51 Yogyakarta</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ttrstore4@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0813 2456 0945</p>
              </div>

            </div>
         <!-- ======= SEND WhatsApp ======= -->
          </div>
           <div class="col-lg-8 mt-5 mt-lg-0">
            <form role="form" class="php-email-form">
                <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pesanan" id="pesanan" placeholder="Subject"/>
                <div class="validate"></div>
              </div>
                <div class="form-group">
                <textarea class="form-control" name="keterangan" rows="5" id="keterangan" placeholder="Tulis rincian pesanan berdasarkan ID barang"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="alamat" rows="5" id="alamat" placeholder="alamat penerima"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3"> 
              </div>
              <button id="send"> Send WhatsApp</button> 
              </form>
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
                 No. 51 Yogyakarta<br><br>
                <strong>Phone:</strong> 0813 2456 0945<br>
                <strong>Email:</strong> ttrstore4@gmail.com<br>
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
        var alamat = document.getElementById('alamat').value;

        var phone = '6285799870131';
        window.open('https://api.whatsapp.com/send?phone='+phone+'&text='+ 'halo saya '+nama+' (email : ' +email+ ') ingin memesan '+pesanan+' dengan rincian '+keterangan+' alamat penerima '+ alamat);
    });
        
    });
</script>

</body>

</html>