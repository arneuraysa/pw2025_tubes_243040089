<?php
include_once("header.php");
include_once("connection/koneksi.php");

$pesan = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama    = htmlspecialchars($_POST['nama']);
    $email   = htmlspecialchars($_POST['email']);
    $nominal = (int)$_POST['nominal'];
    $metode  = htmlspecialchars($_POST['metode']);

    if ($nominal < 1000 || $nominal > 1000000000) {
        $pesan = "<div class='alert alert-warning text-center'>Nominal harus antara 1.000 sampai 1.000.000.000</div>";
    } else {
        $query = "INSERT INTO donasi (nama, email, nominal, metode) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssis", $nama, $email, $nominal, $metode);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                $pesan = "<div class='alert alert-success text-center'>Donasi berhasil dikirim. Terima kasih!</div>";
            } else {
                $pesan = "<div class='alert alert-danger text-center'>Gagal mengirim donasi. Silakan coba lagi.</div>";
            }

            mysqli_stmt_close($stmt);
        } else {
            $pesan = "<div class='alert alert-danger text-center'>Kesalahan server saat memproses donasi.</div>";
        }
    }
}
?>

<!-- Section Donasi -->
<div class="position-relative text-white"
    style="background-image: url('<?php echo ambil_gambar("11") ?>'); 
           background-size: cover; 
           background-position: center; 
           background-attachment: fixed; 
           height: 50vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
</div>

<div class="container bg-white rounded-4 shadow-lg py-4 px-3 position-relative"
    style="margin-top: -250px; z-index: 3; max-width: 1000px; margin-bottom: 80px;">

    <div class="container my-5">
        <h3 class="fw-bold mb-4 text-center" style="font-size: 2.5rem;">Formulir Donasi</h3>

        <!-- Notifikasi jika ada -->
        <?php echo $pesan; ?>

        <form method="POST" action="">

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="nama" class="form-label"><span class="text-ungu">*</span> Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Alamat Email -->
            <div class="mb-3">
                <label for="email" class="form-label"><span class="text-ungu">*</span> Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Nominal Donasi -->
            <div class="mb-3">
                <label for="nominal" class="form-label"><span class="text-ungu">*</span> Nominal Donasi</label>
                <input type="number" class="form-control" id="nominal" name="nominal" required min="1000" max="1000000000" placeholder="Contoh: 50000">
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-4">
                <label for="metode" class="form-label"><span class="text-ungu">*</span> Metode Pembayaran</label>
                <select class="form-select" id="metode" name="metode" required>
                    <option value="" disabled selected>Pilih metode pembayaran</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="e-wallet">E-Wallet</option>
                    <option value="kartu_kredit">Kartu Kredit</option>
                </select>
            </div>

            <!-- Tombol Kirim -->
            <div class="text-end">
                <button type="submit" class="btn bg-gradient-ungu-biru px-4 border-0">Kirim Donasi</button>
            </div>

        </form>
    </div>
</div>

<?php include_once("footer.php"); ?>