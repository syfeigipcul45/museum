<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfilController;
use App\Http\Controllers\Dashboard\RuangPamerController;
use App\Http\Controllers\Homepage\HomepageController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::prefix('layanan')->group(function () {
    Route::get('ruang-pamer', [HomepageController::class, 'ruangPamer'])->name('homepage.layanan.ruang_pamer');
});

Route::get('profil/{slug}', [HomepageController::class, 'getProfil'])->name('homepage.profil.detail');

// dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('beranda');

    Route::prefix('management-layanan')->group(function () {
        Route::get('ruang-pamer', [RuangPamerController::class, 'index'])->name('dashboard.ruang_pamer.index');
        Route::post('ruang-pamer/{id}', [RuangPamerController::class, 'destroy'])->name('dashboard.ruang_pamer.destroy');
    });

    Route::prefix('management-profil')->group(function () {
        Route::get('', [ProfilController::class, 'index'])->name('dashboard.profil.index');
        Route::get('create', [ProfilController::class, 'create'])->name('dashboard.profil.create');
        Route::post('', [ProfilController::class, 'store'])->name('dashboard.profil.store');
        Route::get('{id}/edit', [ProfilController::class, 'edit'])->name('dashboard.profil.edit');
        Route::get('{id}/show', [ProfilController::class, 'show'])->name('dashboard.profil.show');
        Route::post('{id}/update', [ProfilController::class, 'update'])->name('dashboard.profil.update');
        Route::post('{id}', [ProfilController::class, 'destroy'])->name('dashboard.profil.destroy');
        Route::post('{id}/increase', [ProfilController::class, 'increase'])->name('dashboard.profil.increase');
        Route::post('{id}/decrease', [ProfilController::class, 'decrease'])->name('dashboard.profil.decrease');
    });
});
