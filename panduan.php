<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<div class="container mt-5">
    <h1 class="mb-3"><?php echo ambil_judul("22") ?></h1>
    <p class="mb-4"><?php echo ambil_kutipan("22") ?></p>
    <a href="cariaktivitas.php" class="btn bg-gradient-ungu-biru mb-5"><?php echo ambil_isi("22") ?></a>

    <!-- Langkah 1 -->
    <div class="p-4 mb-4 border border-primary rounded">
        <h4 class="mb-2 text-ungu"><?php echo ambil_judul("23") ?></h4>
        <p><?php echo ambil_kutipan("23") ?></p>
    </div>

    <!-- Langkah 2 -->
    <div class="p-4 mb-4 border border-primary rounded">
        <h4 class="mb-2 text-ungu"><?php echo ambil_judul("24") ?></h4>
        <p><?php echo ambil_kutipan("24") ?></p>
    </div>

    <!-- Langkah 3 -->
    <div class="p-4 mb-4 border border-primary rounded">
        <h4 class="mb-2 text-ungu"><?php echo ambil_judul("25") ?></h4>
        <p><?php echo ambil_kutipan("25") ?></p>
    </div>

    <!-- Langkah 4 -->
    <div class="p-4 mb-4 border border-primary rounded">
        <h4 class="mb-2 text-ungu"><?php echo ambil_judul("26") ?></h4>
        <p><?php echo ambil_kutipan("26") ?></p>
    </div>

    <!-- Langkah 5 -->
    <div class="p-4 mb-4 border border-primary rounded">
        <h4 class="mb-2 text-ungu"><?php echo ambil_judul("27") ?></h4>
        <p><?php echo ambil_kutipan("27") ?></p>
    </div>
</div>

<?php include_once("footer.php") ?>