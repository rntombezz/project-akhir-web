<?php 

session_start();
$server = 'localhost';
$username = 'root';
$pass = '';
$Database = 'topup';

$kondisi = mysqli_connect($server , $username , $pass , $Database);

if(!$kondisi){
    echo "gagal";
}
