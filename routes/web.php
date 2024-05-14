<?php

use App\Http\Controllers\BansosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PersuratanController;
use App\Http\Controllers\StatusHidupController;
use App\Http\Controllers\StatusNikahController;
use App\Http\Controllers\StatusTinggalController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\Auth\AuthSessionController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    $metadata = (object) [
        'title' => 'Home',
        'description' => 'Landing Page RWGram'
    ];
    return view('welcome', ['activeMenu' => 'beranda', 'metadata' => $metadata]);
});


Route::group(['prefix' => 'bansos-penduduk'], function () {
    Route::post('/show', [BansosController::class, 'showPenduduk'])->name('bansos.penduduk.show');
    Route::get('/request', [BansosController::class, 'request'])->name('bansos.penduduk.request');
    Route::get('/create', [BansosController::class, 'create'])->name('bansos.penduduk.create');
});


Route::group(['prefix' => 'informasi-penduduk'], function () {
    Route::get('/show/{id}', [InformasiController::class, 'showPenduduk'])->name('informasi.penduduk.show');
    Route::get('/index', [InformasiController::class, 'indexPenduduk'])->name('informasi.penduduk.index');
    Route::get('/search', [InformasiController::class, 'search'])->name('informasi.penduduk.search');
});


Route::group(['prefix' => 'data-penduduk'], function () {
    Route::post('/show', [PendudukController::class, 'showPenduduk'])->name('data.penduduk.show');
    Route::get('/request', [PendudukController::class, 'request'])->name('data.penduduk.request');
});


Route::group(['prefix' => 'umkm-penduduk'], function () {
    Route::get('/index', [UmkmController::class, 'indexPenduduk'])->name('umkm.penduduk.index');
    Route::get('/request', [UmkmController::class, 'request'])->name('umkm.penduduk.request');
    Route::get('/create', [UmkmController::class, 'create'])->name('umkm.penduduk.create');
    Route::post('/store', [UmkmController::class, 'store'])->name('umkm.penduduk.store');
});

Route::group(['prefix' => 'nikah-penduduk'], function () {
    Route::get('/', [StatusNikahController::class, 'index'])->name('nikah.penduduk.index');
    Route::get('/create', [StatusNikahController::class, 'create'])->name('nikah.penduduk.create');
    Route::get('/request', [StatusNikahController::class, 'request'])->name('nikah.penduduk.request');
    Route::post('/store', [StatusNikahController::class, 'store'])->name('nikah.penduduk.store');
});
Route::group(['prefix' => 'hidup-penduduk'], function () {
    Route::get('/', [StatusHidupController::class, 'index'])->name('hidup.penduduk.index');
    Route::get('/create', [StatusHidupController::class, 'create'])->name('hidup.penduduk.create');
    Route::get('/request', [StatusHidupController::class, 'request'])->name('hidup.penduduk.request');
    Route::post('/store', [StatusHidupController::class, 'store'])->name('hidup.penduduk.store');
});
Route::group(['prefix' => 'tinggal-penduduk'], function () {
    Route::get('/', [StatusTinggalController::class, 'index'])->name('tinggal.penduduk.index');
    Route::get('/create', [StatusTinggalController::class, 'create'])->name('tinggal.penduduk.create');
    Route::post('/store', [StatusTinggalController::class, 'store'])->name('tinggal.penduduk.store');
    Route::get('/request', [StatusTinggalController::class, 'request'])->name('tinggal.penduduk.request');
});



Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [LaporanController::class, 'indexPenduduk'])->name('laporan.penduduk.index');
});


Route::get('coba', [PendudukController::class, 'list']);

Route::get('login', [AuthSessionController::class, 'create'])->name('login');
Route::post('login', [AuthSessionController::class, 'store']);
Route::get('logout', [AuthSessionController::class, 'logout']);



Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/pengajuan/{sort}', [UmkmController::class, 'sort'])->name('laporan.penduduk.index')->middleware('RW');
    Route::get('/pengajuan', [UmkmController::class, 'index'])->name('laporan.penduduk.index')->middleware('RW');
    Route::get('/pengaduan/{sort}', [LaporanController::class, 'keluhan'])->middleware('RW');
    Route::get('/pengaduan', [LaporanController::class, 'keluhan'])->middleware('RW');
    Route::get('/penduduk', [PendudukController::class, 'index']);
    Route::get('/bansos', [BansosController::class, 'index'])->middleware('RW');
    Route::get('/akun', [UserController::class, 'index'])->middleware('RW');
    Route::get('/persuratan', [PersuratanController::class, 'index'])->middleware('RW');
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/detail-akun', [UserController::class, 'show']);
});


Route::group(['prefix' => 'data'], function () {
    Route::get('/umkm', [UmkmController::class, 'pengajuan']);
    Route::get('/nikah', [StatusNikahController::class, 'pengajuan']);
    Route::get('/tinggal', [StatusTinggalController::class, 'pengajuan']);
    Route::get('/meninggal', [StatusHidupController::class, 'pengajuan']);
    Route::get('/notif', [DashboardController::class, 'notif']);
    Route::get('/notifcount', [DashboardController::class, 'notifcount']);
});




Route::group(['prefix' => 'search', 'middleware' => 'auth'], function () {

    Route::get('/nikah/{value}', [StatusNikahController::class, 'find']);
    Route::get('/umkm/{value}', [UmkmController::class, 'find']);
    Route::get('/tinggal/{value}', [StatusTinggalController::class, 'find']);
    Route::get('/meninggal/{value}', [StatusHidupController::class, 'find']);
    Route::get('/penduduk/{value}', [PendudukController::class, 'find']);
    Route::get('/pengaduan/{value}', [LaporanController::class, 'find']);
});

Route::group(['prefix' => 'akun'], function () {
    Route::delete('{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'penduduk'], function () {
    Route::post('/', [PendudukController::class, 'store']);
    Route::put('/{id}', [PendudukController::class, 'update']);
    Route::delete('{id}', [PendudukController::class, 'destroy']);
    Route::get('{id}', [PendudukController::class, 'find']);
});
