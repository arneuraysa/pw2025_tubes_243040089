<?php
session_start();
include_once("connection/fungsi.php");
cek_login();

if (!isset($_SESSION["login"])) {
    header("Location: masuk.php");
    exit;
}

include_once("header.php"); ?>

<!-- HOME HALAMAN 1 -->
<!-- Hero Section -->
<div class="hero position-relative text-white"
    style="background-image: url('<?php echo ambil_gambar("11") ?>'); 
           background-size: cover; 
           background-position: center; 
           background-attachment: fixed; 
           height: 50vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background-color: rgba(0, 0, 0, 0.5);">
    </div>
    <div class="position-relative text-center"
        style="z-index: 2; top: 50%; transform: translateY(-50%);">
        <h1 class="display-5 fw-bold"><?php echo ambil_judul("10") ?></h1>
        <p class="lead"><?php echo ambil_kutipan("10") ?></p>
        <a href="cariaktivitas.php" class="btn bg-gradient-ungu-biru btn-lg mt-3"><?php echo ambil_isi("10") ?></a>
    </div>
</div>

<!-- Statistik -->
<div class="container bg-white rounded-4 shadow-lg py-4 px-3 position-relative" style="margin-top: -50px; z-index: 3;">
    <div class="row justify-content-center text-center text-md-start">
        <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
            <div class="icon-circle bg-gradient-ungu-biru me-4">
                <i class="bi bi-person-circle fs-2"></i>
            </div>
            <div>
                <h2 class="fw-bold mb-0"><?php echo ambil_kutipan("9") ?></h2>
                <p class="text-muted mb-0"><?php echo ambil_isi("9") ?></p>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
            <div class="icon-circle bg-gradient-ungu-biru me-4">
                <i class="bi bi-people-fill fs-2"></i>
            </div>
            <div>
                <h2 class="fw-bold mb-0"><?php echo ambil_kutipan("8") ?></h2>
                <p class="text-muted mb-0"><?php echo ambil_isi("8") ?></p>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
            <div class="icon-circle bg-gradient-ungu-biru me-4">
                <i class="bi bi-cash-stack fs-2"></i>
            </div>
            <div>
                <h2 class="fw-bold mb-0"><?php echo ambil_kutipan("7") ?></h2>
                <p class="text-muted mb-0"><?php echo ambil_isi("7") ?></p>
            </div>
        </div>
    </div>
</div>


<!-- HOME HALAMAN 2 -->
<!-- Section Kenali Layanan -->
<div class="container my-5">
    <h4 class="fw-bold text-center mb-2 pb-4"><?php echo ambil_isi("6") ?></h4>
    <div class="row">

        <!-- Kolom Kiri: Website -->
        <div class="col-md-4">
            <div class="bg-gradient-ungu-biru p-4 rounded h-100 d-flex flex-column">
                <h5><?php echo ambil_judul("5") ?></h5>
                <p><?php echo ambil_isi("5") ?></p>
                <a href="cariaktivitas.php" class="btn btn-light w-100 mt-auto"><?php echo ambil_kutipan("5") ?></a>
            </div>
        </div>

        <!-- Kolom Kanan: 3 Box Layanan -->
        <div class="col-md-8">
            <div class="row g-3">
                <!-- Box 1 -->
                <div class="col-md-4">
                    <div class="text-center p-4 border rounded h-100 d-flex flex-column">
                        <i class="bi bi-heart mb-3" style="font-size: 2.5rem; color: #6f42c1;"></i>
                        <h6 class="fw-bold mb-2"><?php echo ambil_judul("4") ?></h6>
                        <p class="small mb-3"><?php echo ambil_isi("4") ?></p>
                        <a href="cariaktivitas.php" class="btn bg-gradient-ungu-biru btn-sm mt-auto"><?php echo ambil_kutipan("4") ?></a>
                    </div>
                </div>
                <!-- Box 2 -->
                <div class="col-md-4">
                    <div class="text-center p-4 border rounded h-100 d-flex flex-column">
                        <i class="bi bi-person-heart mb-3" style="font-size: 2.5rem; color: #6f42c1;"></i>
                        <h6 class="fw-bold mb-2"><?php echo ambil_judul("3") ?></h6>
                        <p class="small mb-3"><?php echo ambil_isi("3") ?></p>
                        <a href="buatakun.php" class="btn bg-gradient-ungu-biru btn-sm mt-auto"><?php echo ambil_kutipan("3") ?></a>
                    </div>
                </div>
                <!-- Box 3 -->
                <div class="col-md-4">
                    <div class="text-center p-4 border rounded h-100 d-flex flex-column">
                        <i class="bi bi-currency-dollar mb-3" style="font-size: 2.5rem; color: #6f42c1;"></i>
                        <h6 class="fw-bold mb-2"><?php echo ambil_judul("2") ?></h6>
                        <p class="small mb-3"><?php echo ambil_isi("2") ?></p>
                        <a href="donasi.php" class="btn bg-gradient-ungu-biru btn-sm mt-auto"><?php echo ambil_kutipan("2") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- HOME HALAMAN 3 -->
<!-- Bagian Judul -->
<div class="container my-5">
    <h4 class="fw-bold text-center mb-2"><?php echo ambil_judul("13") ?></h4>
    <p class="text-center text-muted"><?php echo ambil_kutipan("13") ?></p>

    <!-- Custom Tab with Bootstrap -->
    <div class="d-flex border-bottom mb-4 fw-medium" style="gap: 20px;"> </div>

    <!-- Activity Cards -->
    <?php include_once("aktivitas.php") ?>
</div>


<!-- HOME HALAMAN 4 -->
<!-- Testimoni -->
<div class="container my-5">
    <h4 class="text-center fw-bold"><?php echo ambil_judul("20") ?></h4>
    <p class="text-center text-muted mb-4"><?php echo ambil_kutipan("20") ?></p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border bg-white text-center p-3">
                <img src="<?php echo ambil_gambar("14") ?>" alt="Gerakan Suka Baca" class="mx-auto mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                <h6 class="fw-semibold bg-gradient-ungu-biru rounded py-1 px-2 d-inline-block"><?php echo ambil_judul("21") ?></h6>
                <p class="text-muted small mb-0"><?php echo ambil_isi("17") ?></p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border bg-white text-center p-3">
                <img src="<?php echo ambil_gambar("15") ?>" alt="Teruntuk Project" class="mx-auto mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                <h6 class="fw-semibold bg-gradient-ungu-biru rounded py-1 px-2 d-inline-block"><?php echo ambil_kutipan("21") ?></h6>
                <p class="text-muted small mb-0"><?php echo ambil_isi("18") ?></p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border bg-white text-center p-3">
                <img src="<?php echo ambil_gambar("16") ?>" alt="TGR" class="mx-auto mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                <h6 class="fw-semibold bg-gradient-ungu-biru rounded py-1 px-2 d-inline-block"><?php echo ambil_isi("21") ?></h6>
                <p class="text-muted small mb-0"><?php echo ambil_isi("19") ?></p>
            </div>
        </div>
    </div>
</div>

<?php include_once("footer.php") ?>