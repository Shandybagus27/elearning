@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data kelas</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.kelas.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <div class="form-group">
                                <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                    id="nama_kelas" placeholder="Nama Kelas" required autofocus>
                                @error('nama_kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/datakelas" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
