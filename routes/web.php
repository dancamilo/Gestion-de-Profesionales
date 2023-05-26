<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfilesController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/cursos', CoursesController::class)->names('cursos');
Route::resource('/perfiles', ProfilesController::class)->names('perfiles');
Route::get('/profesionales', function () {return view('profesionales.index');});
Route::get('/profesionales/create', function () {return view('profesionales.create');});
Route::get('/profesionales/create/2', function () {return view('profesionales.create2');});
Route::get('/profesionales/show', function () {return view('profesionales.show');});
Route::get('/profesionales/update', function () {return view('profesionales.update');});
Route::get('/profesionales/update/2', function () {return view('profesionales.update2');});
//Route::get('/perfiles', function () {return view('perfiles.index');});
//Route::get('/perfiles/show', function () {return view('perfiles.show');});
//Route::get('/perfiles/update', function () {return view('perfiles.update');});
Route::get('/usuarios', function () {return view('usuarios.index');});
Route::get('/empresas', function () {return view('empresas.index');});
Route::get('/empresas/show', function () {return view('empresas.show');});
Route::get('/empresas/update', function () {return view('empresas.update');});
Route::get('/empresas/create', function () {return view('empresas.create');});
Route::get('/certificados', function () {return view('certificados.index');});
Route::get('/historial/home', function () {return view('historiales.index');});
Route::get('/historial/cursos', function () {return view('historiales.cursos.index');});
Route::get('/historial/cursos/show', function () {return view('historiales.cursos.show');});
Route::get('/historial/profesionales', function () {return view('historiales.profesionales.index');});
Route::get('/historial/profesionales/show', function () {return view('historiales.profesionales.show');});
Route::get('/historial/perfiles', function () {return view('historiales.perfiles.index');});
Route::get('/historial/perfiles/show', function () {return view('historiales.perfiles.show');});
Route::get('/historial/empresas', function () {return view('historiales.empresas.index');});
Route::get('/historial/empresas/show', function () {return view('historiales.empresas.show');});
Route::get('/historial/usuarios', function () {return view('historiales.usuarios');});
Route::get('/historial/certificados', function () {return view('historiales.certificados');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profesionales', function () {return view('profesionales.profesionales');});
Route::get('/empresas', function () {return view('empresas.empresas');});
Route::get('/informacionPersonal', function () {return view('informacionPersonal.informacionPersonal');});
Route::get('/profesionales', function(){return view('equipoR.profesionales');});
