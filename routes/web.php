<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
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

Route::prefix(['middleware' => ['is_autentikasi']], function () {
    Route::prefix('super_admin')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_admin']);
    });
    Route::prefix('petugas')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_petugas']);
    });
    Route::prefix('kepala')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_kepala']);
    });
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_warga']);
    });

    Route::get('/logout', [LoginController::class, 'logout']);
});
