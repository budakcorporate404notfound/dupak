<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\User;

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

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/home', 'HomeController@upload');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'Upload'])->name('upload');

// Route::get('/data', [App\Http\Controllers\ControllerData::class, 'Data'])->name('data');

Route::get('/pengajuandupak', [App\Http\Controllers\ControllerData::class, 'User'])->name('User');
Route::get('/historipengajuan', [App\Http\Controllers\ControllerData::class, 'Historipengajuan'])->name('Historipengajuan');
Route::get('/profile', [App\Http\Controllers\ControllerData::class, 'Profile'])->name('Profile');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'Upload'])->name('Upload');

Route::post('/pengajuandupak/store', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');

Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('index');
Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');
// Route::get('/change-password', 'ChangePasswordController@index');

// Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/logout', [\App\Http\Controllers\ControllerData::class, 'Logout']);