<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PublicController;


// =========================
// PUBLIC
// =========================

Route::get('/', [PublicController::class, 'home'])->name('public.dashboard');
Route::get('/profil-sekolah', [PublicController::class, 'profil'])->name('public.profil');
Route::get('/berita', [PublicController::class, 'berita'])->name('public.berita');
Route::get('/berita/{id}', [PublicController::class, 'detailBerita'])->name('public.berita.detail');
Route::get('/ekstrakurikuler', [PublicController::class, 'ekstrakulikuler'])->name('public.ekstrakulikuler');
Route::get('/galeri', [PublicController::class, 'galeri'])->name('public.galeri');


Route::get('/tes-login', function () {
    return 'TES LOGIN BERHASIL';
});


Route::get('/login', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('/login-proses', [AuthController::class, 'prosesLogin'])
    ->name('admin.login.proses');


Route::post('/logout', [AuthController::class, 'store'])
    ->middleware('auth')
    ->name('logout');


Route::prefix('admin')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');


    Route::prefix('profil')->group(function () {

        Route::get('/', [ProfilController::class, 'index'])
            ->name('admin.profil');

        Route::get('/create', [ProfilController::class, 'create'])
            ->name('profil.create');

        Route::post('/', [ProfilController::class, 'store'])
            ->name('profil.store');

        Route::get('/{id}/edit', [ProfilController::class, 'edit'])
            ->name('profil.edit');

        Route::put('/{id}', [ProfilController::class, 'update'])
            ->name('profil.update');

        Route::delete('/{id}', [ProfilController::class, 'destroy'])
            ->name('profil.destroy');
    });


    Route::prefix('guru')->group(function () {

        Route::get('/', [GuruController::class, 'index'])
            ->name('admin.guru');

        Route::get('/create', [GuruController::class, 'create'])
            ->name('guru.create');

        Route::post('/', [GuruController::class, 'store'])
            ->name('guru.store');

        Route::get('/{id}/edit', [GuruController::class, 'edit'])
            ->name('guru.edit');

        Route::put('/{id}', [GuruController::class, 'update'])
            ->name('guru.update');

        Route::delete('/{id}', [GuruController::class, 'destroy'])
            ->name('guru.destroy');
    });


    Route::prefix('siswa')->group(function () {

        Route::get('/', [SiswaController::class, 'index'])
            ->name('admin.siswa');

        Route::get('/create', [SiswaController::class, 'create'])
            ->name('siswa.create');

        Route::post('/', [SiswaController::class, 'store'])
            ->name('siswa.store');

        Route::get('/{id}/edit', [SiswaController::class, 'edit'])
            ->name('siswa.edit');

        Route::put('/{id}', [SiswaController::class, 'update'])
            ->name('siswa.update');

        Route::delete('/{id}', [SiswaController::class, 'destroy'])
            ->name('siswa.destroy');
    });


    Route::prefix('berita')->group(function () {

        Route::get('/', [BeritaController::class, 'index'])
            ->name('admin.berita');

        Route::get('/create', [BeritaController::class, 'create'])
            ->name('berita.create');

        Route::post('/', [BeritaController::class, 'store'])
            ->name('berita.store');

        Route::get('/{id}', [BeritaController::class, 'show'])
            ->name('berita.show');

        Route::get('/{id}/edit', [BeritaController::class, 'edit'])
            ->name('berita.edit');

        Route::put('/{id}', [BeritaController::class, 'update'])
            ->name('berita.update');

        Route::delete('/{id}', [BeritaController::class, 'destroy'])
            ->name('berita.destroy');
    });


    Route::prefix('ekstrakulikuler')->group(function () {

        Route::get('/', [EkstrakulikulerController::class, 'index'])
            ->name('admin.ekstrakulikuler');

        Route::get('/create', [EkstrakulikulerController::class, 'create'])
            ->name('ekstrakulikuler.create');

        Route::post('/', [EkstrakulikulerController::class, 'store'])
            ->name('ekstrakulikuler.store');

        Route::get('/{id}/edit', [EkstrakulikulerController::class, 'edit'])
            ->name('ekstrakulikuler.edit');

        Route::put('/{id}', [EkstrakulikulerController::class, 'update'])
            ->name('ekstrakulikuler.update');

        Route::delete('/{id}', [EkstrakulikulerController::class, 'destroy'])
            ->name('ekstrakulikuler.destroy');
    });


    Route::prefix('galeri')->group(function () {

        Route::get('/', [GaleriController::class, 'index'])
            ->name('admin.galeri');

        Route::get('/create', [GaleriController::class, 'create'])
            ->name('galeri.create');

        Route::post('/', [GaleriController::class, 'store'])
            ->name('galeri.store');

        Route::get('/{id}/edit', [GaleriController::class, 'edit'])
            ->name('galeri.edit');

        Route::put('/{id}', [GaleriController::class, 'update'])
            ->name('galeri.update');

        Route::delete('/{id}', [GaleriController::class, 'destroy'])
            ->name('galeri.destroy');
    });

});