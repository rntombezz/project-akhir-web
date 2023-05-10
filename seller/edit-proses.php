<?php
include '../config.php';
        if(isset($_POST['Bedit'])){
            date_default_timezone_set("asia/makassar");
            $waktu = date('Y-m-d H:i:s');
            $email = $_POST['email'];
            $game = $_POST['game'];
            $uid = $_POST['uid'];
            $qty = $_POST['qty'];
            $harga = $_POST['harga'];
            $id = $_POST['id'];
            $via = $_POST['via'];
            $tlp = $_POST['tlp'];
            $query = "UPDATE pesanan SET email = '$email', game = '$game', uid = '$uid', qty = '$qty', harga = '$harga', via = '$via', tlp = '$tlp', waktu = '$waktu' WHERE id = '$id'";
            $mquery = mysqli_query($kondisi,$query);
        echo "<script> 
          alert('Pesanan Telah Diubah!');
          document.location.href = 'seller.php';
          </script>
        ";
        };