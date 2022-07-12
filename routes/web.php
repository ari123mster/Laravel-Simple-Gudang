<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ModemController;
use App\Http\Controllers\ModemKeluarController;
use App\Http\Controllers\ModemMasukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('login');
});
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/dashboard', DashboardController::class);
    //barang
    Route::resource('/barang', BarangController::class);
    Route::get('cetak', [BarangController::class, 'cetak'])->name('cetakbarang');

    //stock in barang
    Route::resource('/masuk', MasukController::class);
    Route::get('cari', [MasukController::class, 'cari'])->name('searchbrgmsk');

    //stock out barang
    Route::resource('/keluar', KeluarController::class);
    Route::resource('/masuk', MasukController::class);
    Route::get(
        'searchbarang',
        [KeluarController::class, 'searchbarang']
    )->name('searchbarangkeluar');

    Route::resource('/stock', StockController::class);
    Route::resource('/modem', ModemController::class);



    //stock masuk modem
    Route::resource('/ModemMasuk', ModemMasukController::class);
    Route::get(
        'carimodem',
        [ModemMasukController::class, 'carimodem']
    )->name('searchmodemmasuk');

    //stock modem keluar
    Route::resource('/ModemKeluar', ModemKeluarController::class);
    Route::get(
        'search',
        [ModemkeluarController::class, 'search']
    )->name('searchmodemkeluar');
    Route::get('pdfmdmklr/{id}', [ModemKeluarController::class, 'pdfmdmklr'])->name('pdfmdmklr');

    //laporan
    Route::resource('/laporan', LaporanController::class);
    Route::get('cetakbrgmsk', [LaporanController::class, 'cetakbrgmsk'])->name('cetakbrgmsk');
    Route::get('cetakbrgklr', [LaporanController::class, 'cetakbrgklr'])->name('cetakbrgklr');
    Route::get('cetakmdmmsk', [LaporanController::class, 'cetakmdmmsk'])->name('cetakmdmmsk');
    Route::get('cetakmdmklr', [LaporanController::class, 'cetakmdmklr'])->name('cetakmdmklr');
});
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
require __DIR__ . '/auth.php';
