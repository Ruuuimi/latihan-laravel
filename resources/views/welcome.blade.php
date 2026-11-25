@extends('layouts.app')

@section('content')
            <div class="card">
                <h2>Selamat Datang</h2>
                <p>Silahkan pilih menu untuk mengakses halaman web.</p>
                <img class="banner"
                    src="{{ asset('images/banner.jpg') }}"
                    alt="Banner Prodi Bisnis Digital">
                <p class="keterangan">
                    Ilustrasi suasana kampus Institut Teknologi Kalimantan.
                </p>
            </div>
@endsection