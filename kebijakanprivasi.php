<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<!-- Tulisan AksiRelawan.org di pojok kanan atas -->
<div class="container-fluid">
    <div class="d-flex justify-content-end pt-3" style="padding-right: 185px;">
        <span class="text-ungu fst-italic fw-bold fs-4"><?php echo ambil_kutipan("50") ?></span>
    </div>
</div>

<!-- Isi Halaman -->
<div class="container py-5">
    <div style="text-align: justify;">
        <h2 class="mb-4"><?php echo ambil_isi("50") ?></h2>
        <p><?php echo ambil_isi("51") ?></p>
        <p><?php echo ambil_isi("52") ?></p>
        <p><?php echo ambil_isi("53") ?></p>
        <p><?php echo ambil_isi("54") ?></p>
        <p><?php echo ambil_isi("55") ?></p>
    </div>
</div>

<?php include_once("footer.php") ?>