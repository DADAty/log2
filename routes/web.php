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

Route::get('/u', function () {
    return view('welcome');
});


/**Methode login */
Route::get('/', [logCotroller::class, 'login'])->name('login');
Route::get('/auth', [logCotroller::class, 'auth'])->name('auth');
Route::get('/logout', [logCotroller::class, 'logout'])->name('logout');
//middlewere permet si on a pas fait un authentification on aura pas l`acces 
Route::get('/dashboard', [logCotroller::class, 'dashboard'])->name('dashboard')->middleware('auth');