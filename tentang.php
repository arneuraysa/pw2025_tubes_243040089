<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<div class="container my-5">
    <h1 class="text-center text-ungu mb-4"><?php echo ambil_judul("28") ?></h1>
    <p class="text-justify" style="text-align: justify;"><?php echo ambil_isi("28") ?></p>
    <p class="text-justify" style="text-align: justify;"><?php echo ambil_isi("29") ?></p>
    <p class="text-justify" style="text-align: justify;"><?php echo ambil_isi("30") ?></p>

    <div class="text-center my-3">
        <a href="visimisi.php" class="btn bg-gradient-ungu-biru"><?php echo ambil_kutipan("28") ?></a>
    </div>

    <div class="text-center mt-4">
        <img src="<?php echo ambil_gambar("56") ?>" alt="Foto Aksi Relawan" class="img-fluid rounded shadow">
    </div>
</div>

<?php include_once("footer.php") ?>