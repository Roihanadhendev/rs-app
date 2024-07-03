<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
// Route::resource('frontend', FrontendController::class);

Route::middleware('auth')->group(function () {

    // Route::get('/', [DokterController::class, 'index']);

    Route::resource('dokter', DokterController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('pengguna', PenggunaController::class);
});

require __DIR__ . '/auth.php';
