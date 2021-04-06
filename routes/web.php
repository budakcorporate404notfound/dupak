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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/data', [App\Http\Controllers\ControllerData::class, 'Data'])->name('data');

Route::get('/pengajuandupak', [App\Http\Controllers\ControllerData::class, 'User'])->name('User');
Route::get('/historipengajuan', [App\Http\Controllers\ControllerData::class, 'Historipengajuan'])->name('Historipengajuan');

Route::post('/pengajuandupak/store', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');