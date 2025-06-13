<?php
session_start();
include_once("connection/koneksi.php");
include_once("connection/fungsi.php");

// Cek session login
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// Cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['email'])) {
        $_SESSION['login'] = true;
        $_SESSION['id_user'] = $id;
    }
}

// Login logic
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Login sebagai admin
    if ($email === 'arneuraisyaa@gmail.com' && $password === 'ar1214') {
        $_SESSION["login"] = true;
        $_SESSION["id_user"] = 0; // ID khusus admin, bisa disesuaikan
        header("Location: admin/halaman.php");
        exit;
    }

    // Login sebagai user biasa
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id_user"] = $row["id"];

            if (isset($_POST["remember"])) {
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['email']));
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<?php include_once("header.php") ?>

<div class="container my-5 py-5" style="max-width: 700px;">
    <h2 class=" text-center mb-4" style="font-size: 2.50rem;">Masuk</h2>

    <?php if (isset($error)) : ?>
        <p style="color:#5a2ca0; font-style:italic; text-align:center;">Email / Password anda salah</p>
    <?php endif; ?>

    <div class="card p-5 shadow-sm">
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label" style="font-size: 1.05rem;">
                    <span class="text-ungu">*</span> Email
                </label>
                <input type="email" name="email" class="form-control" id="email" placeholder="john@doe.com" required style="font-size: 1rem;">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label" style="font-size: 1.05rem;">
                    <span class="text-ungu">*</span> Password
                </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Minimal 8 karakter" required style="font-size: 1rem;">
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>

            <button type="submit" name="login" class="btn bg-gradient-ungu-biru w-100 text-white fw-bold" style="font-size: 1.1rem;"
                onmouseover="this.style.background='linear-gradient(90deg, #5a2ca0, #0b5ed7)'"
                onmouseout="this.style.background='linear-gradient(90deg, #6f42c1, #0d6efd)'">
                Login
            </button>
        </form>
    </div>

    <p class="text-center mt-4" style="font-size: 1.05rem;">
        Belum punya akun? <a href="buatakun.php" class="text-ungu fw-bold" style="font-size: 1.35rem; text-decoration: none;">Ayo Daftar!</a>
    </p>
</div>

<?php include_once("footer.php") ?>