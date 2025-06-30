@extends('dashboard.layout.app')

@section('title', 'Edit Data Guru')

@section('contents')
    <div class="py-12">
        <h1>Halaman Edit Data Guru</h1>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="col-lg-8">
                    <form method="POST" action="{{ route('dashboard.guru.update', $guru->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" id="nip" name="nip" value="{{ old('nip', $guru->nip) }}"
                                class="form-control @error('nip') is-invalid @enderror" required>
                            @error('nip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama', $guru->nama) }}"
                                class="form-control @error('nama') is-invalid @enderror" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}"
                                class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                            @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $guru->tgl_lahir) }}"
                                class="form-control @error('tgl_lahir') is-invalid @enderror" required>
                            @error('tgl_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label>Gender</label>
                            @error('gender')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_l"
                                       value="Laki-laki" {{ old('gender', $guru->gender) === 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_p"
                                       value="Perempuan" {{ old('gender', $guru->gender) === 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_p">Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="phone_number">Nomor HP</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $guru->phone_number) }}"
                                class="form-control @error('phone_number') is-invalid @enderror" required>
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $guru->email) }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat', $guru->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" id="pendidikan" name="pendidikan" value="{{ old('pendidikan', $guru->pendidikan) }}"
                                class="form-control @error('pendidikan') is-invalid @enderror" required>
                            @error('pendidikan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('dashboard.guru.dataguru') }}" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
