<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - Portal Prodi Bisnis Digital</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('layouts.header')
    @include('layouts.menu')
    <div class="row clearfix">
        <div class="leftcolumn">
            @yield('content')
        </div>
        @include('layouts.konten_kanan')
    </div>
    @include('layouts.footer')
</body>
</html>
