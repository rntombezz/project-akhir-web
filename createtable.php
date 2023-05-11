<?php
session_start();

$servername = "localhost";
$username = "root";
$pass = "";
$namaDatabase = "topup";

$kondisi = mysqli_connect($servername,$username,$pass,$namaDatabase);
if(!$kondisi){
    echo "Maaf koneksi ke database gagal";
}

$sql =  "create table komentar (
     id int not null auto_increment,
     saran TEXT ,
     primary key(id)
     )engine = InnoDB";

if ($kondisi->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $kondisi->error;
    }
      
$kondisi->close();