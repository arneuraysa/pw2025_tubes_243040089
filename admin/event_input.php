<?php include("header.php"); ?>

<?php
$edit = false;
$id = '';
$judul = '';
$tanggal = '';
$lokasi = '';
$gambar = '';

if (isset($_GET['id'])) {
    $edit = true;
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM events WHERE id=$id");
    $data = mysqli_fetch_assoc($result);

    $judul = $data['judul'];
    $tanggal = $data['tanggal'];
    $lokasi = $data['lokasi'];
    $gambar = $data['gambar'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    if ($_FILES['gambar']['name']) {
        $nama_file = md5(uniqid()) . '.' . pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/$nama_file");
    } else {
        $nama_file = $gambar;
    }

    if ($edit) {
        $query = "UPDATE events SET judul='$judul', tanggal='$tanggal', lokasi='$lokasi', gambar='$nama_file' WHERE id=$id";
    } else {
        $query = "INSERT INTO events (judul, tanggal, lokasi, gambar) VALUES ('$judul', '$tanggal', '$lokasi', '$nama_file')";
    }

    mysqli_query($koneksi, $query);
    header("Location: events.php");
    exit();
}
?>

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

<div class="container mt-5 mb-5" style="min-height: 78vh; padding-bottom: 100px;">

    <div class="form-container">
        <h2 class="text-center fw-bold mb-4"><?= $edit ? 'Edit Event' : 'Tambah Event' ?></h2>

        <div class="mb-3">
            <a href="events.php" class="btn btn-gradient">← Kembali ke Daftar Events</a>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= htmlspecialchars($judul) ?>" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= htmlspecialchars($tanggal) ?>" required>
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= htmlspecialchars($lokasi) ?>" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar <?= $edit ? '(Kosongkan jika tidak diubah)' : '' ?></label>
                <input type="file" class="form-control" name="gambar">
                <?php if ($edit && $gambar): ?>
                    <div class="mt-2">
                        <img src="../img/<?= htmlspecialchars($gambar) ?>" width="150" class="img-thumbnail">
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-gradient"><?= $edit ? 'Update Event' : 'Simpan Event' ?></button>
            </div>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>