<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

//127.0.0.1:8000/ ==> view welcome
Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
