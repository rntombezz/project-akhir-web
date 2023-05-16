<?php

include "../config.php";

    if(@$_SESSION['status']) {
        if(isset($_POST['pubg'])){
            date_default_timezone_set("asia/makassar");
            $waktu = date('Y-m-d H:i:s');
            $email = $_SESSION['email'];
            $game = 'PUBG Mobile';
            $uid = $_POST['userid'];
            $qty = $_POST['qty'];
            $via = $_POST['bayar'];
            $tlp = $_POST['telepon'];
                if ($_POST['qty'] == '150 UC') {
                    $harga = ' 10.000';
                } else if ($_POST['qty'] == '350 UC') {
                    $harga = ' 25.000';
                } else if ($_POST['qty'] == '750 UC') {
                    $harga = ' 50.000';
                } else if ($_POST['qty'] == '1500 UC') {
                    $harga = ' 100.000';
                } else if ($_POST['qty'] == '3000 UC') {
                    $harga = ' 200.000';
                } else {
                    $harga = ' 400.000';
                };
    
        $kondisi = mysqli_query($kondisi,"INSERT INTO pesanan (email, game, uid, qty, harga, via, tlp, waktu)
            VALUES ('$email',
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
          document.location.href = '../pubg/pubg.php';
          </script>
        ";
        };
    } else {
        echo "<script> 
          alert('Anda Harus Login Terlebih Dahulu!');
          document.location.href = '../pubg/pubg.php';
          </script>
          ";
    };
    
    if(@$_SESSION['status']) {
        if(isset($_POST['pubg2'])){
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
          document.location.href = '../pubg/pubg.php';
          </script>
        ";
        };
    } else {
            echo "<script> 
              alert('Anda Harus Login Terlebih Dahulu!');
              document.location.href = '../pubg/pubg.php';
              </script>
              ";
        };

