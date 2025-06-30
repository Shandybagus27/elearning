@extends('layouts.app')
<hr class="featurette-divider">
<hr class="featurette-divider">
<main>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Dashboard Guru</h2>
            <button id="editToggle" class="btn btn-warning">Edit Mode: OFF</button>
        </div>
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
                                    <div class="edit-controls d-none mt-2">
                                        <a href="#" class="btn btn-success btn-sm">+ Tambah Materi</a>
                                    </div>
                                    &nbsp;
                                    <a href="#">
                                        <div class="card">
                                            <div class="content">
                                                <p>Kuis</p>
                                                <div class="edit-controls d-none mt-1">
                                                    {{-- <a href="{{ route('kuis.edit', $chapter->kuis->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                    {{-- <form action="{{ route('kuis.destroy', $chapter->kuis->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form> --}}
                                                    <form action="#" method="POST" class="d-inline">
                                                        @csrf @method('DELETE')
                                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <div class="card">
                                                    <a href="#" class="d-block mb-2">Kuis</a>
                                                </div> --}}
                                        </div>
                                    </a>
                                    <div class="edit-controls d-none mt-2">
                                        <a href="#" class="btn btn-sm btn-success">+ Tambah Kuis</a>
                                    </div>
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
        <!-- Daftar Chapter -->
        {{-- @foreach ($chapters as $chapter) --}}
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                {{-- <strong>{{ $chapter->judul }}</strong> --}}
                <strong>judul</strong>
                <div class="edit-controls d-none">
                    {{-- <a href="{{ route('chapter.edit', $chapter->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    {{-- <form action="{{ route('chapter.destroy', $chapter->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form> --}}
                    <form action="#" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <!-- Materi dalam Chapter -->
                {{-- @foreach ($chapter->materi as $materi) --}}
                <div class="mb-2 p-2 border rounded bg-light d-flex justify-content-between">
                    <div>
                        {{-- <h5>{{ $materi->judul }}</h5>
                                <p>{{ $materi->deskripsi }}</p> --}}
                        <h5>judul materi</h5>
                        <p>deskripsi materi</p>
                    </div>
                    <div class="edit-controls d-none">
                        {{-- <a href="{{ route('materi.edit', $materi->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        {{-- <form action="{{ route('materi.destroy', $materi->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form> --}}
                        <form action="#" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
                {{-- @endforeach --}}

                <!-- Tambah Materi -->
                {{-- <div class="edit-controls d-none mt-2">
                        <a href="{{ route('materi.create', ['chapter_id' => $chapter->id]) }}"
                            class="btn btn-success btn-sm">+ Tambah Materi</a>
                    </div> --}}
                <div class="edit-controls d-none mt-2">
                    <a href="#" class="btn btn-success btn-sm">+ Tambah Materi</a>
                </div>

                <!-- Kuis -->
                {{-- @if ($chapter->kuis) --}}
                <hr>
                {{-- <h6>Kuis: {{ $chapter->kuis->judul }}</h6> --}}
                <h6>Kuis: </h6>
                <div class="edit-controls d-none mt-1">
                    {{-- <a href="{{ route('kuis.edit', $chapter->kuis->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    {{-- <form action="{{ route('kuis.destroy', $chapter->kuis->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form> --}}
                    <form action="#" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
                {{-- @else --}}
                {{-- <div class="edit-controls d-none mt-2">
                            <a href="{{ route('kuis.create', ['chapter_id' => $chapter->id]) }}"
                                class="btn btn-sm btn-success">+ Tambah Kuis</a>
                        </div> --}}
                <div class="edit-controls d-none mt-2">
                    <a href="#" class="btn btn-sm btn-success">+ Tambah Kuis</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        {{-- @endforeach --}}

        <!-- Tambah Chapter -->
        {{-- <div class="edit-controls d-none">
            <a href="{{ route('chapter.create') }}" class="btn btn-success">+ Tambah Chapter</a>
        </div> --}}
        <div class="edit-controls d-none">
            <a href="#" class="btn btn-success">+ Tambah Chapter</a>
        </div>
    </div>
</main>

@section('scripts')
    <script>
        const toggleBtn = document.getElementById('editToggle');
        toggleBtn.addEventListener('click', () => {
            const editElements = document.querySelectorAll('.edit-controls');
            const isHidden = editElements[0].classList.contains('d-none');
            editElements.forEach(el => el.classList.toggle('d-none'));
            toggleBtn.textContent = 'Edit Mode: ' + (isHidden ? 'ON' : 'OFF');
            toggleBtn.classList.toggle('btn-warning');
            toggleBtn.classList.toggle('btn-success');
        });
    </script>
@endsection
