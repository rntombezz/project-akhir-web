<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TOPUP IGAMES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="genshinimpact.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">TOPUP IGAMES</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../mobilelegends/mobilelegends.php">Mobile Legends</a></li>
          <li><a class="nav-link scrollto" href="../freefire/freefire.php">Free Fire</a></li>
          <li><a class="nav-link scrollto" href="../pubg/pubg.php">PUBG Mobile</a></li>
          <li><a class="nav-link scrollto active" href="../genshinimpact/genshinimpact.php">Genshin Impact</a></li>
          <?php if(@$_SESSION['status']){ ?>
                    <li><a class="getstarted scrollto" href="../logout.php">Logout</a></li>
                    <?php }else{ ?>
                    <li><a class="getstarted scrollto" href="../login/login.php">Login</a></li>
                    <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <img src="../assets/img/icon/genshin.png"><br><br>
          <h1>Genshin Impact</h1>
        </div>
        <form method="POST" action="cekgenshinimpact.php">
        <div class="icon-text">
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h1>Masukkan User ID</h1>
            <div class="form">
              <input type="number" name="userid" required>
            </div>
          </div>
        </div>
        <div class="row icon-boxes">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 pilihan" data-aos="fade-down" data-aos-delay="100">
            <input type="radio" name="qty" id="1" value="150 GC" required>
            <label for="1"><center><strong>150 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 10.000</center></label>
            <input type="radio" name="qty" id="2" value="350 GC" required>
            <label for="2"><center><strong>350 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 25.000</center></label>
            <input type="radio" name="qty" id="3" value="750 GC" required>
            <label for="3"><center><strong>750 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 50.000</center></label>
            <input type="radio" name="qty" id="4" value="1500 GC" required>
            <label for="4"><center><strong>1500 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 100.000</center></label>
            <input type="radio" name="qty" id="5" value="3000 GC" required>
            <label for="5"><center><strong>3000 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 200.000</center></label>
            <input type="radio" name="qty" id="6" value="6000 GC" required>
            <label for="6"><center><strong>6000 GC <h6>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6></strong>Rp 400.000</center></label>
          </div>
        </div>
        <div class="icon-text2">
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h1>Pilih Metode Pembayaran</h1>
          </div>
          <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 bayar" data-aos="flip-up" data-aos-delay="100">
              <input type="radio" name="bayar" id="dana" value="Dana" required>
              <label for="dana"><img src="../assets/pembayaran/dana.png"></label>
              <input type="radio" name="bayar" id="ovo" value="OVO" required>
              <label for="ovo"><img src="../assets/pembayaran/ovo.png"></label>
              <input type="radio" name="bayar" id="gopay" value="Gopay" required>
              <label for="gopay"><img src="../assets/pembayaran/gopay.png"></label>
              <input type="radio" name="bayar" id="shopeepay" value="Shopee Pay" required>
              <label for="shopeepay"><img src="../assets/pembayaran/shopeepay.png"></label>
            </div>
          </div>
        </div>
        <div class="icon-text" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h1>Masukkan Nomor Telepon</h1>
            <div class="form">
              <input type="number" name="telepon" required>
            </div>
          </div>
        </div>
        <div class="button" data-aos="fade-right" data-aos-delay="100">
          <input type="submit" value="Order Sekarang" class="tombol" name="genshinimpact">
        </div>
        </form>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>TOPUP IGAMES</h3>
            <p>
              Jalan MT.Haryono <br>
              Balikpapan, NT 535022<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 8558 9554 80<br>
              <strong>Email:</strong> topupIGAMES@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../mobilelegends/mobilelegends.php">Mobile Legends</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../freefire/freefire.php">Free Fire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../pubg/pubg.php">PUBG Mobile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../genshinimpact/genshinimpact.php">Genshin Impact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Saran dan Kritik</h4>
            <p>Silahkan tambahkan saran atau kritik tentang website topup kami, Terimakasih</p>
            <form method="POST" action="cekgenshinimpact.php">
              <input type="text" name="saran"><input type="submit" value="Kirim" name="genshinimpact2">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>TOPUP IGAMES</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">C2 KELOMPOK 7</a>
        </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>