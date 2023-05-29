<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProfesionalsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HistorialsController;
use App\Models\Profesionals;
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
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/courses', CoursesController::class)->names('courses');
Route::resource('/professionals', ProfesionalsController::class)->names('professionals');
Route::resource('/profiles', ProfilesController::class)->names('profiles');
Route::resource('/users', UsersController::class)->names('users');
Route::resource('/companies', CompaniesController::class)->names('companies');


