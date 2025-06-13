<?php include_once("header.php") ?>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-8" style="height: 100vh; overflow-y: auto;">
            <div class="ratio ratio-16x9 mb-4" style="border-radius: 8px; overflow: hidden;">
                <img src="<?php echo ambil_gambar('61'); ?>" class="img-fluid w-100 h-100 object-fit-cover" alt="Trash Hero">
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
                        <p>Gabung Jadi Bagian dari MOMBEE 2025!</p>
                        <p>
                            Kamu suka dunia event, senang bertemu banyak orang, dan ingin menambah pengalaman seru?
                            Yuk jadi volunteer di MOMBEE 2025, event parenting terbesar yang akan hadir di Medan,
                            Palembang, Pekanbaru, dan Batam! Dapatkan kesempatan terlibat langsung dalam event profesional,
                            membangun relasi baru, dan tentu saja menikmati berbagai fasilitas menarik seperti konsumsi, fee,
                            dan sertifikat pengalaman. Jangan lewatkan kesempatan ini—kontribusimu bisa berdampak besar untuk ribuan keluarga yang hadir!
                        </p>
                    </div>

                    <div class="tab-pane fade p-4 bg-light rounded show active" id="pekerjaan" role="tabpanel">
                        <h5 class="fw-bold mb-4">Pekerjaan</h5>

                        <div class="accordion" id="accordionJobs">
                            <!-- Job 1 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        REGISTRASI
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 2 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>

                            <!-- Job 2 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        PENUKARAN KUPON LUCKY DRAW
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 2 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>

                            <!-- Job 3 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        OPERATOR SPIN
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 1 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>

                            <!-- Job 4 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Content Creator
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 2 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>

                            <!-- Job 5 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        Flooring
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 2 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>

                            <!-- Job 6 -->
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                        Stage
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionJobs">
                                    <div class="accordion-body">
                                        👥 Relawan Dibutuhkan: 2 orang <br>
                                        ⏱ Total Jam Kerja: 13 jam
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="position-sticky top-0 p-3 bg-white border rounded shadow-sm">
                <span class="badge bg-gradient-ungu-biru mb-3">Event</span>
                <h5 class="fw-bold mb-4">MOMBEE</h5>

                <h6 class="mb-2">📅 Jadwal Event</h6>
                <p class="mb-1"><strong>Kamis, 3 Juli 2025</strong></p>
                <p class="mb-3">Pukul 09:00 - 22:00</p>

                <p class="mb-3">
                    📍 Jl. Letkol Iskandar No.18, 24 Ilir, Kec. Bukit Kecil, Kota Palembang, Sumatera Selatan 30134 Kota Palembang, Sumatera Selatan
                </p>

                <p class="small mb-4 text-ungu">⚠ Batas Registrasi: 20 Juni 2025</p>
                <div class="d-grid gap-2">
                    <a href="jadirelawan.php" class="btn bg-gradient-ungu-biru text-white">Jadi Relawan</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once("footer.php") ?>