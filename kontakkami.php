<?php
include_once("connection/koneksi.php");
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");

$pesan = "";

// Proses form jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama     = htmlspecialchars($_POST['nama'] ?? '');
    $email    = htmlspecialchars($_POST['email'] ?? '');
    $subyek   = htmlspecialchars($_POST['subyek'] ?? '');
    $isiPesan = htmlspecialchars($_POST['pesan'] ?? '');

    $query = "INSERT INTO kontak (nama, email, subyek, pesan, tanggal_kirim) VALUES (?, ?, ?, ?, NOW())";
    $stmt = mysqli_prepare($koneksi, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $subyek, $isiPesan);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $pesan = "<div class='alert alert-success text-center'>Pesan berhasil dikirim!</div>";
    } else {
        $pesan = "<div class='alert alert-danger text-center'>Pesan gagal dikirim. Coba lagi nanti.</div>";
    }
}
?>

<div class="container" style="margin-top: 100px; margin-bottom: 200px;">
    <div class="row">
        <!-- Form -->
        <div class="col-md-8">
            <div class="card p-4 text-center">
                <h2 class="mb-4" style="font-size: 2.50rem;">Kontak Kami</h2>

                <!-- Notifikasi -->
                <?php echo $pesan; ?>

                <form id="contactForm" class="text-start" method="POST" action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label"><span class="text-ungu">*</span> Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><span class="text-ungu">*</span> Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subyek" class="form-label"><span class="text-ungu">*</span> Subyek Pesan</label>
                        <input type="text" class="form-control" id="subyek" name="subyek" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label"><span class="text-ungu">*</span> Isi Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn bg-gradient-ungu-biru text-white w-100 fw-bold"
                        onmouseover="this.style.background='linear-gradient(90deg, #5a2ca0, #0b5ed7)'"
                        onmouseout="this.style.background='linear-gradient(90deg, #6f42c1, #0d6efd)'">
                        Kirim
                    </button>
                </form>
            </div>
        </div>

        <!-- Info Kontak -->
        <div class="col-md-4">
            <div class="p-3 bg-gradient-ungu-biru text-white rounded">
                <h5 class="mb-3">Volunteer Hub Bandung</h5>
                <p class="mb-1">Jl. Dr. Setiabudi No. 193</p>
                <p class="mb-1">Jawa Barat 40153</p>
                <p class="mb-1">📞 (022) 2021440</p>
                <p class="mb-0">✉ kontak@aksirelawan.org</p>
            </div>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>