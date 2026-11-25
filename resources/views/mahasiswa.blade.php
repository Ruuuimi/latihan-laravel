@extends('layouts.app')

@section('content')
    <div class="card">
        <h2>Daftar Mahasiswa</h2>
        <h5>Prodi Bisnis Digital ITK</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $mhs)
                    <tr>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection