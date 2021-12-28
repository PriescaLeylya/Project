<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\Pelanggans;
use App\Http\Controllers\TourtravelController;
use App\Http\Controllers\Tourtravels;
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

Route::get('/cari', [PelangganController::class, 'search'])->name('cari');

Route::resource('pelanggans', PelangganController::class);

Route::get('/search', [TourtravelController::class, 'search'])->name('search');

Route::resource('tourtravels', TourtravelController::class);

Route::get('/pelanggans/{id}/report', [PelangganController::class, 'report']);


