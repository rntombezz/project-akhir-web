<?php 
include "../config.php";



if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($kondisi, $_POST['username']);
    $password = mysqli_real_escape_string($kondisi, $_POST['password']);

    $query_admin = "SELECT * FROM user WHERE username='$username' AND password='$password' AND status='admin'";
    $query_seller = "SELECT * FROM user WHERE username='$username' AND password='$password' AND status='seller'";

    $query_pelanggan = "SELECT * FROM user WHERE username='$username' AND password='$password' AND status='pelanggan'";

    $result_admin = mysqli_query($kondisi, $query_admin);
    $result_seller = mysqli_query($kondisi, $query_seller);

    $result_pelanggan = mysqli_query($kondisi, $query_pelanggan);

    if (mysqli_num_rows($result_admin) == 1) {
        $_SESSION['status'] = 'admin';
        $_SESSION['username'] = $username;
        $row = mysqli_fetch_assoc($result_admin);

        $_SESSION['email'] = $row['email'];
        header("location: ../user/user.php");

    }else if (mysqli_num_rows($result_seller) == 1) {
            $_SESSION['status'] = 'seller';
            $_SESSION['username'] = $username;
            $row = mysqli_fetch_assoc($result_seller);
          
            $_SESSION['email'] = $row['email'];
            header("location: ../seller/seller.php");
       
            
    } else if (mysqli_num_rows($result_pelanggan) == 1) {
        $_SESSION['status'] = 'pelanggan';
        $_SESSION['username'] = $username;
        $row = mysqli_fetch_assoc($result_pelanggan);
        $_SESSION['email'] = $row['email'];
        

        header("location: ../index.php");
    } else {
        echo "<script>
            alert('Username dan password salah.');
        </script>";
    }
}
mysqli_close($kondisi);





?>
