<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<!-- Tulisan AksiRelawan.org di pojok kanan atas -->
<div class="container-fluid">
    <div class="d-flex justify-content-end pt-3" style="padding-right: 185px;">
        <span class="text-ungu fst-italic fw-bold fs-4"><?php echo ambil_judul("43") ?></span>
    </div>
</div>

<!-- Isi Halaman -->
<div class="container py-5">
    <div style="text-align: justify;">
        <h2 class="mb-4"><?php echo ambil_kutipan("43") ?></h2>
        <p><?php echo ambil_isi("43") ?></p>
        <p><?php echo ambil_kutipan("44") ?></p>
        <p><?php echo ambil_isi("44") ?></p>

        <h5 class="mt-4"><?php echo ambil_kutipan("45") ?></h5>
        <p><?php echo ambil_isi("45") ?></p>

        <h5 class="mt-4"><?php echo ambil_kutipan("46") ?></h5>
        <p><?php echo ambil_isi("46") ?></p>
        <p><?php echo ambil_isi("47") ?></p>
        <p><?php echo ambil_isi("48") ?></p>

        <h5 class="mt-4"><?php echo ambil_kutipan("49") ?></h5>
        <p><?php echo ambil_isi("49") ?></p>
    </div>
</div>

<?php include_once("footer.php") ?>