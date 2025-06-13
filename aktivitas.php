<?php
include_once("connection/fungsi.php");
$keyword = isset($_POST['keyword']) ? strtolower(trim($_POST['keyword'])) : '';
?>

<div class="row row-cols-1 row-cols-md-4 g-4">

    <?php if ($keyword === '' || strpos(strtolower(ambil_judull(6)), $keyword) !== false || strpos(strtolower(ambil_lokasi(6)), $keyword) !== false): ?>
        <div class="col">
            <a href="event1.php" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="<?= ambil_gambarr("6") ?>" class="card-img-top" alt="MOMBEE" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-gradient-ungu-biru mb-2">Event</span>
                        <h6 class="card-title fw-semibold fs-6 mb-1"><?= ambil_judull(6) ?></h6>
                        <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> <?= date("j F Y", strtotime(ambil_tanggal(6))) ?></p>
                        <p class="text-muted small"><i class="bi bi-geo-alt-fill"></i> <?= ambil_lokasi(6) ?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>

    <?php if ($keyword === '' || strpos(strtolower(ambil_judull(7)), $keyword) !== false || strpos(strtolower(ambil_lokasi(7)), $keyword) !== false): ?>
        <div class="col">
            <a href="event2.php" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="<?= ambil_gambarr("7") ?>" class="card-img-top" alt="Jejak Semesta" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-gradient-ungu-biru mb-2">Event</span>
                        <h6 class="card-title fw-semibold fs-6 mb-1"><?= ambil_judull(7) ?></h6>
                        <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> <?= date("j F Y", strtotime(ambil_tanggal(7))) ?></p>
                        <p class="text-muted small"><i class="bi bi-geo-alt-fill"></i> <?= ambil_lokasi(7) ?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>

    <?php if ($keyword === '' || strpos(strtolower(ambil_judull(8)), $keyword) !== false || strpos(strtolower(ambil_lokasi(8)), $keyword) !== false): ?>
        <div class="col">
            <a href="event3.php" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="<?= ambil_gambarr("8") ?>" class="card-img-top" alt="Bincang Literasi" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-gradient-ungu-biru mb-2">Event</span>
                        <h6 class="card-title fw-semibold fs-6 mb-1"><?= ambil_judull(8) ?></h6>
                        <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> <?= date("j F Y", strtotime(ambil_tanggal(8))) ?></p>
                        <p class="text-muted small"><i class="bi bi-geo-alt-fill"></i> <?= ambil_lokasi(8) ?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>

    <?php if ($keyword === '' || strpos(strtolower(ambil_judull(9)), $keyword) !== false || strpos(strtolower(ambil_lokasi(9)), $keyword) !== false): ?>
        <div class="col">
            <a href="event4.php" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="<?= ambil_gambarr("9") ?>" class="card-img-top" alt="Workshop" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-gradient-ungu-biru mb-2">Event</span>
                        <h6 class="card-title fw-semibold fs-6 mb-1"><?= ambil_judull(9) ?></h6>
                        <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> <?= date("j F Y", strtotime(ambil_tanggal(9))) ?></p>
                        <p class="text-muted small"><i class="bi bi-geo-alt-fill"></i> <?= ambil_lokasi(9) ?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>

</div>