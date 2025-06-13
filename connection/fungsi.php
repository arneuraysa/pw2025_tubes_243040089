<?php
function url_dasar()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    return $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
}

function ambil_gambar($id_tulisan)
{
    global $koneksi;
    $sql1 = "SELECT * FROM halaman WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);

    if (!$r1) return ''; // data tidak ditemukan

    $text = $r1['isi'];
    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);

    if (isset($img[1])) {
        $gambar = str_replace("../img/", url_dasar() . "/img/", $img[1]);
        return $gambar;
    } else {
        return ''; // atau bisa pakai default image
    }
}

function ambil_judul($id_judul)
{
    global $koneksi;
    $sql1 = "SELECT * FROM halaman where id = '$id_judul' ";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['judul'];
    return $text;
}

function ambil_kutipan($id_tulisan)
{
    global $koneksi;
    $sql1 = "SELECT * FROM halaman where id = '$id_tulisan' ";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['kutipan'];
    return $text;
}

function ambil_isi($id_tulisan)
{
    global $koneksi;
    $sql1 = "SELECT * FROM halaman where id = '$id_tulisan' ";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = Strip_tags($r1['isi']);
    return $text;
}

function bersihkan_judul($judul)
{
    $judul_baru = strtolower($judul);
    $judul_baru = preg_replace("/[^a-zA-Z0-0\s]/", "", $judul_baru);
    $judul_baru = str_replace(" ", "-", $judul_baru);
    return $judul_baru;
}

function ambil_link($id)
{
    global $koneksi;
    $sql1 = "SELECT * FROM halaman where id = '$id' ";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $judul = Strip_tags($r1['judul']);
    // http://localhost/pw2025_tubes_243040089/halaman.php/8/judul
    return url_dasar() . "cariaktivitas.php/$id/$judul";
}

function dapatkan_id()
{
    $id     = "";
    if (isset($_SERVER['PATH_INFO'])) {
        $id = dirname($_SERVER['PATH_INFO']);
        $id = preg_replace("/[^0-9]/", "", $id);
    }
    return $id;
}

function set_isi($isi)
{
    $isi   = str_replace("../img/", url_dasar() . "/img/", $isi);
    return $isi;
}

function maximum_kata($isi, $maximun) //kalau banyak kata (),20
{
    $array_isi = explode("", $isi);
    $array_isi = array_slice($array_isi, 0, $maximun);
    $isi = implode("", $array_isi);
    return $isi;
}

//Buat akun 
function registrasi($data)
{
    global $koneksi;

    $name = htmlspecialchars(stripslashes($data["name"]));
    $email = htmlspecialchars(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek name
    $result = mysqli_query($koneksi, "SELECT name FROM user WHERE name = '$name'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Nama sudah terdaftar!');
              </script>";
        return false;
    }

    // cek konfirmasi password 
    if ($password !== $password2) {
        echo "<script> 
                alert('Konfirmasi password tidak sesuai!');
             </script>";
        return false;
    }

    // cek apakah email sudah terdaftar
    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Email sudah terdaftar!');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan ke database
    $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}


//Agar login sebelum kehalaman
function cek_login()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["login"])) {
        header("Location: masuk.php");
        exit;
    }
}

//Pencarian Aktivitas
function ambil_judull($id)
{
    global $koneksi;
    $q = mysqli_query($koneksi, "SELECT judul FROM events WHERE id = $id");
    if ($r = mysqli_fetch_assoc($q)) return $r['judul'];
    return '';
}

function ambil_tanggal($id)
{
    global $koneksi;
    $q = mysqli_query($koneksi, "SELECT tanggal FROM events WHERE id = $id");
    if ($r = mysqli_fetch_assoc($q)) return $r['tanggal'];
    return '';
}

function ambil_lokasi($id)
{
    global $koneksi;
    $q = mysqli_query($koneksi, "SELECT lokasi FROM events WHERE id = $id");
    if ($r = mysqli_fetch_assoc($q)) return $r['lokasi'];
    return '';
}

function ambil_gambarr($id)
{
    global $koneksi;
    $q = mysqli_query($koneksi, "SELECT gambar FROM events WHERE id = $id");
    if ($r = mysqli_fetch_assoc($q)) {
        return url_dasar() . "/img/" . $r['gambar'];
    }
    return '';
}

$koneksi = mysqli_connect("localhost", "root", "", "pw2025_tubes_243040089");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
