<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
Auth::routes(['verify' => true]);



Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {return view('login');});
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home', [App\Http\Controllers\HomeController::class, 'Upload'])->name('upload');
    Route::get('/profile', [App\Http\Controllers\ControllerData::class, 'Profile'])->name('Profile');
    Route::post('/profile', [App\Http\Controllers\HomeController::class, 'Upload'])->name('Upload');
    Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('index');
    Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');
    Route::get('/logout', [\App\Http\Controllers\ControllerData::class, 'Logout']);

    Route::middleware(['admin'])->group(function () {
       /* masukan code nya */
    
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/pengecekanberkas', [App\Http\Controllers\ControllerData::class, 'Pengecekanberkas'])->name('Pengecekanberkas');
        Route::get('/pengajuandupak', [App\Http\Controllers\ControllerData::class, 'User'])->name('User');
        Route::get('/historipengajuan', [App\Http\Controllers\ControllerData::class, 'Historipengajuan'])->name('Historipengajuan');
        Route::post('/pengajuandupak/store', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');
        Route::post('/pengajuandupak/check', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');
        Route::get('/pengajuandupak/check/{id}', [App\Http\Controllers\ControllerData::class, 'Checkid'])->name('Checkid');
        Route::put('/pengajuandupak/update/{id}', [App\Http\Controllers\ControllerData::class, 'Checkid'])->name('Updateid');
    });
});