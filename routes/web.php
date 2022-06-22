<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logCotroller;

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


/**Methode login */
Route::get('/log', [logCotroller::class, 'log'])->name('login');
Route::post('/auth', [logCotroller::class, 'auth'])->name('auth');
Route::get('/logout', [logCotroller::class, 'logout'])->name('auth');
Route::get('/dashboard', [logCotroller::class, 'dashboard'])->name('dashboard');