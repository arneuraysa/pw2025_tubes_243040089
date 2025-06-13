<?php include("header.php"); ?>

<?php
// Proses hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $res = mysqli_query($koneksi, "SELECT gambar FROM events WHERE id = $id");
    $data = mysqli_fetch_assoc($res);
    if ($data && file_exists("../img/" . $data['gambar'])) {
        unlink("../img/" . $data['gambar']);
    }
    mysqli_query($koneksi, "DELETE FROM events WHERE id = $id");
    header("Location: events.php");
    exit;
}

$keyword = isset($_GET['cari']) ? mysqli_real_escape_string($koneksi, $_GET['cari']) : '';
if ($keyword) {
    $query = "SELECT * FROM events WHERE judul LIKE '%$keyword%' OR tanggal LIKE '%$keyword%' OR lokasi LIKE '%$keyword%' ORDER BY id DESC";
} else {
    $query = "SELECT * FROM events ORDER BY id DESC";
}
$result = mysqli_query($koneksi, $query);
?>

<style>
    .gradient-bg {
        background: linear-gradient(to right, #ffccff, #e6ccff);
        padding: 25px;
        border-radius: 15px;
    }

    .btn-gradient {
        background-image: linear-gradient(to right, #ff66cc, #9966ff);
        color: white;
        border: none;
    }

    .btn-gradient:hover {
        background-image: linear-gradient(to right, #ff3399, #8000ff);
        color: white;
    }

    .badge-edit {
        background-color: #6f42c1;
        color: white;
        padding: 8px 12px;
        border-radius: 10px;
        font-size: 14px;
        text-decoration: none;
    }

    .badge-edit:hover {
        background-color: #5a32a3;
        color: white;
    }

    .badge-delete {
        background-color: #d63384;
        color: white;
        padding: 8px 12px;
        border-radius: 10px;
        font-size: 14px;
        text-decoration: none;
    }

    .badge-delete:hover {
        background-color: #b62d72;
        color: white;
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
        background-color: #fdf0ff;
    }

    .table-striped>tbody>tr:nth-of-type(even) {
        background-color: #f2e6ff;
    }

    .table thead th {
        background: linear-gradient(to right, #ff99cc, #cc99ff);
        color: white;
        vertical-align: middle;
        text-align: center;
        white-space: nowrap;
    }

    .table td {
        vertical-align: top;
        word-break: break-word;
        max-width: 300px;
    }
</style>

<div class="container mt-5 mb-5 gradient-bg" style="min-height: 78vh; padding-bottom: 100px;">
    <h2 class="fw-bold text-center mb-4">Daftar Event</h2>

    <div class="mb-3 text-end">
        <a href="event_input.php" class="btn btn-gradient">
            <i class="bi bi-plus-circle me-1"></i> + Tambah Event
        </a>
    </div>

    <form class="row g-3 mb-4" method="get" action="events.php" id="searchForm">
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Masukkan Kata Kunci..." name="cari" id="searchInput" value="<?= htmlspecialchars($keyword) ?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-gradient w-100">Cari Event</button>
        </div>
    </form>

    <script>
        const searchInput = document.getElementById('searchInput');
        const searchForm = document.getElementById('searchForm');
        searchInput.addEventListener('input', function() {
            if (searchInput.value.trim() === '') {
                searchForm.submit();
            }
        });
    </script>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if (mysqli_num_rows($result) > 0):
                    while ($row = mysqli_fetch_assoc($result)):
                ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($row['judul']) ?></td>
                            <td><?= htmlspecialchars($row['tanggal']) ?></td>
                            <td><?= htmlspecialchars($row['lokasi']) ?></td>
                            <td><img src="../img/<?= $row['gambar'] ?>" width="100"></td>
                            <td>
                                <a href="event_input.php?id=<?= $row['id'] ?>" class="badge-edit me-2">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <a href="events.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="badge-delete">
                                    <i class="bi bi-trash me-1"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile;
                else: ?>
                    <tr>
                        <td colspan="6">Data tidak ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("footer.php"); ?>