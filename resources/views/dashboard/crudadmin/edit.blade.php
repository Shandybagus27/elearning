@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')


@section('contents')
    <div class="py-12">
        <h1>Halaman Edit Data Admin</h1>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}

                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.admin.update', $Admins->id) }}"
                        class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama" value="{{ $Admins->nama }}" placeholder="Masukkan nama"
                                required autofocus>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="gender">Gender</label>
                            @error('gender')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="gender"
                                       id="gender_l"
                                       value="Laki-laki"
                                       {{ old('gender', $Admins->gender) === 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_l">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="gender"
                                       id="gender_p"
                                       value="Perempuan"
                                       {{ old('gender', $Admins->gender) === 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender_p">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        </div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/dataadmin" class="btn btn-warning">Batal</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
