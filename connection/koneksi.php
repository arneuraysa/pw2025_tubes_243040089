<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pw2025_tubes_243040089";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal terkoneksi");
}
