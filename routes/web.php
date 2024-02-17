<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\Kepala\PenyijilanController as KepalaPenyijilanController;
use App\Http\Controllers\Kepala\SuratMohonController as KepalaSuratMohonController;
use App\Http\Controllers\Petugas\BukuPelautController as PetugasBukuPelautController;
use App\Http\Controllers\Petugas\PenyijilanController as PetugasPenyijilanController;
use App\Http\Controllers\Petugas\SuratMohonController;
use App\Http\Controllers\SuperAdmin\BukuPelautController as SuperAdminBukuPelautController;
use App\Http\Controllers\SuperAdmin\PenggunaController;
use App\Http\Controllers\SuperAdmin\PenyijilanController as SuperAdminPenyijilanController;
use App\Http\Controllers\SuperAdmin\SuratMohonController as SuperAdminSuratMohonController;
use App\Http\Controllers\Warga\BukuPelautController;
use App\Http\Controllers\Warga\PenyijilanController;
use App\Http\Controllers\Warga\SuratMohonControler;
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

        Route::prefix('buku_pelaut')->group(function(){
            Route::get('/', [SuperAdminBukuPelautController::class, 'index']);
            Route::get('/show/{id}', [SuperAdminBukuPelautController::class, 'show']);
            Route::put('/update/{id}', [SuperAdminBukuPelautController::class, 'update']);
        });

        Route::prefix('surat_mohon')->group(function(){
            Route::get('/', [SuperAdminSuratMohonController::class, 'index']);
            Route::get('/show/{id}', [SuperAdminSuratMohonController::class, 'show']);
            Route::put('/{id}', [SuperAdminSuratMohonController::class, 'update']);
            Route::get('/download/{id}', [SuperAdminSuratMohonController::class, 'file_surat_balasan']);

        });

        Route::prefix('pengguna')->group(function(){
            Route::get('/', [PenggunaController::class, 'index']);
            Route::get('/create', [PenggunaController::class, 'create']);
            Route::post('/store', [PenggunaController::class, 'store']);
            Route::get('/edit/{id}', [PenggunaController::class, 'edit']);
            Route::put('/update/{id}', [PenggunaController::class, 'update']);
            Route::delete('/destroy/{id}', [PenggunaController::class, 'destroy']);
        });

        Route::prefix('penyijilan')->group(function(){
            Route::get('/', [SuperAdminPenyijilanController::class, 'index']);
            Route::get('/show/{id}', [SuperAdminPenyijilanController::class, 'show']);
            Route::put('/{id}', [SuperAdminPenyijilanController::class, 'update']);
            Route::get('/download/{id}', [SuperAdminPenyijilanController::class, 'file_surat_balasan']);
        });

    });
    Route::prefix('petugas')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_petugas']);

        Route::prefix('buku_pelaut')->group(function(){
            Route::get('/', [PetugasBukuPelautController::class, 'index']);
            Route::get('/show/{id}', [PetugasBukuPelautController::class, 'show']);
            Route::put('/update/{id}', [PetugasBukuPelautController::class, 'update']);

        });

        Route::prefix('surat_mohon')->group(function(){
            Route::get('/', [SuratMohonController::class, 'index']);
            Route::get('/show/{id}', [SuratMohonController::class, 'show']);
            Route::put('/update/{id}', [SuratMohonController::class, 'update']);
            Route::get('/download/{id}', [SuratMohonController::class, 'file_surat_balasan']);

        });

        Route::prefix('penyijilan')->group(function(){
            Route::get('/', [PetugasPenyijilanController::class, 'index']);
            Route::get('/show/{id}', [PetugasPenyijilanController::class, 'show']);
            Route::put('/{id}', [PetugasPenyijilanController::class, 'update']);
            Route::get('/download/{id}', [PetugasPenyijilanController::class, 'file_surat_balasan']);

        });
    });
    Route::prefix('kepala')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_kepala']);
        
        Route::prefix('surat_mohon')->group(function(){
            Route::get('/', [KepalaSuratMohonController::class, 'index']);
            Route::get('/show/{id}', [KepalaSuratMohonController::class, 'show']);
            Route::put('/update/{id}', [KepalaSuratMohonController::class, 'update']);
            Route::get('/download/{id}', [KepalaSuratMohonController::class, 'file_surat_balasan']);

        });

        Route::prefix('penyijilan')->group(function(){
            Route::get('/', [KepalaPenyijilanController::class, 'index']);
            Route::get('/show/{id}', [KepalaPenyijilanController::class, 'show']);
            Route::put('/{id}', [KepalaPenyijilanController::class, 'update']);
            Route::get('/download/{id}', [KepalaPenyijilanController::class, 'file_surat_balasan']);

        });
    });
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [AppController::class, 'dashboard_warga']);

        Route::prefix('buku_pelaut')->group(function(){
            Route::get('/', [BukuPelautController::class, 'index']);
            Route::get('/create', [BukuPelautController::class, 'create']);
            Route::post('/store', [BukuPelautController::class, 'store']);
            Route::get('/show/{id}', [BukuPelautController::class, 'show']);
            Route::get('/download/{id}', [BukuPelautController::class, 'file_surat_balasan']);

        });

        Route::prefix('surat_mohon')->group(function(){
            Route::get('/', [SuratMohonControler::class, 'index']);
            Route::get('/create', [SuratMohonControler::class, 'create']);
            Route::post('/store', [SuratMohonControler::class, 'store']);
            Route::get('/show/{id}', [SuratMohonControler::class, 'show']);
            Route::get('/download/{id}', [SuratMohonControler::class, 'file_surat_balasan']);

        });

        Route::prefix('penyijilan')->group(function(){
            Route::get('/', [PenyijilanController::class, 'index']);
            Route::get('/create', [PenyijilanController::class, 'create']);
            Route::post('/store', [PenyijilanController::class, 'store']);
            Route::get('/show/{id}', [PenyijilanController::class, 'show']);
            Route::get('/download/{id}', [PenyijilanController::class, 'file_surat_balasan']);

        });
    });

    Route::get('/logout', [LoginController::class, 'logout']);
});
