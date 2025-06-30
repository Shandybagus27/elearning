@extends('layouts.app')
<hr class="featurette-divider">
<hr class="featurette-divider">
<main>
    <!-- Konten Utama -->
    <div class="container marketing">
        <div class="row featurette">
            <div class="row" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="siswa">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Materi Belajar</li>
                </ol>
                &nbsp;
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="row">
                    <h3>Materi Belajar Guru</h3>
                    <h3>Kamu bisa mengakses materi hingga kuis disini</h3>
                </div>
                <button id="editToggle" class="btn btn-warning">Edit Mode: OFF</button>
            </div>

            <hr class="featurette-divider">
            <div class="row">
                <p class="fs-3">BAB 1</p>
                <div class="chapter-card">
                    <img src="img/gambar4.png" alt="Pengenalan Cybersecurity">
                    <div class="chapter-content">
                        <h4 style="color: black">Pengenalan Cybersecurity: Meningkatkan pengetahuan dan berfikir kritis
                        </h4>
                    </div>
                    <a href="BAB1">
                        <button type="button" class="btn btn-success">Mulai</button>
                    </a>
                </div>
                &nbsp;
                <p class="fs-3">BAB 2</p>
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
                </div>
                &nbsp;
                <div class="edit-controls d-none">
                    <a href="#" class="btn btn-success">+ Tambah Chapter</a>
                </div>
            </div>
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
