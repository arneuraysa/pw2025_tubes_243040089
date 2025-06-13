<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<!-- Bagian VISI -->
<div class="bg-dark text-white text-center d-flex align-items-center justify-content-center"
    style="background-image: url('<?php echo ambil_gambar("11") ?>'); background-size: cover; background-position: center; background-attachment: fixed; height: 50vh;">
    <div>
        <h1 class="fw-bold fs-1"><?php echo ambil_judul("32") ?></h1>
        <p class="lead fs-5"><?php echo ambil_kutipan("32") ?></p>
        <!-- Tombol scroll ke misi -->
        <a href="#misi" class="btn bg-gradient-ungu-biru text-white fw-semibold rounded-pill px-4 py-2 mt-3"><?php echo ambil_isi("32") ?></a>
    </div>
</div>

<!-- Bagian MISI -->
<div id="misi" class="bg-white py-5">
    <div class="container">
        <h2 class="text-center mb-5 fs-1 fw-bold text-ungu"><?php echo ambil_judul("33") ?></h2>

        <!-- Misi 1 -->
        <div class="d-flex align-items-start justify-content-center mb-5" style="gap: 30px;">
            <div style="font-size: 5rem; color: #6f42c1;">
                <i class="bi bi-display"></i>
            </div>
            <div class="p-4 border border-primary rounded" style="max-width: 650px; color: black;">
                <h5 class="fw-semibold fs-5"><?php echo ambil_kutipan("33") ?></h5>
                <p class="mb-0"><?php echo ambil_isi("33") ?></p>
            </div>
        </div>

        <!-- Misi 2 -->
        <div class="d-flex align-items-start justify-content-center mb-5" style="gap: 30px;">
            <div style="font-size: 5rem; color: #6f42c1;">
                <i class="bi bi-people"></i>
            </div>
            <div class="p-4 border border-primary rounded" style="max-width: 650px; color: black;">
                <h5 class="fw-semibold fs-5"><?php echo ambil_judul("34") ?></h5>
                <p class="mb-0"><?php echo ambil_kutipan("34") ?></p>
            </div>
        </div>

        <!-- Misi 3 -->
        <div class="d-flex align-items-start justify-content-center mb-5" style="gap: 30px;">
            <div style="font-size: 5rem; color: #6f42c1;">
                <i class="bi bi-diagram-3"></i>
            </div>
            <div class="p-4 border border-primary rounded" style="max-width: 650px; color: black;">
                <h5 class="fw-semibold fs-5"><?php echo ambil_judul("35") ?></h5>
                <p class="mb-0"><?php echo ambil_kutipan("35") ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php") ?>