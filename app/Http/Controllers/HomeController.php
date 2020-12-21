<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $kampus = College::all();

        if (session('auth')) {
            $nama_user = session('name');
            return view('users/home', ['kampus' => $kampus, 'nama' => $nama_user]);
        }

        return view('guests/home', ['kampus' => $kampus]);
    }

    public function login()
    {
        return view('guests/login');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/');
    }

    public function register()
    {
        return view('guests/register');
    }

    public function profile()
    {
        $users = User::where('email', session('auth'))->get();
        $nama = session('name');
        return view('users/profile', ['users' => $users[0], 'nama' => $nama]);
    }
}