<?php
require 'connection/koneksi.php';
require 'connection/fungsi.php'; // Pastikan fungsi `registrasi()` ada di sini

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Berhasil membuat akun!');
            window.location.href = 'masuk.php';
        </script>";
        exit;
    } else {
        $error = mysqli_error($koneksi);
    }
}
?>

<?php include_once("header.php"); ?>

<div class="container mt-5 mb-5 pt-5 pb-5">
    <h2 class="text-center mb-4" style="font-size: 2.50rem; color: #000;">Registrasi Akun Relawan</h2>

    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-body">
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center"><?php echo $error; ?></div>
            <?php endif; ?>

            <form action="" method="post">
                <h5 class="mb-3" style="font-size: 1.3rem;">Akun Relawan</h5>

                <div class="mb-3">
                    <label for="nama" class="form-label" style="font-size: 1rem;">
                        <span style="color: #6f42c1;">*</span> Nama
                    </label>
                    <input type="text" name="name" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 1rem;">
                        <span style="color: #6f42c1;">*</span> Email
                    </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="john@doe.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label" style="font-size: 1rem;">
                        <span style="color: #6f42c1;">*</span> Password
                    </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Minimal 8 karakter" required>
                </div>

                <div class="mb-3">
                    <label for="Password2" class="form-label" style="font-size: 1rem;">
                        <span style="color: #6f42c1;">*</span> Konfirmasi Password
                    </label>
                    <input type="password" name="password2" class="form-control" id="Password2" placeholder="Minimal 8 karakter" required>
                </div>

                <div class="d-grid">
                    <button type="submit" name="register" class="btn text-white fw-bold" style="
                        font-size: 1.2rem;
                        background: linear-gradient(to right, #6f42c1, #007bff);
                        border: none;">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>