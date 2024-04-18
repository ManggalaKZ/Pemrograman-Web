<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "prakwedb"; 

$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}

echo "Koneksi berhasil ";
?>
