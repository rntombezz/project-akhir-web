<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TOPUIGAMES</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../topup/assets/img/favicon.png" rel="icon">
    <link href="../topup/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../topup/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../topup/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../topup/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../topup/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../topup/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../topup/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../topup/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="index.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="../topup/index.php">TOPUP IGAMES</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../topup/index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="../topup/mobilelegends/mobilelegends.php">Mobile
                            Legends</a></li>
                    <li><a class="nav-link scrollto" href="../topup/freefire/freefire.php">Free Fire</a></li>
                    <li><a class="nav-link scrollto o" href="../topup/pubg/pubg.php">PUBG Mobile</a></li>
                    <li><a class="nav-link scrollto" href="../topup/genshinimpact/genshinimpact.php">Genshin
                            Impact</a></li>
                    <?php if(@$_SESSION['status']){ ?>
                    <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
                    <?php }else{ ?>
                    <li><a class="getstarted scrollto" href="../topup/login/login.php">Login</a></li>
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
                    <h1>TOPUP IGAMES</h1>
                    <h2>Tempat Top Up Game Tercepat dan Terpercaya</h2>
                </div>

                <div class="row icon-boxes">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><img src="../topup/assets/img/icon/Layer.png"></div>
                            <h4 class="title">
                                <center><a href="../topup/mobilelegends/mobilelegends.php">Mobile Legends</a>
                                </center>
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><img src="../topup/assets/img/icon/freefire.png"></div>
                            <h4 class="title">
                                <center><a href="../topup/freefire/freefire.php">Free Fire</a></center>
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><img src="../topup/assets/img/icon/PUBG.png"></div>
                            <h4 class="title">
                                <center><a href="../topup/pubg/pubg.php">PUBG Mobile</a></center>
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><img src="../topup/assets/img/icon/Genshin.png"></div>
                            <h4 class="title">
                                <center><a href="../topup/genshinimpact/genshinimpact.php">Genshin Impact</a>
                                </center>
                            </h4>
                        </div>
                    </div>

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
                                <strong>Email:</strong> igames@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="../topup/index.php">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a
                                        href="../topup/mobilelegends/mobilelegends.php">Mobile Legends</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="../topup/freefire/freefire.php">Free
                                        Fire</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="../topup/pubg/pubg.php">PUBG
                                        Mobile</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a
                                        href="../topup/genshinimpact/genshinimpact.php">Genshin Impact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Saran dan Kritik</h4>
                            <p>Silahkan tambahkan saran atau kritik tentang website topup kami, Terimakasih</p>
                            <form method="POST" action="../topup/cekindex.php">
                                <input type="text" name="saran"><input type="submit" value="Kirim" name="index">
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container d-md-flex py-4">

                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>TOPUIGAMES</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
       
                        Designed by <a href="">C2 KELOMPOK 7</a>
                    </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../topup/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../topup/assets/vendor/aos/aos.js"></script>
        <script src="../topup/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../topup/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../topup/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../topup/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../topup/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../topup/assets/js/main.js"></script>

</body>

</html>