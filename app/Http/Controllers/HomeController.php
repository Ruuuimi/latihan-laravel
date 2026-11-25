<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Profil;

class HomeController extends Controller
{
    public function index() {
        $user = "Davni";
        return view('welcome', []);
    }

    public function login() {
        return view('login', []);
    }

    public function kontak() {
        return view('kontak', []);
    }

    public function profil() {
        $profil = Profil::first();

        return view('profil', compact('profil'));
    }

    public function mahasiswa() {
        $students = Student::get();

        return view('mahasiswa', ['students' => $students]);
    }
}



