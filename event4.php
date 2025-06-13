<?php include_once("header.php") ?>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-8" style="height: 100vh; overflow-y: auto;">
            <div class="ratio ratio-16x9 mb-4" style="border-radius: 8px; overflow: hidden;">
                <img src="<?php echo ambil_gambar('60'); ?>" class="img-fluid w-100 h-100 object-fit-cover" alt="Trash Hero">
            </div>

            <div class="container py-4">
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pekerjaan-tab" data-bs-toggle="tab" data-bs-target="#pekerjaan" type="button" role="tab">Pekerjaan</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade p-4 bg-light rounded show active" id="deskripsi" role="tabpanel">
                        <h5 class="fw-bold mb-3">Deskripsi</h5>
                        <p>
                            Mari bergabung dan berkontribusi dalam menjaga kebersihan lingkungan kita dengan mengikuti clean up bersama
                            Trash Hero Jakarta. Bersama-sama, kita dapat menciptakan perubahan positif yang berkelanjutan dan memberikan
                            contoh bagi orang lain untuk ikut peduli terhadap lingkungan. Ayo, tunjukkan kepedulianmu dan beraksi dalam
                            gerakan ini. Satu tindakan kecil dari kita dapat membuat perbedaan besar bagi lingkungan kita!
                        </p>
                    </div>

                    <div class="tab-pane fade p-4 bg-light rounded show active" id="pekerjaan" role="tabpanel">
                        <h5 class="fw-bold mb-3">Relawan Clean Up Trash Hero Jakarta</h5>
                        <p><strong>👥 Relawan Dibutuhkan:</strong> 50 orang</p>
                        <p><strong>⏱ Total Jam Kerja:</strong> 2 jam</p>

                        <h6 class="fw-bold mt-4">Tugas Relawan</h6>
                        <p>Memungut sampah di area Lapangan Banteng</p>

                        <h6 class="fw-bold">Kriteria Relawan</h6>
                        <p>
                            Setiap orang dapat mengikuti kegiatan bersama Trash Hero Jakarta. Tidak ada batasan usia, gender, maupun latar belakang.
                        </p>

                        <h6 class="fw-bold">Perlengkapan Relawan</h6>
                        <ul>
                            <li>Sarung tangan kain</li>
                            <li>Botol minum atau tumbler</li>
                            <li>Obat-obatan pribadi</li>
                        </ul>

                        <h6 class="fw-bold">Domisili</h6>
                        <p>DKI Jakarta</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="position-sticky top-0 p-3 bg-white border rounded shadow-sm">
                <span class="badge bg-gradient-ungu-biru mb-3">Event</span>
                <h5 class="fw-bold mb-4">Clean up Trash Hero Jakarta ke-195</h5>

                <h6 class="mb-2">📅 Jadwal Event</h6>
                <p class="mb-1"><strong>Minggu, 15 Juni 2025</strong></p>
                <p class="mb-3">Pukul 07:30 - 09:00</p>

                <p class="mb-3">
                    📍 Lapangan Banteng, Jakarta Pusat. Titik kumpul di pintu masuk Lapangan Banteng di depan Hotel Borobudur Kota Administrasi Jakarta Pusat, DKI Jakarta.
                </p>

                <p class="small mb-4 text-ungu">⚠ Batas Registrasi: 14 Juni 2025</p>
                <div class="d-grid gap-2">
                    <a href="jadirelawan.php" class="btn bg-gradient-ungu-biru text-white">Jadi Relawan</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once("footer.php") ?>