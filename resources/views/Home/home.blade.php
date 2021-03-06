@extends('adminlte::page')
@section('title', 'Labkom FMIPA UNS | Dashboard')
@section('css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-light shadow">
                <div class="inner">
                    <h3>50</h3>
                    <h5>Peminjaman Lab</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-android-apps"></i>
                </div>
                <a href="{{ route('PeminjamanLab.index') }}" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-light shadow">
                <div class="inner">
                    <h3>25</h3>
                    <h5>Peminjaman Alat</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-settings"></i>
                </div>
                <a href="{{ route('PeminjamanAlat.index') }}" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-light shadow">
                <div class="inner">
                    <h3>30</h3>
                    <h5>Surat Bebas Labkom</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-document"></i>
                </div>
                <a href="{{ route('SuratBebasLabkom.index') }}" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
