<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\comentcontroller;
use App\Http\Controllers\homecontroller;
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
Route::get('/login', [authcontroller::class, 'loginview'])->name('login');
Route::post('/login', [authcontroller::class, 'loginproses']);
Route::get('/logout', [authcontroller::class, 'logout']);
Route::get('/register', [authcontroller::class, 'registerview']);
Route::post('/register', [authcontroller::class, 'register']);

Route::get('/',  fn () => redirect('/home'));

Route::middleware('auth')->group(function () {
    Route::get('/home', [homecontroller::class, 'index']);
    Route::get('/create', [homecontroller::class, 'create']);
    Route::post('/home', [homecontroller::class, 'store']);
    Route::get('/{post}', [homecontroller::class, 'show']);
    Route::post('/coment',[comentcontroller::class,'coment']);
});
