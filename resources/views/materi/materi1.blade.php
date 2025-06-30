@extends('layouts.app')
<hr class="featurette-divider">
<hr class="featurette-divider">
<main>
    <!-- Konten Utama -->
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="btn btn-info">
                            Garis besar Kursus
                        </div>
                    </div>
                    <div class="accordion accordion-flush" id="courseAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Modul 1: Apa Itu Cybersecurity?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <a href="#">
                                        <div class="card">
                                            <div class="content">
                                                <p>Definisi cybersecurity, jenis-jenis ancaman</p>
                                            </div>
                                            {{-- <a href="#" class="d-block mb-2">Definisi cybersecurity, jenis-jenis
                                                ancaman</a> --}}
                                        </div>
                                    </a>
                                    &nbsp;
                                    <a href="#">
                                        <div class="card">
                                            <div class="content">
                                                <p>Pentingnya cybersecurity...</p>
                                            </div>
                                            {{-- <div class="card">
                                                    <a href="#" class="d-block mb-2">Pentingnya cybersecurity...</a>
                                                </div> --}}
                                        </div>
                                    </a>
                                    &nbsp;
                                    <a href="#">
                                        <div class="card">
                                            <div class="content">
                                                <p>Contoh kasus di mana tindakan...</p>
                                            </div>
                                            {{-- <div class="card">
                                                    <a href="#" class="d-block mb-2">Contoh kasus di mana tindakan...</a>
                                                </div> --}}
                                        </div>
                                    </a>
                                    &nbsp;
                                    <a href="#">
                                        <div class="card">
                                            <div class="content">
                                                <p>Kuis</p>
                                            </div>
                                            {{-- <div class="card">
                                                    <a href="#" class="d-block mb-2">Kuis</a>
                                                </div> --}}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Modul 2: Jenis Ancaman Cyber
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <!-- Submenu Modul 2 -->
                                    <p>Konten Modul 2 di sini...</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan modul lain sesuai kebutuhan -->
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col">
                                <h5>Pengantar</h3>
                            </div>
                            <div class="col">
                                <h5>Menampilkan 1 dari 5 </h3>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <div style="text-align: justify">
                            <p>
                                Selamat datang di Aplikasi Cyber Security.
                            </p>
                            <p>
                                Kelas Pengenalan Keamanan Siber menerapkan pembelajaran berbasis Active Learning. Apa
                                itu pembelajaran berbasis Active Learning ?
                            </p>
                            <ol>
                                <li>Siswa dapat belajar sewaktu-waktu tanpa harus bergantung pada guru.</li>
                                <li>Siswa dapat belajar dari mana saja dan kapan saja asal ada koneksi internet.</li>
                                <li>Siswa dapat belajar dengan cara berpartisipasi aktif di dalam modul.</li>
                            </ol>
                            <p>
                                Dengan metode ini harapan Zyra dan Zyber, teman-teman bisa meningkatkan kemampuan dan
                                pengetahuan kalian.
                            </p>
                            <p>
                                Silahkan tekan tombol Selanjutnya untuk melanjutkan ke modul berikutnya.
                            </p>
                        </div>
                    </div>
                    <div class="text-end mb-3">
                        <img src="img/Zyra.png" alt="Pengantar" class="" width="100px" height="100px">
                        <br>
                        <a href="pengantar">
                            <button type="button" class="btn btn-info">Selanjutnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
