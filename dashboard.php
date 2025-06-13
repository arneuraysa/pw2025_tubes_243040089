<?php
session_start();
include_once("connection/koneksi.php"); // Wajib: koneksi database
include_once("header.php");

if (!isset($_SESSION['login'])) {
    header("Location: masuk.php");
    exit;
}

$id_user = $_SESSION['id_user'] ?? null;

if (!$id_user) {
    echo "Session user tidak ditemukan.";
    exit;
}

$query = "SELECT name, email FROM user WHERE id = '$id_user'";
$result = mysqli_query($koneksi, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Data pengguna tidak ditemukan.";
    exit;
}

$user = mysqli_fetch_assoc($result);
?>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dashboard-card {
        max-width: 600px;
        margin: 60px auto;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .dashboard-header {
        background: linear-gradient(90deg, #6f42c1, #0d6efd);
        color: white;
        padding: 30px 20px;
        text-align: center;
    }

    .dashboard-header h3 {
        margin-bottom: 10px;
    }

    .dashboard-body {
        background-color: white;
        padding: 30px;
    }

    .user-info-label {
        font-weight: bold;
        color: #6f42c1;
    }

    .btn-gradient {
        background: linear-gradient(90deg, #6f42c1, #0d6efd);
        color: white;
        border: none;
    }

    .btn-gradient:hover {
        opacity: 0.9;
    }
</style>

<div class="dashboard-card">
    <div class="dashboard-header">
        <h3>Dashboard Pengguna</h3>
        <p class="mb-0">Selamat datang, <?= htmlspecialchars($user['name']); ?>!</p>
    </div>
    <div class="dashboard-body">
        <div class="mb-4">
            <span class="user-info-label">Nama:</span><br>
            <?= htmlspecialchars($user['name']); ?>
        </div>
        <div class="mb-4">
            <span class="user-info-label">Email:</span><br>
            <?= htmlspecialchars($user['email']); ?>
        </div>
        <a href="editprofil.php" class="btn btn-gradient px-4">Edit Profil</a>
    </div>
</div>

<?php include_once("footer.php") ?>