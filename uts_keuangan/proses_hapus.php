<?php

include 'koneksi.php'; 

$nim = $_GET['nim'];

$query = "DELETE FROM datamhs WHERE nim='$nim'";
mysqli_query($conn, $query);

header("Location: tampil.php");
?>
