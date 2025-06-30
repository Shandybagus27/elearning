@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')

    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Data Siswa</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <a href="{{ route('dashboard.admin.create') }}"> --}}
            <a href="{{ route('dashboard.siswa.create') }}">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>


        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-sm text-left text-gray-900 px-20 py-15 text-center">No</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">NIS</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Nama</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Gender</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Tempat Lahir</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Tanggal Lahir</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Email</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Nama Wali</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Domisili</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">No.HP</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Kelas</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $sw)
                            <tr>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->nis }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->nama }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->gender }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->tempat_lahir }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->tgl_lahir }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->email }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->nama_ortu }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->alamat }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->phone_number }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $sw->kelas ? $sw->kelas->nama_kelas : '-' }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('dashboard.siswa.edit', $sw->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <span>
                                            <i class="fa-solid fa-pen-to-square">
                                            </i>
                                        </span>
                                    </a>
                                    <form action="{{ route('dashboard.siswa.delete', $sw->id) }}" method="post" 
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('yakin ingin menghapus?');">
                                            <span>
                                                <i class="fa-solid fa-trash">
                                                </i>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
