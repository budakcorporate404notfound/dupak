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

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/testquery', [App\Http\Controllers\ControllerData::class, 'Testquery'])->name('Testquery');
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

        Route::get('/seluruhpengajuan', [App\Http\Controllers\ControllerData::class, 'Seluruhpengajuan'])->name('Seluruhpengajuan');
        Route::get('/seluruhpengajuan/check/{id}', [App\Http\Controllers\ControllerData::class, 'SeluruhCheckid'])->name('SeluruhCheckid');

        Route::get('/pengajuandupak', [App\Http\Controllers\ControllerData::class, 'User'])->name('User');
        Route::post('/pengajuandupak/store', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');
        // Route::post('/pengajuandupak/check', [App\Http\Controllers\ControllerData::class, 'Pengajuandupakstore'])->name('Pengajuandupakstore');

        Route::get('/historipengajuan', [App\Http\Controllers\ControllerData::class, 'Historipengajuan'])->name('Historipengajuan');
        Route::get('/historipengajuan/check/{id}', [App\Http\Controllers\ControllerData::class, 'HistoriCheckid'])->name('HistoriCheckid');

        Route::get('/pengecekanberkas1', [App\Http\Controllers\ControllerData::class, 'Pengecekanberkas1'])->name('Pengecekanberkas1');
        Route::get('/pengecekanberkas1/check/{id}', [App\Http\Controllers\ControllerData::class, 'Checkberkas1'])->name('Checkberkas1');
        Route::put('/pengecekanberkas1/terimaatautolak/{id}', [App\Http\Controllers\ControllerData::class, 'Terimaatautolak1'])->name('Terimaatautolak1');


        Route::get('/bagianfungsional2tu', [App\Http\Controllers\ControllerData::class, 'Bagianfungsional2tu'])->name('Bagianfungsional2tu');
        Route::get('/bagianfungsional2tu/{data_id}/{user_id}', [App\Http\Controllers\ControllerData::class, 'Senttotu'])->name('Senttotu');
        // Route::delete('myproductsDeleteAll', [App\Http\Controllers\ControllerData::class, 'DeleteAll'])->name('DeleteAll');

        Route::get('/pengecekanberkas2', [App\Http\Controllers\ControllerData::class, 'Pengecekanberkas2'])->name('Pengecekanberkas2');
        Route::get('/pengecekanberkas2/check/{id}', [App\Http\Controllers\ControllerData::class, 'Checkberkas2'])->name('Checkberkas2');
        Route::put('/pengecekanberkas2/terimaatautolak/{id}', [App\Http\Controllers\ControllerData::class, 'Terimaatautolak2'])->name('Terimaatautolak2');

        Route::get('/tu2bps', [App\Http\Controllers\ControllerData::class, 'Tu2bps'])->name('Tu2bps');
        Route::get('/tu2bps/{data_id}/{user_id}', [App\Http\Controllers\ControllerData::class, 'Senttobps'])->name('Senttobps');
    });
});