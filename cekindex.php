<?php

include "config.php";

    if(@$_SESSION['status']){ 
        if(isset($_POST['index'])){
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
                document.location.href = '../topup/index.php';
                </script>
            ";
        };
    } else {
        echo "<script> 
            alert('Anda Harus Login Terlebih Dahulu!');
            document.location.href = '../topup/index.php';
            </script>
        ";
    };

