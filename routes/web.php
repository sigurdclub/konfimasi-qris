<?php

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
    return view('pages.dashboard');
});


// ======== Data Pribadi ======== //
Route::get('/data-pribadi', function () {
    return view('pages.dataPribadi');
});



// ======== History Transaksi ======== //
Route::get('/history-transaksi', function () {
    return view('pages.history-transaksi.index');
});



// ======== Upload Transaksi ======== //
Route::get('upload-transaksi', [UploadBuktiController::class, 'create']);
