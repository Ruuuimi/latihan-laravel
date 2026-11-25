<div class="topnav">
    <a href="{{ url('/') }}"
        class="{{ Request::is('/') ? 'aktif' : '' }}">
        Beranda
    </a>

    <a href="{{ url('/profil') }}"
        class="{{ Request::is('profil') ? 'aktif' : '' }}">
        Profil
    </a>

    <a href="{{ url('/mahasiswa') }}"
        class="{{ Request::is('mahasiswa') ? 'aktif' : '' }}">
        Mahasiswa
    </a>

    <a href="{{ url('/kontak') }}"
        class="{{ Request::is('kontak') ? 'aktif' : '' }}">
        Kontak
    </a>

    <a href="{{ url('/login') }}"
        class="{{ Request::is('login') ? 'aktif' : '' }}"
        style="float: right">
        Login
    </a>
</div>
