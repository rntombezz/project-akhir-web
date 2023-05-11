<?php
  require_once '../config.php';
  $conn = mysqli_connect("localhost", "root", "", "topup");
  $result = mysqli_query($conn, "SELECT * FROM pesanan");
  if (($_SESSION['username'] == "admin") || ($_SESSION['username'] == "seller"))
{ 


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

        x<?php if (@$_SESSION['status']) { ?>
    <li><a class="getstarted scrollto" href="../logout.php">Logout</a></li>
  <?php } else { ?>
    <li><a class="getstarted scrollto" href="../login/login.php">Login</a></li>
  <?php } ?>
        
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



    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <h1>P E S A N A N</h1>
        </div>
        <div class="icon-text">
          <div class="footer-newsletter">
          <div class="tabel">
          <center><table></center>
          <tr>
        <th>No.</th>
        <th>Email</th>
        <th>Game</th>
        <th>UID</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Via</th>
        <th>No. Telp</th>
        <th>Waktu</th>
        <th>Ubah</th>
    </tr>
    <?php $i = 1 ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
      <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
      <tr>
            <td>
                <?= $i; ?>
            </td>
            <td>
                <?= $row["email"]; ?>
            </td>
            <td>
                <?= $row["game"]; ?>
            </td>
            <td>
                <?= $row["uid"]; ?>
            </td>
            <td>
                <?= $row["qty"]; ?>
            </td>
            <td>
                <?= $row["harga"]; ?>
            </td>
            <td>
                <?= $row["via"]; ?>
            </td>
            <td>
                <?= $row["tlp"]; ?>
            </td>
            <td>
                <?= $row["waktu"]; ?>
            </td>
            <td>
                <div class="buton"><button type="submit" name="edit">Ubah</button><br> </div>
                <a href='delete.php?id=<?= $row['id']?>'>Hapus</a>
            </td>
        </tr>

      </form>  
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    </div>
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