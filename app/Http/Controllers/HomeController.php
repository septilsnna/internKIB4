<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'kampus' => College::where('akre_univ', 'A')->take(3)->get(),
            'jml_kampus' => count(College::all())
        ];

        if (session('auth') == 'akangironman@marvel.com') {
            return redirect('/admin/dashboard');
        }

        if (session('auth')) {
            $data['nama_user'] = session('name');
            return view('users/home', $data);
        }

        return view('guests/home', $data);
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