@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')

    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Data Kelas</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <a href="{{ route('dashboard.admin.create') }}"> --}}
            <a href="{{ route('dashboard.kelas.create') }}">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>


        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-sm text-left text-gray-900 px-20 py-15 text-center">No</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Nama Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $kl)
                            <tr>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $kl->nama_kelas }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
