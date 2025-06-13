<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once("connection/koneksi.php");
include_once("connection/fungsi.php");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AksiRelawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        .bg-gradient-ungu-biru {
            background: linear-gradient(90deg, #6f42c1, #0d6efd);
            color: white !important;
        }

        .icon-circle {
            border-radius: 50%;
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-ungu {
            color: #6f42c1 !important;
        }

        .nav-tabs .nav-link {
            color: black;
        }

        .nav-tabs .nav-link.active {
            background: linear-gradient(90deg, #6f42c1, #0d6efd);
            color: white !important;
            border-color: #6f42c1 #0d6efd #fff !important;
            font-weight: bold;
        }

        .nav-tabs .nav-link:hover {
            color: #6f42c1;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-ungu-biru sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fst-italic d-flex align-items-center gap-2" href="index.php">
                <img src="<?php echo ambil_gambar('12') ?>" alt="Logo" height="35" />AksiRelawan.org
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="cariaktivitas.php">Cari Aktivitas</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="donasi.php">Donasi</a>
                    </li>

                    <!-- Dropdown: Cara Kerja -->
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="caraKerjaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cara Kerja
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="panduan.php">Panduan untuk Relawan</a></li>
                            <li><a class="dropdown-item" href="syaratdanketentuan.php">Syarat dan Ketentuan</a></li>
                            <li><a class="dropdown-item" href="kebijakanprivasi.php">Kebijakan Privasi</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown: Tentang Kami -->
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tentang.php">Tentang Aksi Relawan</a></li>
                            <li><a class="dropdown-item" href="visimisi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="kontakkami.php">Kontak Kami</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Login / Dashboard / Logout -->
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION["login"])) : ?>
                        <!-- Jika sudah login, tampilkan Dashboard dan Keluar -->
                        <li class="nav-item me-3">
                            <a class="nav-link text-white" href="dashboard.php">
                                <i class="bi bi-speedometer2"></i> Dashboard Anda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="keluar.php">
                                <i class="bi bi-box-arrow-right"></i> Keluar
                            </a>
                        </li>
                    <?php else : ?>
                        <!-- Jika belum login, tampilkan Masuk / Buat Akun -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="authDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Masuk / Buat Akun
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                                <li><a class="dropdown-item" href="masuk.php">Masuk</a></li>
                                <li><a class="dropdown-item" href="buatakun.php">Buat Akun</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>