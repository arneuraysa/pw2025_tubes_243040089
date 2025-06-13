<?php include("header.php"); ?>
<?php
date_default_timezone_set("Asia/Jakarta");
$judul = "";
$kutipan = "";
$isi = "";
$error = "";
$sukses = "";

$id = $_GET['id'] ?? "";

if ($id != "") {
    $sql1 = "SELECT * FROM halaman WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $judul = $r1['judul'] ?? '';
    $kutipan = $r1['kutipan'] ?? '';
    $isi = $r1['isi'] ?? '';

    if ($isi == '') {
        $error = "Data tidak ditemukan.";
    }
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $kutipan = $_POST['kutipan'];
    $isi = $_POST['isi'];

    if ($judul == '' || $isi == '') {
        $error = "Silakan masukkan semua data yakni judul dan isi.";
    }

    if (empty($error)) {
        $tgl_isi = date("Y-m-d H:i:s");
        if ($id != "") {
            $sql1 = "UPDATE halaman SET judul='$judul', kutipan='$kutipan', isi='$isi', tgl_isi=NOW() WHERE id='$id'";
        } else {
            $sql1 = "INSERT INTO halaman (judul, kutipan, isi, tgl_isi) 
                     VALUES ('$judul', '$kutipan', '$isi', '$tgl_isi')";
        }
        $q1 = mysqli_query($koneksi, $sql1);
        $sukses = $q1 ? "Sukses memasukkan data." : "Gagal memasukkan data.";
    }
}
?>

<!-- Custom style -->
<style>
    .btn-gradient {
        background-image: linear-gradient(to right, #ff66cc, #9966ff);
        color: white;
        border: none;
    }

    .btn-gradient:hover {
        background-image: linear-gradient(to right, #ff3399, #8000ff);
        color: white;
    }

    .form-container {
        background: linear-gradient(to right, #ffe6f0, #f3e6ff);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-5 mb-5" style="min-height: 65vh; padding-bottom: 100px;">
    <div class="form-container">
        <h2 class="text-center fw-bold mb-4">Form Input Halaman</h2>

        <div class="mb-3">
            <a href="halaman.php" class="btn btn-gradient">← Kembali ke Halaman Admin</a>
        </div>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <?php if ($sukses): ?>
            <div class="alert alert-success"><?= $sukses ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= htmlspecialchars($judul) ?>">
            </div>

            <div class="mb-3">
                <label for="kutipan" class="form-label">Kutipan</label>
                <input type="text" class="form-control" id="kutipan" name="kutipan" value="<?= htmlspecialchars($kutipan) ?>">
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="summernote" name="isi" rows="6"><?= htmlspecialchars($isi) ?></textarea>
            </div>

            <button type="submit" name="simpan" class="btn btn-gradient">Simpan Data</button>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>