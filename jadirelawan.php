<?php
include_once("header.php");
require_once("connection/koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $alasan = htmlspecialchars($_POST['alasan']);

    $query = "INSERT INTO aktivitas (nama, email, alasan) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $alasan);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>
                alert('Pendaftaran berhasil dikirim!');
                window.location.href = 'cariaktivitas.php';
            </script>";
        } else {
            echo "<div class='alert alert-danger text-center'>Gagal mengirim formulir. Silakan coba lagi.</div>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert alert-danger text-center'>Kesalahan server. Silakan coba lagi.</div>";
    }
}
?>

<div class="container my-5">
    <div class="card shadow-sm p-4 mx-auto" style="max-width: 700px;">
        <h2 class="mb-4 text-center" style="color: #000;">Daftar Aktivitas</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="alasan" class="form-label">Mengapa Anda tertarik untuk jadi relawan pada aktivitas ini?</label>
                <textarea class="form-control" id="alasan" name="alasan" rows="4" required></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn text-white fw-bold" style="
                    background: linear-gradient(to right, #6f42c1, #007bff);
                    border: none;
                    font-size: 1.1rem;">
                    Kirim Formulir Pendaftaran
                </button>
            </div>
        </form>
    </div>
</div>

<?php include_once("footer.php"); ?>