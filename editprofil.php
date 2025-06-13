<?php
session_start();
include_once("connection/koneksi.php");

// Cek apakah user sudah login
if (!isset($_SESSION['login']) || !isset($_SESSION['id_user'])) {
    header("Location: masuk.php");
    exit;
}

$id_user = $_SESSION['id_user'];

// Ambil data pengguna saat ini
$query = "SELECT name, email FROM user WHERE id = '$id_user'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

// Proses form ketika disubmit
if (isset($_POST['simpan'])) {
    $nama_baru = htmlspecialchars($_POST['name']);
    $email_baru = htmlspecialchars($_POST['email']);

    // Update data
    $update = mysqli_query($koneksi, "UPDATE user SET name = '$nama_baru', email = '$email_baru' WHERE id = '$id_user'");

    if ($update) {
        $sukses = "Profil berhasil diperbarui.";
        // Perbarui juga data lokal agar langsung terlihat
        $user['name'] = $nama_baru;
        $user['email'] = $email_baru;
    } else {
        $error = "Gagal memperbarui profil. Silakan coba lagi.";
    }
}
?>

<?php include_once("header.php"); ?>

<div class="container my-5" style="max-width: 700px;">
    <h2 class="mb-4 text-center">Edit Profil</h2>

    <?php if (isset($sukses)) : ?>
        <div class="alert alert-success text-center"><?= $sukses; ?></div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger text-center"><?= $error; ?></div>
    <?php endif; ?>

    <div class="card p-4 shadow-sm">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="name" required value="<?= htmlspecialchars($user['name']); ?>">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required value="<?= htmlspecialchars($user['email']); ?>">
            </div>
            <div class="d-grid">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<?php include_once("footer.php"); ?>