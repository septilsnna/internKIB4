<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Event;
use App\Models\Scholarship;
// use App\Models\Competition;
use App\Models\Vacancy;
use App\Models\Blog;

class AdminController extends Controller
{
    public function index()
    {
        $jml_kampus = count(College::all());
        $jml_event = count(Event::all());
        $jml_beasiswa = count(Scholarship::all());
        // $jml_lomba = count(College::all());
        $jml_loker = count(Vacancy::all());
        $jml_blog = count(Blog::all());

        $data = [
            'jml_kampus' => $jml_kampus,
            'jml_event' => $jml_event,
            'jml_beasiswa' => $jml_beasiswa,
            'jml_loker' => $jml_loker,
            'jml_blog' => $jml_blog,
        ];

        return view('admin/dashboard', $data);
    }
}