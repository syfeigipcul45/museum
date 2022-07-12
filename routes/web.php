<?php

use App\Http\Controllers\Dashboard\AgendaController;
use App\Http\Controllers\Dashboard\BendaKoleksiController;
use App\Http\Controllers\Dashboard\BeritaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\JenisRuangController;
use App\Http\Controllers\Dashboard\KategoriKoleksiController;
use App\Http\Controllers\Dashboard\PengaturanController;
use App\Http\Controllers\Dashboard\ProfilController;
use App\Http\Controllers\Dashboard\RuangPamerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Homepage\HomepageController;
use App\Models\JenisRuang;
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
    Route::get('ruang-pamer', [HomepageController::class, 'getJenisRuang'])->name('homepage.layanan.index');
    Route::get('ruang-pamer/{slug}', [HomepageController::class, 'getRuangPamer'])->name('homepage.layanan.ruang_pamer');
    Route::get('ruang-pamer/detail/{slug}', [HomepageController::class, 'getDetailRuangPamer'])->name('homepage.layanan.detail_ruang_pamer');

    Route::get('fasilitas', [HomepageController::class, 'getFasilitas'])->name('homepage.layanan.fasilitas');
});

Route::get('profil/benda-koleksi', [HomepageController::class, 'getBendaKoleksi'])->name('homepage.benda_koleksi.index');
Route::get('profil/benda-koleksi/{slug}', [HomepageController::class, 'getDetailKategoriKoleksi'])->name('homepage.benda_koleksi.koleksi');
Route::get('profil/benda-koleksi/koleksi/{slug}/', [HomepageController::class, 'getDetailBendaKoleksi'])->name('homepage.benda_koleksi.detail');

Route::get('profil/{slug}', [HomepageController::class, 'getProfil'])->name('homepage.profil.detail');

Route::get('berita', [HomepageController::class, 'getBerita'])->name('homepage.berita.index');
Route::get('berita/{slug}', [HomepageController::class, 'getDetailBerita'])->name('homepage.berita.detail');

Route::get('agenda', [HomepageController::class, 'getAgenda'])->name('homepage.agenda.index');
Route::get('agenda/{slug}', [HomepageController::class, 'getDetailAgenda'])->name('homepage.agenda.detail');

Route::get('kontak', [HomepageController::class, 'getKontak'])->name('homepage.kontak.index');
Route::post('storeForm', [HomepageController::class, 'storeForm'])->name('homepage.kontak.store');

// dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('beranda');

    Route::prefix('management-event')->group(function (){
        Route::get('', [AgendaController::class, 'index'])->name('dashboard.event.index');
        Route::get('create', [AgendaController::class, 'create'])->name('dashboard.event.create');
        Route::post('', [AgendaController::class, 'store'])->name('dashboard.event.store');
        Route::get('{id}/edit', [AgendaController::class, 'edit'])->name('dashboard.event.edit');
        Route::get('{id}/show', [AgendaController::class, 'show'])->name('dashboard.event.show');
        Route::post('{id}/update', [AgendaController::class, 'update'])->name('dashboard.event.update');
        Route::post('{id}', [AgendaController::class, 'destroy'])->name('dashboard.event.destroy');
    });

    Route::prefix('management-koleksi')->group(function(){
        Route::get('kategori', [KategoriKoleksiController::class, 'index'])->name('dashboard.kategori_koleksi.index');
        Route::get('kategori/create', [KategoriKoleksiController::class, 'create'])->name('dashboard.kategori_koleksi.create');
        Route::post('kategori', [KategoriKoleksiController::class, 'store'])->name('dashboard.kategori_koleksi.store');
        Route::get('kategori/{id}/edit', [KategoriKoleksiController::class, 'edit'])->name('dashboard.kategori_koleksi.edit');
        Route::post('kategori/{id}/update', [KategoriKoleksiController::class, 'update'])->name('dashboard.kategori_koleksi.update');
        Route::post('kategori/{id}', [KategoriKoleksiController::class, 'destroy'])->name('dashboard.kategori_koleksi.destroy');

        Route::get('koleksi', [BendaKoleksiController::class, 'index'])->name('dashboard.koleksi.index');
        Route::get('koleksi/create', [BendaKoleksiController::class, 'create'])->name('dashboard.koleksi.create');
        Route::post('koleksi', [BendaKoleksiController::class, 'store'])->name('dashboard.koleksi.store');
        Route::get('koleksi/{id}/edit', [BendaKoleksiController::class, 'edit'])->name('dashboard.koleksi.edit');
        Route::get('koleksi/{id}/show', [BendaKoleksiController::class, 'show'])->name('dashboard.koleksi.show');
        Route::post('koleksi/{id}/update', [BendaKoleksiController::class, 'update'])->name('dashboard.koleksi.update');
        Route::post('koleksi/{id}', [BendaKoleksiController::class, 'destroy'])->name('dashboard.koleksi.destroy');
    });

    Route::prefix('management-layanan')->group(function () {
        
    });

    Route::prefix('management-ruang')->group(function () {
        Route::get('jenis-ruang', [JenisRuangController::class, 'index'])->name('dashboard.jenis_ruang.index');
        Route::get('jenis-ruang/create', [JenisRuangController::class, 'create'])->name('dashboard.jenis_ruang.create');
        Route::post('jenis-ruang', [JenisRuangController::class, 'store'])->name('dashboard.jenis_ruang.store');
        Route::get('jenis-ruang/{id}/edit', [JenisRuangController::class, 'edit'])->name('dashboard.jenis_ruang.edit');
        Route::post('jenis-ruang/{id}/update', [JenisRuangController::class, 'update'])->name('dashboard.jenis_ruang.update');
        Route::post('jenis-ruang/{id}', [JenisRuangController::class, 'destroy'])->name('dashboard.jenis_ruang.destroy');

        Route::get('ruang-pamer', [RuangPamerController::class, 'index'])->name('dashboard.ruang_pamer.index');        
        Route::get('ruang-pamer/create', [RuangPamerController::class, 'create'])->name('dashboard.ruang_pamer.create');
        Route::post('ruang-pamer', [RuangPamerController::class, 'store'])->name('dashboard.ruang_pamer.store');
        Route::get('{id}/edit', [RuangPamerController::class, 'edit'])->name('dashboard.ruang_pamer.edit');
        Route::get('{id}/show', [RuangPamerController::class, 'show'])->name('dashboard.ruang_pamer.show');
        Route::post('{id}/update', [RuangPamerController::class, 'update'])->name('dashboard.ruang_pamer.update');
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

    Route::prefix('management-berita')->group(function () {
        Route::get('', [BeritaController::class, 'index'])->name('dashboard.berita.index');
        Route::get('create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
        Route::post('', [BeritaController::class, 'store'])->name('dashboard.berita.store');
        Route::get('{id}/edit', [BeritaController::class, 'edit'])->name('dashboard.berita.edit');
        Route::get('{id}/show', [BeritaController::class, 'show'])->name('dashboard.berita.show');
        Route::post('{id}/update', [BeritaController::class, 'update'])->name('dashboard.berita.update');
        Route::post('{id}', [BeritaController::class, 'destroy'])->name('dashboard.berita.destroy');
    });

    Route::get('/management-pengaturan', [PengaturanController::class, 'index'])->name('dashboard.pengaturan.index');
    Route::post('/management-pengaturan', [PengaturanController::class, 'store'])->name('dashboard.pengaturan.store');
});
