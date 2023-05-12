<?php
include '../config.php';
        if(isset($_POST['Dedit'])){
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $status = $_POST['status'];
            $id = $_POST['id'];
            $query = "UPDATE user SET email = '$email', username = '$username', password = '$password', status = '$status' WHERE id = '$id'";
            $mquery = mysqli_query($kondisi,$query);
        echo "<script> 
          alert('user Telah Diubah!');
          document.location.href = 'user.php';
          </script>
        ";
        };