<?php

include "../config.php";
    if(@$_SESSION['status']) {
        if(isset($_POST['mobilelegends'])){
            date_default_timezone_set("asia/makassar");
            $waktu = date('Y-m-d H:i:s');
            $email = $_SESSION['email'];
            $game = 'Mobile Legends';
            $uid = $_POST['userid'];
            $qty = $_POST['qty'];
            $via = $_POST['bayar'];
            $tlp = $_POST['telepon'];
                if ($_POST['qty'] == '100 Diamonds') {
                    $harga = ' 10.000';
                } else if ($_POST['qty'] == '250 Diamonds') {
                    $harga = ' 25.000';
                } else if ($_POST['qty'] == '500 Diamonds') {
                    $harga = ' 50.000';
                } else if ($_POST['qty'] == '1000 Diamonds') {
                    $harga = ' 100.000';
                } else if ($_POST['qty'] == '2000 Diamonds') {
                    $harga = ' 200.000';
                } else {
                    $harga = ' 400.000';
                };
    
        $kondisi = mysqli_query($kondisi,"INSERT INTO pesanan (email, game, uid, qty, harga, via, tlp, waktu)
            VALUES ( '$email',
                '$game',
                '$uid',
                '$qty',
                '$harga',
                '$via',
                '$tlp',
                '$waktu'
                )
        "); 
        echo "<script> 
          alert('Pesanan Telah Ditambahkan!');
          document.location.href = '../mobilelegends/mobilelegends.php';
          </script>
        ";
        };
    } else {
        echo "<script> 
          alert('Anda Harus Login Terlebih Dahulu!');
          document.location.href = '../mobilelegends/mobilelegends.php';
          </script>
          ";
    };
    
    if(@$_SESSION['status']) {
        if(isset($_POST['mobilelegends2'])){
            date_default_timezone_set("asia/makassar");
            $waktu = date('Y-m-d H:i:s');
            $email = $_SESSION['email'];
            $saran = $_POST['saran'];
    
            $kondisi = mysqli_query($kondisi,"INSERT INTO komentar (email, waktu, saran)
            VALUES ('$email',
                '$waktu',
                '$saran'
                )
        "); 
        echo "<script> 
          alert('Terimakasih Atas Saran dan Kritiknya!');
          document.location.href = '../mobilelegends/mobilelegends.php';
          </script>
        ";
        };
    } else {
            echo "<script> 
              alert('Anda Harus Login Terlebih Dahulu!');
              document.location.href = '../mobilelegends/mobilelegends.php';
              </script>
              ";
        };

