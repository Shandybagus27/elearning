@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                {{-- konten dashboard --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Jumlah Admin
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $adminsCount ?? 0 }} {{-- Menampilkan 0 jika $adminsCount tidak terdefinisi --}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}

                {{-- <div class="row"> --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Jumlah Guru
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $guruCount ?? 0 }} {{-- Menampilkan 0 jika $guruCount tidak terdefinisi --}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- </div> --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Jumlah Siswa
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $siswaCount ?? 0 }} {{-- Menampilkan 0 jika $siswaCount tidak terdefinisi --}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- Buat Konten di sini juga bisa --}}
    <div class="row">
        <div class="row ">
            <div class="col mr-5 ml-4">
                <div class="card">
                    <div class="card-body">
                        {{-- {!! $chart->container() !!} --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}

        <div class="row">
            <div class="row ">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            {{-- {!! $chartkategori->container() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
