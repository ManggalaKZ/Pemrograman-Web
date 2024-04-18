<?php
$conn = mysqli_connect("localhost", "root", "", "dtmahasiswa");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
