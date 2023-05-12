<?php

include "../config.php";

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = 'pelanggan';

    $kondisi = mysqli_query($kondisi,"INSERT INTO user (email, username, password, status)
      VALUES ('$email',
              '$username',
              '$password',
              '$status'
          )
  "); 
    echo "<script> 
      alert('User Telah Ditambahkan!');
      document.location.href = '../login/login.php';
      </script>
    ";
};