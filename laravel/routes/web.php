<?php

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

Route::get('/', [App\Http\Controllers\Controller::class, 'index']);
Route::get('/detail-pengaduan/{id}', [App\Http\Controllers\Controller::class, 'indexDetailPengaduan'])->name('detailPengaduan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pengaduan', [App\Http\Controllers\HomeController::class, 'indexPengaduan'])->name('pengaduan');
Route::get('/riwayat-pengaduan', [App\Http\Controllers\Controller::class, 'indexRiwayat'])->name('riwayatPengaduan');
Route::post('/pengaduan', [App\Http\Controllers\HomeController::class, 'storePengaduan'])->name('storePengaduan');
Route::post('/detail-pengaduan/{id}', [App\Http\Controllers\HomeController::class, 'storeKomentar'])->name('storeKomentar');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('homeAdmin');
    Route::get('/detail-pengaduan', [App\Http\Controllers\AdminController::class, 'detail'])->name('detailAdmin');
    Route::post('/accept-pengaduan/{id}', [App\Http\Controllers\AdminController::class, 'accept'])->name('accept');
    Route::post('/denied-pengaduan/{id}', [App\Http\Controllers\AdminController::class, 'denied'])->name('denied');
});
