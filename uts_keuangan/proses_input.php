<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$fakultas = $_POST["fakultas"];
$prodi = $_POST["prodi"];
$prestasi = $_POST["prestasi"];

$sql = "INSERT INTO datamhs VALUES ('$nim', '$nama', '$fakultas', '$prodi','$prestasi')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "New record created sucessfully";
    header("Location: tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
