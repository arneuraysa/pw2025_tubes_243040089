<?php include("header.php"); ?>

<div class="wrapper d-flex flex-column min-vh-100">
    <?php
    $sukses = "";
    $katakunci = $_GET['katakunci'] ?? "";

    if (isset($_GET['op']) && $_GET['op'] == 'delete') {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = mysqli_real_escape_string($koneksi, $_GET['id']);
            $sql1 = "DELETE FROM halaman WHERE id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            $sukses = $q1 ? "Berhasil hapus data" : "Gagal hapus data: " . mysqli_error($koneksi);
        } else {
            $sukses = "ID tidak valid atau tidak ditemukan.";
        }
    }
    ?>

    <style>
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
        }

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
        }

        .badge-edit:hover {
            background-color: #5a32a3;
        }

        .badge-delete {
            background-color: #d63384;
            color: white;
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 14px;
        }

        .badge-delete:hover {
            background-color: #b62d72;
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

        .pagination .page-link {
            color: #6f42c1;
        }

        .pagination .active .page-link {
            background-color: #9966ff;
            color: white;
            border-color: #9966ff;
        }
    </style>

    <div class="container mt-5 mb-5 gradient-bg">
        <h2 class="fw-bold text-center mb-4">Daftar Halaman Admin</h2>

        <div class="mb-3 text-end">
            <a href="halaman_input.php" class="btn btn-gradient">+ Buat Halaman Baru</a>
        </div>

        <?php if ($sukses): ?>
            <div class="alert alert-success"><?= $sukses ?></div>
        <?php endif; ?>

        <form class="row g-3 mb-4" method="get">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci..." name="katakunci" value="<?= htmlspecialchars($katakunci) ?>">
            </div>
            <div class="col-md-4">
                <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-gradient w-100">
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 150px;">Judul</th>
                        <th style="width: 300px;">Kutipan</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sqltambahan = "";
                    $per_halaman = 10;

                    if ($katakunci != '') {
                        $array_katakunci = explode(" ", $katakunci);
                        $sqlcari = [];
                        foreach ($array_katakunci as $kata) {
                            $kata = mysqli_real_escape_string($koneksi, $kata);
                            $sqlcari[] = "(judul LIKE '%$kata%' OR kutipan LIKE '%$kata%' OR isi LIKE '%$kata%')";
                        }
                        $sqltambahan = "WHERE " . implode(" OR ", $sqlcari);
                    }

                    $sql1  = "SELECT * FROM halaman $sqltambahan";
                    $page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $mulai = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
                    $q1    = mysqli_query($koneksi, $sql1);
                    $total = mysqli_num_rows($q1);
                    $pages = ceil($total / $per_halaman);
                    $nomor = $mulai + 1;
                    $sql1 .= " ORDER BY id DESC LIMIT $mulai, $per_halaman";
                    $q1 = mysqli_query($koneksi, $sql1);

                    while ($r1 = mysqli_fetch_array($q1)):
                    ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= htmlspecialchars($r1['judul']) ?></td>
                            <td><?= htmlspecialchars($r1['kutipan']) ?></td>
                            <td>
                                <a href="halaman_input.php?id=<?= $r1['id'] ?>" class="badge-edit me-2 text-decoration-none">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <a href="halaman.php?op=delete&id=<?= $r1['id'] ?>" onclick="return confirm('Apakah anda yakin ingin hapus data?')" class="badge-delete text-decoration-none">
                                    <i class="bi bi-trash me-1"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-4">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="halaman.php?katakunci=<?= urlencode($katakunci) ?>&page=<?= $page - 1 ?>">&laquo;</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $pages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? "active" : "" ?>">
                        <a class="page-link" href="halaman.php?katakunci=<?= urlencode($katakunci) ?>&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $pages): ?>
                    <li class="page-item">
                        <a class="page-link" href="halaman.php?katakunci=<?= urlencode($katakunci) ?>&page=<?= $page + 1 ?>">&raquo;</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

</div> <!-- end wrapper -->

<?php include("footer.php"); ?>