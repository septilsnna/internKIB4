<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;

class HomeController extends Controller
{
    public function index()
    {
        $kampus = College::all();
        return view('users/home', ['kampus' => $kampus]);
    }
}