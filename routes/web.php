<?php

use App\Http\Controllers\StatusTransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadBuktiController;


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

// ======== Dashboard ======== //
Route::get('/', function () {
    return view('pages.dashboard.dashboard');
});


// ======== Cek Status Transaksi ======== //
Route::get('status-transaksi', [StatusTransaksiController::class, 'statusTransaksiView'])->name('status-transaksi');

// ======== Cek Status Transaksi ======== //
Route::get('/data-pribadi', function () {
    return view('pages.data-pribadi.dataPribadi');
});



// ======== History Transaksi ======== //
Route::get('/history-transaksi', function () {
    return view('pages.history-transaksi.index');
});



// ======== Upload Transaksi ======== //
Route::get('upload-transaksi', [UploadBuktiController::class, 'create'])->name('upload-transaksi');
// Route preview transaksi
Route::get('preview', [UploadBuktiController::class, 'previewTransaksi'])->name('preview');
//  Route submit data
Route::post('upload-transaksi/store', [UploadBuktiController::class, 'store'])->name('upload-transaksi/store');
Route::get('upload-transaksi/edit{id}', [UploadBuktiController::class, 'edit']);
Route::post('upload-transaksi/update{id}', [UploadBuktiController::class, 'update']);
Route::post('upload-transaksi/delete{id}', [UploadBuktiController::class, 'delete']);

