<?php
  require_once '../config.php';
  $conn = mysqli_connect("localhost", "root", "", "topup");
  $result = mysqli_query($conn, "SELECT * FROM pesanan");
  if (($_SESSION['username'] == "admin") || ($_SESSION['username'] == "seller")) {

    if (isset($_POST['edit'])) {
     $id = $_POST['id']; 
     $history = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = '$id'");
     $data = mysqli_fetch_assoc($history);
    }
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
  <link href="seller.css" rel="stylesheet">


</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">TOPUP IGAMES</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <?php
if ($_SESSION['username'] == "seller") {
?>
        <li><a class="nav-link scrollto active" href="../seller/seller.php">Pesanan</a></li>

        
        
        <?php
}
?>
        <?php
if ($_SESSION['username'] == "admin") {
?>
  <li><a class="nav-link scrollto" href="../user/user.php">User</a></li>
  <li><a class="nav-link scrollto" href="../komentar/komentar.php">Komentar</a></li>
  <?php if (@$_SESSION['status']) { ?>
    <li><a class="getstarted scrollto" href="../logout.php">Logout</a></li>
  <?php } else { ?>
    <li><a class="getstarted scrollto" href="../login/login.php">Login</a></li>
  <?php } ?>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
<?php
}
?>

      </nav><!-- .navbar -->


    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <h1>U B A H<br>P E S A N A N</h1>
        </div>
        <form method="POST" action="edit-proses.php">
          <input type="hidden" name="id" value="<?= $data["id"]; ?>">
        <div class="icon-text">
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h1>Email</h1>
            <div class="form">
              <input type="text" name="email" required value="<?= $data["email"]; ?>">
            </div>
            <h1>Game</h1>
            <div class="form">
              <input type="text" name="game" required value="<?= $data["game"]; ?>">
            </div>
            <h1>User ID</h1>
            <div class="form">
              <input type="text" name="uid" required value="<?= $data["uid"]; ?>">
            </div>
            <h1>Quantity</h1>
            <div class="form">
              <input type="text" name="qty" required value="<?= $data["qty"]; ?>">
            </div>
            <h1>Harga</h1>
            <div class="form">
              <input type="text" name="harga" required value="<?= $data["harga"]; ?>">
            </div>
            <h1>Via</h1>
            <div class="form">
              <input type="text" name="via" required value="<?= $data["via"]; ?>">
            </div>
            <h1>No. Telp</h1>
            <div class="form">
              <input type="text" name="tlp" required value="<?= $data["tlp"]; ?>">
            </div>
            <div class="btn">
              <button type="submit" name="Bedit">Submit</button>
            </div>
            </form>
          </div>
        </div>
        </div>
    </div>
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
<?php }else{ header('Location:../index.php'); }?>