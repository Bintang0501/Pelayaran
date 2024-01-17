<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\SuperAdmin\PenggunaController;
use App\Http\Controllers\Warga\BukuPelautController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function () {
    Route::prefix('login')->group(function () {
        Route::get('/', [LoginController::class, 'login']);
        Route::post('/', [LoginController::class, 'post_login']);
    });
});

Route::group(['middleware' => ['is_autentikasi']], function () {
    Route::prefix('super_admin')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_admin']);

        Route::prefix('pengguna')->group(function(){
            Route::get('/', [PenggunaController::class, 'index']);
            Route::get('/create', [PenggunaController::class, 'create']);
            Route::post('/store', [PenggunaController::class, 'store']);
            Route::get('/edit/{id}', [PenggunaController::class, 'edit']);
            Route::put('/update/{id}', [PenggunaController::class, 'update']);
            Route::delete('/destroy/{id}', [PenggunaController::class, 'destroy']);
        });

    });
    Route::prefix('petugas')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_petugas']);
    });
    Route::prefix('kepala')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_kepala']);
    });
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_warga']);

        Route::prefix('buku_pelaut')->group(function(){
            Route::get('/', [BukuPelautController::class, 'index']);
            Route::get('/create', [BukuPelautController::class, 'create']);
            Route::post('/store', [BukuPelautController::class, 'store']);
        });
    });

    Route::get('/logout', [LoginController::class, 'logout']);
});
