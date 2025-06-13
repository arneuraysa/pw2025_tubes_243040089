<?php
session_start();

// Hapus semua data session
$_SESSION = [];
session_unset();
session_destroy();

// Hapus cookie "remember me" jika ada
setcookie('id', '', time() - 3600, '/');
setcookie('key', '', time() - 3600, '/');

// Redirect ke halaman login
header("Location: masuk.php");
exit;
