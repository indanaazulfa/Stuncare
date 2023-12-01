<?php

use App\Http\Controllers\InformasiController;
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

Route::get('/login', function () {
    return view('home/auth/login');
});
Route::post('login-proses',[LoginController::class,'login_proses']) -> name('login-proses');

Route::resource('/informasi', InformasiController::class);

Route::get('/landing', function () {
    return view('home/landing');
});
Route::get('/home', function () {
    return view('home/home');
});
Route::get('/informasiUser', function () {
    return view('home/news');
});

Route::get('/news', function () {
    return view('home/news');
});

Route::get('/blog1', function () {
    return view('home/blog1');
});