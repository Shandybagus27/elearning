@extends('dashboard.layout.app')

@section('title', 'Edit Data Siswa')

@section('contents')
    <div class="py-12">
        <h1>Halaman Edit Data Siswa</h1>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="col-lg-8">
                    <form method="POST" action="{{ route('dashboard.siswa.update', $siswa->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" id="nis" name="nis" value="{{ old('nis', $siswa->nis) }}"
                                class="form-control @error('nis') is-invalid @enderror" required>
                            @error('nis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}"
                                class="form-control @error('nama') is-invalid @enderror" required>
                            @error('nama')
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
                                       value="laki-laki" {{ old('gender', $siswa->gender) === 'laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_p"
                                       value="perempuan" {{ old('gender', $siswa->gender) === 'perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_p">Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}"
                                class="form-control @error('tempat_lahir') is-invalid @enderror">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $siswa->tgl_lahir) }}"
                                class="form-control @error('tgl_lahir') is-invalid @enderror">
                            @error('tgl_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $siswa->email) }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama_ortu">Nama Orang Tua</label>
                            <input type="text" id="nama_ortu" name="nama_ortu" value="{{ old('nama_ortu', $siswa->nama_ortu) }}"
                                class="form-control @error('nama_ortu') is-invalid @enderror">
                            @error('nama_ortu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $siswa->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="phone_number">Nomor HP</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $siswa->phone_number) }}"
                                class="form-control @error('phone_number') is-invalid @enderror">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="kelas_id">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}" {{ old('kelas_id', $siswa->kelas_id) == $kls->id ? 'selected' : '' }}>
                                        {{ $kls->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/datasiswa" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
