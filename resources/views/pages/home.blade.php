@extends('layouts.app')

@section('title')
    Home | SMK Bhakti Mulia Pare
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <div class="home">
            <div class="row">
                <div class="col align-self-center">
                    @if (auth()->user()->role == 'admin')
                    <h1 class="mb-3">
                    Sistem Informasi Akademik
                    @foreach ($items as $item)
                    </h1>
                    <p">
                    {{$item->nama}}
                    </p>
                    <p">
                    {{$item->alamat}}
                    </p>
                    <p">
                    {{$item->email}} / {{$item->no_tlpn}}
                    </p>
                    <p>
                    Akreditasi {{$item->akreditasi}}
                    </p>
                    @endforeach
                    @endif
                    @if (auth()->user()->role == 'guru')
                        <h1 class="mb-3">
                            @if (auth()->user()->guru->jns_kelamin == 'L')
                                Selamat Datang Bapak {{auth()->user()->name}}
                            @else
                                Selamat Datang Ibu {{auth()->user()->name}}
                            @endif
                        </h1>
                        <p class="mb-5">
                            @if (auth()->user()->role == 'guru')
                                Selamat Datang di Sistem Informasi Akademik SMK Bhakti Mulia Pare <br>
                            @endif
                        </p>
                    @endif
                    @if (auth()->user()->role == 'siswa')
                        <h1 class="mb-3">
                            Selamat Datang {{auth()->user()->name}}
                        </h1>
                        <p class="mb-5">
                            Selamat Datang di Sistem Informasi Akademik SMK Bhakti Mulia Pare <br>
                        </p>
                    @endif
                </div>
                <div class="col d-none d-sm-none d-md-block">
                    @if (auth()->user()->role == 'guru')
                        <img width="450" src="frontend/images/pend.jpg" alt="">
                    @endif
                    @if (auth()->user()->role == 'siswa')
                        <img width="450" src="frontend/images/pend.jpg" alt="">
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <img width="450" src="frontend/images/pend.jpg" alt="">
                    @endif
                </div>
            </div>

            {{$infos->links()}}
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('addon-style')
    <style>
        .eventEvent .eventComponent .btn-read{
            background-color: blue;
            color: #fff;
        }
        .eventEvent .eventComponent .btn-read:hover{
            background-color: rgb(74, 74, 248);
            color: #fff;
        }

        @media (max-width: 575.98px) {
            .judul {
                text-align: center;
            }
        }
    </style>
@endpush
