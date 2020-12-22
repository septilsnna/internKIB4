<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CollegesController;
use App\Http\Controllers\CompetitionsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ScholarshipsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VacanciesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);                  // done
Route::get('/about', [AboutController::class, 'index']);
Route::get('/colleges', [CollegesController::class, 'index']);

// route for login
Route::get('/login', [HomeController::class, 'login']);             // done
Route::get('/login/auth', [UsersController::class, 'show']);        // done

// route for logout
Route::get('/logout', [HomeController::class, 'logout']);           // done

// route for register
Route::get('/register', [HomeController::class, 'register']);       // done
Route::get('/user/create', [UsersController::class, 'store']);      // done

// route for user profile
Route::get('/profile', [HomeController::class, 'profile']);         // done

// route for searchs
Route::get('/search/colleges', [CollegesController::class, 'search_colleges']);             // done
Route::get('/search/colleges/{id}', [CollegesController::class, 'show']);                   // done
Route::get('/search/events', [EventsController::class, 'search_events']);                   // done
Route::get('/search/scholarships', [ScholarshipsController::class, 'search_scholarships']);
Route::get('/search/competitions', [CompetitionsController::class, 'search_competitions']);
Route::get('/search/vacancies', [VacanciesController::class, 'search_vacancies']);

// route for admin
Route::get('/admin/dashboard', [AdminController::class, 'index']);

Route::get('/admin/manage_colleges', [CollegesController::class, 'index']);                 // done
Route::post('/admin/add_colleges', [CollegesController::class, 'store']);                   // done
Route::get('/admin/update_colleges/{id}', [CollegesController::class, 'update']);           // done
Route::get('/admin/delete_colleges/{id}', [CollegesController::class, 'destroy']);          // done

Route::get('/admin/manage_events', [EventsController::class, 'index']);                     // done
Route::post('/admin/add_events', [EventsController::class, 'store']);                       // done
Route::get('/admin/update_events/{id}', [EventsController::class, 'update']);               // done
Route::get('/admin/delete_events/{id}', [EventsController::class, 'destroy']);              // done

Route::get('/admin/manage_scholarships', [ScholarshipsController::class, 'index']);         // done
Route::post('/admin/add_scholarships', [ScholarshipsController::class, 'store']);            // done
Route::get('/admin/update_scholarships/{id}', [ScholarshipsController::class, 'update']);   // done
Route::get('/admin/delete_scholarships/{id}', [ScholarshipsController::class, 'destroy']);  // done

Route::get('/admin/manage_competitions', [CompetitionsController::class, 'index']);         // done
Route::get('/admin/add_competitions', [CompetitionsController::class, 'store']);            // done
Route::get('/admin/update_competitions/{id}', [CompetitionsController::class, 'update']);   // done
Route::get('/admin/delete_competitions/{id}', [CompetitionsController::class, 'destroy']);  // done

Route::get('/admin/manage_vacancies', [VacanciesController::class, 'index']);               // done
Route::get('/admin/add_vacancies', [VacanciesController::class, 'store']);                  // done
Route::get('/admin/update_vacancies/{id}', [VacanciesController::class, 'update']);         // done
Route::get('/admin/delete_vacancies/{id}', [VacanciesController::class, 'destroy']);        // done

Route::get('/admin/manage_blogs', [BlogsController::class, 'index']);                       // done
Route::get('/admin/add_blogs', [BlogsController::class, 'store']);                          // done
Route::get('/admin/update_blogs/{id}', [BlogsController::class, 'update']);                 // done
Route::get('/admin/delete_blogs/{id}', [BlogsController::class, 'destroy']);                // done