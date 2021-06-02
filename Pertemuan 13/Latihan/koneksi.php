<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "article_db";

$connect = mysqli_connect($server, $user, $pass, $database);
if ($connect) {
 }else{
 	echo "Koneksi Database Gagal!";
 }
?>