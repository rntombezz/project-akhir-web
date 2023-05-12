<?php
  require_once '../config.php';
  $conn = mysqli_connect("localhost", "root", "", "topup");
  $result = mysqli_query($conn, "SELECT * FROM user");
  if (@$_SESSION['username'] == "admin") { 
    if (isset($_POST['Cedit'])) {
     $id = $_POST['id']; 
     $history = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
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
  <link href="user.css" rel="stylesheet">

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
        <li><a class="nav-link scrollto active" href="../admin/admin.php">Pesanan</a></li>

        
        
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
        <h1>U B A H<br>U S E R</h1>
        </div>
        <form method="POST" action="edit-proses2.php">
          <input type="hidden" name="id" value="<?= $data["id"]; ?>">
        <div class="icon-text">
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h1>Email</h1>
            <div class="form">
              <input type="text" name="email" required value="<?= $data["email"]; ?>">
            </div>
            <h1>Username</h1>
            <div class="form">
              <input type="text" name="username" required value="<?= $data["username"]; ?>">
            </div>
            <h1>Password</h1>
            <div class="form">
              <input type="text" name="password" required value="<?= $data["password"]; ?>">
            </div>
            <h1>Status</h1>
            <div class="form">
              <input type="text" name="status" required value="<?= $data["status"]; ?>">
            </div>
            <div class="btn">
              <button type="submit" name="Dedit">Submit</button>
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