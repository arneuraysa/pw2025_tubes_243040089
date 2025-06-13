<?php include_once("header.php") ?>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-8" style="height: 100vh; overflow-y: auto;">
            <div class="ratio ratio-16x9 mb-4" style="border-radius: 8px; overflow: hidden;">
                <img src="<?php echo ambil_gambar('62'); ?>" class="img-fluid w-100 h-100 object-fit-cover" alt="Trash Hero">
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
                        <p>Apakah kamu suka baca buku? Apakah kamu tertarik dengan isu lingkungan? Ingin berbuat sesuatu untuk bumi, tapi bingung mulai dari mana? </p>
                        <p>Yuk bergabung menjadi Baca Bumi Squad (BBSquad)! Bersama kita akan membaca, berdiskusi dan melakukan aksi sederhana untuk kebaikan bumi </p>
                    </div>

                    <div class="tab-pane fade p-4 bg-light rounded show active" id="pekerjaan" role="tabpanel">
                        <h5 class="fw-bold mb-3">BBSquad</h5>
                        <p><strong>👥 Relawan Dibutuhkan:</strong> 50 orang</p>
                        <p><strong>⏱ Total Jam Kerja:</strong> 30 jam</p>

                        <h6 class="fw-bold mt-4">Tugas Relawan</h6>
                        <p>
                            <strong>Misi BBSquad:</strong><br>
                            - membaca 1 buku/artikel bertema bumi dan lingkungan setiap bulan dan membuat review di media sosial<br>
                            - mengikuti diskusi virtual setiap bulan<br>
                            - melakukan 1 aksi kecil untuk bumi dan mendokumentasikan dalam bentuk konten lalu posting di media sosial
                        </p>

                        <p>
                            Jika berhasil menyelesaikan misi, BBSquad akan mendapatkan:<br>
                            - Sertifikat kontribusi dan surat rekomendasi (jika dibutuhkan)<br>
                            - Public feature sebagai BBHero di Instagram<br>
                            - Digital Squad Badge, sebagai identitas di platform digital<br>
                            - Paket buku dan merchandise lainnya
                        </p>

                        <h6 class="fw-bold">Kriteria Relawan</h6>
                        <p>
                            - Suka baca buku, dan mau membaca buku-buku bertema bumi dan lingkungan<br>
                            - Tertarik dengan gaya hidup ramah lingkungan<br>
                            - Suka bikin konten di media sosial, baik tulisan maupun video<br>
                            - Mau belajar dan gemar menyebarkan kebaikan
                        </p>

                        <h6 class="fw-bold">Perlengkapan Relawan</h6>
                        <p>Media sosial aktif (Instagram/Tiktok) - bukan second account</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="position-sticky top-0 p-3 bg-white border rounded shadow-sm">
                <span class="badge bg-gradient-ungu-biru mb-3">Event</span>
                <h5 class="fw-bold mb-4">BBSquad</h5>

                <h6 class="mb-2">📅 Jadwal Event</h6>
                <p class="mb-1"><strong>Minggu, 1 Juli 2025</strong></p>
                <p class="mb-3">Pukul 08:00 - 12:00</p>

                <p class="mb-3">
                    📍 Kota Bandung
                </p>

                <p class="small mb-4 text-ungu">⚠ Batas Registrasi: 26 Juni 2025</p>
                <div class="d-grid gap-2">
                    <a href="jadirelawan.php" class="btn bg-gradient-ungu-biru text-white">Jadi Relawan</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once("footer.php") ?>