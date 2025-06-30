@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data guru</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.guru.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP guru</label>
                            <div class="form-group">
                                <input name="nip" type="text" class="form-control @error('nip') is-invalid @enderror"
                                    id="nip" placeholder="Nomor Induk Pegawai" required autofocus>
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama guru</label>
                            <div class="form-group">
                                <input name="nama" type="text"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    placeholder="Nama Lengkap" required autofocus>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">tempat Lahir</label>
                            <div class="form-group">
                                <input name="tempat_lahir" type="text"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                                    placeholder="Tempat Lahir" required autofocus>
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date"
                                class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                                value="{{ old('tgl_lahir') }}" required>
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-group">
                                <select name="gender" id="gender"
                                    class="form-control @error('gender') is-invalid @enderror" required autofocus>
                                    <option value="">-- Pilih Gender --</option>
                                    <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Nomor HP</label>
                            <input name="phone_number" type="tel"
                                class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                placeholder="08xxxxxxxxxx" value="{{ old('phone_number') }}" required>
                            @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="nama@email.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan"
                                class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan"
                                value="{{ old('pendidikan') }}" placeholder="Contoh: S1 Teknik Informatika" required>
                            @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/dataguru" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
