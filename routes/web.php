<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HistorialController;
use App\Models\Profesional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/prueba', function () {
    return view('users.prof_index');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/courses', CourseController::class)->names('courses');
Route::resource('/professionals', ProfesionalController::class)->names('professionals');
Route::resource('/profiles', ProfileController::class)->names('profiles');
Route::resource('/users', UserController::class)->names('users');
Route::resource('/companies', CompanyController::class)->names('companies');


