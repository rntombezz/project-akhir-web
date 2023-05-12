<?php
  require_once '../config.php';
  $conn = mysqli_connect("localhost", "root", "", "topup");
  $result = mysqli_query($conn, "SELECT * FROM pesanan");
  if (($_SESSION['username'] == "admin") || ($_SESSION['username'] == "seller"))
{ 

  $search = isset($_POST['search']) ? $_POST['search'] : '';
  $sortby = isset($_GET['sortby']) ? $_GET['sortby'] : 'id';
  $sorttype = isset($_GET['sorttype']) ? $_GET['sorttype'] : 'asc';
  
  
  $query = "SELECT * FROM pesanan WHERE harga LIKE '%$search%' OR email LIKE '%$search%' OR game LIKE '%$search%' OR via LIKE '%$search%' OR tlp LIKE '%$search%' ORDER BY $sortby $sorttype";
  $result = mysqli_query($conn, $query);
  
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
<style>

.modal-dialog {
        max-width: 800px;
    }

    .input-box input {
        width: 100px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
	.form-popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.form-popup-content {
  background-color: #fefefe;
  margin: 2% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.form-popup-close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.form-popup-close:hover,
.form-popup-close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

    .box {
	color: #272164;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
    .box .col-4 h4 {
	margin:20px 0;
}
.box .col-4 {
		width:100%;
		float: none;
		margin-bottom: 20px;
	}
    .box .col-4 {
	width:25%;
	padding:20px;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
    .contain {
	width:80%;
	margin:0 auto;
}
.contain:after {
	content:'';
	display: block;
	clear: both;
}
	.servis {
	padding-bottom: 100px;
}
     .kontainer{
	max-width: 1000px;
	width: 100%;
	background-color: #fff;
	padding: 25px 30px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  }
  .kontainer .title{
	font-size: 25px;
	font-weight: 500;
	position: relative;
  }
  .kontainer .title::before{
	content: "";
	position: absolute;
	left: 0;
	bottom: 0;
	height: 3px;
	width: 30px;
	border-radius: 5px;
	background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .kontener{
	max-width: 1000px;
	width: 100%;
	background-color: #fff;
	padding: 25px 30px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  }
  .kontener p {
	background-color: white;
    padding: 20px 20px;
    border-radius: 12px;
    box-shadow: 0 1px 20px rgb(0 0 0 / 20%);
    width: 350px;
    margin: 15px auto;
}
.kontener p:hover{
    background-color: #18d3ad;
}
.kontener .oke{
	width: 200px;
	height: 200px;
	border-radius: 50%;


	margin-left: 40%;
}
.animasi-teks {
	font-size: 29px;
	width: 100%;
	white-space:nowrap;
	overflow:hidden;
	-webkit-animation: typing 5s steps(70, end);
	animation: animasi-ketik 5s steps(70, end);
  }
  
  @keyframes animasi-ketik{
	from { width: 0; }
  }
  
  @-webkit-keyframes animasi-ketik{
	from { width: 0; }
  }

  .content form .user-details{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 20px 0 12px 0;
  }
  form .user-details .input-box{
	margin-bottom: 15px;
	width: calc(100% / 2 - 20px);
  }
  form .input-box span.details{
	display: block;
	font-weight: 500;
	margin-bottom: 5px;
  }
  .user-details .input-box input{
	height: 45px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;
	padding-left: 15px;
	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }
  .kombo{
	height: 45px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;
	padding-left: 15px;
	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }

  .teks{
	height: 100px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;

	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }

  .user-details .input-box input:focus,
  .user-details .input-box input:valid{
	border-color: #9b59b6;
  }
   form .gender-details .gender-title{
	font-size: 20px;
	font-weight: 500;
   }
   form .hobi{
	font-size: 20px;
	font-weight: 500;
   }
   form .category{
	 display: flex;
	 width: 80%;
	 margin: 14px 0 ;
	 padding-right: 38rem;
	 justify-content: space-between;
   }
   form .category label{
	 display: flex;
	 align-items: center;
	 cursor: pointer;
   }
   form .category label .dot{
	height: 18px;
	width: 18px;
	border-radius: 50%;
	margin-right: 10px;
	background: #d9d9d9;
	border: 5px solid transparent;
	transition: all 0.3s ease;
  }
   #dot-1:checked ~ .category label .one,
   #dot-2:checked ~ .category label .two,
   #dot-3:checked ~ .category label .three{
	 background: #148F77;
	 border-color: #d9d9d9;
   }
   form input[type="radio"]{
	 display: none;
   }
   form .button{
	 height: 45px;
	 margin: 35px 0
   }
   form .button input{
	 height: 100%;
	 width: 100%;
	 border-radius: 5px;
	 border: none;
	 color: #fff;
	 font-size: 18px;
	 font-weight: 500;
	 letter-spacing: 1px;
	 cursor: pointer;
	 transition: all 0.3s ease;
	 background: linear-gradient(135deg, #0099ff, #272164);
   }
   form .button input:hover{
	/* transform: scale(0.99); */
	background: linear-gradient(-135deg, #0099ff, #272164);
	}
   @media(max-width: 584px){
   .kontainer{
	max-width: 100%;
  }
  form .user-details .input-box{
	  margin-bottom: 15px;
	  width: 100%;
	}
	form .category{
	  width: 100%;
	}
	.content form .user-details{
	  max-height: 300px;
	  overflow-y: scroll;
	}
	.user-details::-webkit-scrollbar{
	  width: 5px;
	}
	}
	@media(max-width: 459px){
	.kontainer .content .category{
	  flex-direction: column;
	}
}
</style>
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
          <div style="display: flex; justify-content: space-between;">
          <form method="POST" action="" style="margin-right: 10px;">
        <input type="text" name="search" value="<?php echo $search; ?>" placeholder="Search">
        <button type="submit">Search</button>
    </form>
    <form action="" method="get" style="margin-left: 10px;">
        <label for="sortby">Urutkan berdasarkan:</label>
        <select name="sortby" id="sortby">
            <option value="game" <?php if($sortby == 'game') echo 'selected'; ?>>Nama game</option>
            <option value="harga" <?php if($sortby == 'harga') echo 'selected'; ?>>Harga</option>
            <option value="via" <?php if($sortby == 'qty') echo 'selected'; ?>>Qty</option>
      
        </select>
        <select name="sorttype" id="sorttype">
            <option value="asc" <?php if($sorttype == 'asc') echo 'selected'; ?>>Ascending</option>
            <option value="desc" <?php if($sorttype == 'desc') echo 'selected'; ?>>Descending</option>
        </select>
        <button type="submit" name="sort">Urutkan</button>
    </form>
</div>
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
                <div class="buton">
                  <button type="submit" name="edit">Ubah</button>
                <br> 
              </div>
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