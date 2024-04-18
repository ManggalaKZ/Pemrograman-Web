<?php
include "koneksi.php";

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$fakultas=$_POST["fakultas"];
$prodi=$_POST["prodi"];
$prestasi=$_POST["prestasi"];

$query = "UPDATE datamhs SET nama='$nama', fakultas='$fakultas', prodi='$prodi', prestasi='$prestasi' WHERE nim='$nim'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: tampil.php");
} else {
    echo "Gagal mengupdate data";
}
?>
