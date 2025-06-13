<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php"); ?>

<!-- Section Donasi -->
<div class="position-relative text-white"
    style="background-image: url('<?php echo ambil_gambar("11") ?>'); 
            background-size: cover; 
            background-position: center; 
            background-attachment: fixed; 
            height: 50vh;">
    <!-- Overlay Hitam Transparan -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
</div>

<div class="container bg-white rounded-4 shadow-lg py-4 px-3 position-relative"
    style="margin-top: -250px; z-index: 3; max-width: 1000px; margin-bottom: 80px;">

    <div class="container my-5">
        <h2 class="fw-bold text-center" style="font-size: 2.2rem;"><?php echo ambil_judul("36") ?></h2>
        <h3 class="mb-5 text-center" style="font-size: 1.3rem;"><?php echo ambil_kutipan("36") ?></h3>
        <!-- Donasi Sekarang -->
        <div class="border rounded p-4 mb-5">

            <div class="text-center">
                <img src="<?php echo ambil_gambar('57') ?>" class="img-fluid rounded mb-3" alt="Relawan Donasi" style="max-width: 100%; height: auto;">
            </div>
            <p class="mb-1 text-start" style="font-size: 1.3rem;"><strong><em><?php echo ambil_isi("36") ?></em></strong></p>
            <p class="mb-0 text-justify" style="text-align: justify;"><?php echo ambil_isi("37") ?></p>
        </div>

        <!-- Mengapa Kami Membutuhkan Dukunganmu -->
        <div class="border rounded p-4 mb-5 mx-auto" style="max-width: 100%;">
            <h3 class="fw-bold mb-4 text-start"><?php echo ambil_judul("38") ?></h3>
            <p class="text-justify mb-0" style="text-align: justify;"><?php echo ambil_isi("38") ?></p>
        </div>

        <!-- Dampak -->
        <div class="border rounded p-4 mb-5">
            <h3 class="fw-bold mb-4 text-start"><?php echo ambil_kutipan("38") ?></h3>
            <div class="row justify-content-center">
                <!-- Relawan Terhubung -->
                <div class="col-md-4 mb-3">
                    <div class="border border-primary rounded p-3 d-flex align-items-center">
                        <i class="bi bi-person-circle text-ungu me-3" style="font-size: 2.5rem;"></i>
                        <div class="text-start">
                            <h4 class="fw-bold mb-1"><?php echo ambil_judul("39") ?></h4>
                            <p class="mb-0"><?php echo ambil_kutipan("39") ?></p>
                        </div>
                    </div>
                </div>
                <!-- Aktivitas Sosial -->
                <div class="col-md-4 mb-3">
                    <div class="border border-primary rounded p-3 d-flex align-items-center">
                        <i class="bi bi-people-fill text-ungu me-3" style="font-size: 2.5rem;"></i>
                        <div class="text-start">
                            <h4 class="fw-bold mb-1"><?php echo ambil_judul("40") ?></h4>
                            <p class="mb-0"><?php echo ambil_kutipan("40") ?></p>
                        </div>
                    </div>
                </div>
                <!-- Donasi -->
                <div class="col-md-4 mb-3">
                    <div class="border border-primary rounded p-3 d-flex align-items-center">
                        <i class="bi bi-cash-stack text-ungu me-3" style="font-size: 2.5rem;"></i>
                        <div class="text-start">
                            <h4 class="fw-bold mb-1"><?php echo ambil_judul("41") ?></h4>
                            <p class="mb-0"><?php echo ambil_kutipan("41") ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Donasi Fixed Bawah -->
    <div class="fixed-bottom bg-white border-top shadow p-3">
        <div class="container">
            <a href="donasisekarang.php" class="btn bg-gradient-ungu-biru w-100 rounded py-2 fs-5 border-0"><?php echo ambil_kutipan("42") ?></a>
        </div>
    </div>

</div>

<?php include_once("footer.php") ?>