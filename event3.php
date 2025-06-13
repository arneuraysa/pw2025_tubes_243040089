<?php include_once("header.php") ?>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-8" style="height: 100vh; overflow-y: auto;">
            <div class="ratio ratio-16x9 mb-4" style="border-radius: 8px; overflow: hidden;">
                <img src="<?php echo ambil_gambar('63'); ?>" class="img-fluid w-100 h-100 object-fit-cover" alt="Trash Hero">
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
                    <div class="tab-pane fade show active p-4 bg-light rounded" id="deskripsi" role="tabpanel">
                        <h5 class="fw-bold mb-3">Deskripsi</h5>
                        <p>
                            Tahukah kita, bahwa berdasarkan hasil study, 1 dari 3 remata di Indonesia mengalami masalah kesehatan mental.
                            kondisi ini sudah sangat mengkhawatirkan, kita tidak bisa bergantung sepenuhnya pada pemerintah, masyarakat harus
                            bergerak, dan melakukan berbagai upaya mengatasi hal ini. kami Mengundang anda-anda yang peduli pada nasib Anak dan
                            remaja Indonesia untuk bergabung dalam kegiatan ini.
                        </p>
                    </div>

                    <div class="tab-pane fade p-4 bg-light rounded show active" id="pekerjaan" role="tabpanel">
                        <h5 class="fw-bold mb-3">
                            Kampanye dan Penggalangan Dana untuk mendukung kegiatan bebaskan Anak dan remaja Indonesia dari masalah kesehatan Jiwa
                        </h5>
                        <p><strong>👥 Relawan Dibutuhkan:</strong> 100 orang</p>
                        <p><strong>⏱ Total Jam Kerja:</strong> 10 jam</p>

                        <h6 class="fw-bold mt-4">Tugas Relawan</h6>
                        <p>
                            Menyebarluaskan informasi kepada pihak-pihak yang dianggap tepat. Kami mengilustrasikan project ini dengan alur:
                            Relawan mencari ojek online kemudian menawarkan kerjasama untuk menyebarkan brosur atau lembar informasi yang telah disiapkan
                            kepada setiap penumpangnya. Benefit yang didapatkan relawan dan ojek online akan dijelaskan dalam briefing.
                        </p>

                        <h6 class="fw-bold">Kriteria Relawan</h6>
                        <p>
                            Punya komitmen dan ketertarikan dengan isu anak dan remaja, khususnya mengenai masalah kesehatan jiwa,
                            bersedia berinteraksi baik secara virtual maupun tatap muka dengan pihak-pihak yang akan menjadi target kampanye.
                        </p>

                        <h6 class="fw-bold">Perlengkapan Relawan</h6>
                        <p>Tidak memerlukan perlengkapan khusus.</p>

                        <h6 class="fw-bold">Informasi Tambahan</h6>
                        <p>Project ini terbuka untuk Relawan dari seluruh wilayah di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="position-sticky top-0 p-3 bg-white border rounded shadow-sm">
                <span class="badge bg-gradient-ungu-biru mb-3">Event</span>
                <h5 class="fw-bold mb-4">Kampanye Bebaskan Anak dari Masalah Kesehatan Jiwa</h5>

                <h6 class="mb-2">📅 Jadwal Event</h6>
                <p class="mb-1"><strong>Senin, 10 Juli 2025</strong></p>
                <p class="mb-3">Pukul 07:30 - 09:00</p>

                <p class="mb-3">
                    📍 Yogyakarta
                </p>

                <p class="small mb-4 text-ungu">⚠ Batas Registrasi: 23 Juni 2025</p>
                <div class="d-grid gap-2">
                    <a href="jadirelawan.php" class="btn bg-gradient-ungu-biru text-white">Jadi Relawan</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once("footer.php") ?>