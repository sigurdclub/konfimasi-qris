<?php

use App\Http\Controllers\StatusTransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\DataPublicController;
use App\Http\Controllers\HistoryTransaksiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadBuktiController;
use App\Http\Controllers\VerifikasiTransaksiController;

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

// Route::get('/',[LoginController::class, 'login'])->name('login');
// Route::post('login',[LoginController::class, 'authenticate']);

    // ======== Login ======== //
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('login','authenticate');
    Route::post('login/admin','authenticateAdmin');
    Route::post('logout','logout')->name('logout');

});
        // ======== Middleware ======== //
    Route::group(['middleware' => ['auth','akses']], function(){

        // ======== Dashboard ======== //
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    // ###################### Public ##################### //


        // ======== Upload Transaksi ======== //
    Route::get('upload-transaksi', [UploadBuktiController::class, 'create'])->name('upload-transaksi');


    // Route preview transaksi
    Route::get('preview', [UploadBuktiController::class, 'previewTransaksi'])->name('preview');


    //  Route submit data
    Route::post('upload-transaksi/store', [UploadBuktiController::class, 'store'])->name('upload-transaksi/store');
    Route::get('upload-transaksi/edit{id}', [UploadBuktiController::class, 'edit']);
    Route::post('upload-transaksi/update{id}', [UploadBuktiController::class, 'update']);
    Route::post('upload-transaksi/delete{id}', [UploadBuktiController::class, 'delete']);



    // ======== Cek Status Transaksi ======== //
    Route::get('status-transaksi', [StatusTransaksiController::class, 'statusTransaksiView'])->name('status-transaksi');


    // ======== Data Pribadi ======== //
    Route::get('data-pribadi', [DataPribadiController::class, 'dataPribadiView'])->name('data-pribadi');

    // Get id
    Route::get('data-pribadi/{id}', [DataPribadiController::class, 'dataPribadiAdmin'])->name('data-pribadi/{id}');



    // update all Data
    Route::post('data-pribadi/update', [DataPribadiController::class, 'updateDataPribadi'])->name('data-pribadi/update');

    // Update Number
    Route::post('data-pribadi/editNumber', [DataPribadiController::class, 'editNumber'])->name('editNumber');

    // ======== History Transaksi ======== //
    Route::get('/history-transaksi', function () {
        return view('pages.history-transaksi.index');
    });


    // ======== History Transaksi ======== //
    Route::get('history-transaksi', [HistoryTransaksiController::class, 'historyTransaksi'])->name('history-transaksi');

    // ======== History Transaksi ======== //
    Route::get('history-transaksi-admin', [HistoryTransaksiController::class, 'historyTransaksi'])->name('history-transaksi-admin');


    // ##################### admin ########################//

    // ======== Data Public ======== //
    Route::get('data-public', [DataPublicController::class, 'dataPublicView'])->name('data-public');
    // Route::get('data-public', [DataPublicController::class, 'createDataPublic'])->name('data-public');
    Route::post('data-public', [DataPublicController::class, 'storeDataPublic'])->name('data-public');



    // ====== verifikasi transaksi ======== //
    Route::get('verifikasi-transaksi', [VerifikasiTransaksiController::class, 'verifikasiTransaksiView'])->name('verifikasi-transaksi');
    Route::get('verifikasi-transaksi/change-status/{id}', [VerifikasiTransaksiController::class, 'changeStatus'])->name('change-status');



});

