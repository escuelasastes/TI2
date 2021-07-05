<?php

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

Route::resource('grupos', App\Http\Controllers\GrupoController::class);
Route::resource('semestres', App\Http\Controllers\SemestreController::class);
Route::resource('carreras', App\Http\Controllers\CarreraController::class);
Route::resource('materias', App\Http\Controllers\MateriaController::class);
Route::resource('tperiodos', App\Http\Controllers\TperiodoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
