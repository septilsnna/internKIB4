<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Event;
use App\Models\Scholarship;
use App\Models\Vacancy;
use App\Models\Blog;
use App\Models\Competition;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        if (session('auth') != 'akangironman@marvel.com') {
            return redirect('/');
        }

        $jml_kampus = count(College::all());
        $jml_event = count(Event::all());
        $jml_beasiswa = count(Scholarship::all());
        $jml_lomba = count(Competition::all());
        $jml_loker = count(Vacancy::all());
        $jml_blog = count(Blog::all());

        $users = User::all();

        $data = [
            'jml_kampus' => $jml_kampus,
            'jml_event' => $jml_event,
            'jml_beasiswa' => $jml_beasiswa,
            'jml_lomba' => $jml_lomba,
            'jml_loker' => $jml_loker,
            'jml_blog' => $jml_blog,
            'users' => $users
        ];

        return view('admin/dashboard', $data);
    }
}