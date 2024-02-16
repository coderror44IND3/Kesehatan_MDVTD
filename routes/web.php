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

// Route Landing Pages {Halaman Utama}
Route::get('/', [\App\Http\Controllers\PagesControllers::class, 'index'])->name('layouts.index');
Route::get('/', [\App\Http\Controllers\PagesControllers::class, 'main'])->name('layouts.main');

