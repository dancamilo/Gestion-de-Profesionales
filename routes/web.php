<?php

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

Route::get('/cursos', function () {return view('cursos.cursos');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/cursos/show', function () {return view('cursos.show');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profesionales', function () {return view('profesionales.profesionales');});
Route::get('/profesionales/create', function () {return view('profesionales.create');});
Route::get('/empresas', function () {return view('empresas.empresas');});
Route::get('/informacionPersonal', function () {return view('informacionPersonal.informacionPersonal');});
Route::get('/certificados', function () {return view('certificados.certificados');});
Route::get('/accesos', function () {return view('accesos.accesos');});
Route::get('/historiales', function () {return view('historiales.historiales');});
Route::get('/historialCertificados', function () {return view('historiales.historialCertificados');});
Route::get('/historialUsuarios', function () {return view('historiales.historialUsuarios');});
Route::get('/gestor', function () {return view('equipoR.gestor');});
Route::get('/equipoR', function () {return view('equipoR.index');});

