<?php
include_once("../connection/koneksi.php"); // sesuaikan path
// Cek koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal.");
}

// Ambil data dari POST
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$subyek = $_POST['subyek'] ?? '';
$pesan = $_POST['pesan'] ?? '';

// Simpan ke database
$query = "INSERT INTO kontak (nama, email, subyek, pesan, tanggal_kirim) VALUES (?, ?, ?, ?, NOW())";
$stmt = mysqli_prepare($koneksi, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $subyek, $pesan);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../kontakkami.php?status=sukses");
    exit();
} else {
    header("Location: ../kontakkami.php?status=gagal");
    exit();
}
