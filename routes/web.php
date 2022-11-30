<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
// Route::get('/',[LoginController::class, 'login'])->name('login');
// Route::post('login',[LoginController::class, 'authenticate']);

    // ======== Login ======== //
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('login','authenticate');
    Route::post('logout','logout')->name('logout');

});


Route::group(['middleware' => ['auth','akses']], function(){

        // ======== Dashboard ======== //
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


        // ======== Data Pribadi ======== //
    Route::get('/data-pribadi', function () {
        return view('pages.data-pribadi.dataPribadi');
    });



        // ======== History Transaksi ======== //
    Route::get('/history-transaksi', function () {
        return view('pages.history-transaksi.index');
    });



    // ======== Upload Transaksi ======== //
    Route::get('upload-transaksi', [UploadBuktiController::class, 'create']);
    Route::post('upload-transaksi/store', [UploadBuktiController::class, 'store']);
    Route::get('upload-transaksi/edit{id}', [UploadBuktiController::class, 'edit']);
    Route::post('upload-transaksi/update{id}', [UploadBuktiController::class, 'update']);
    Route::get('upload-transaksi/delete{id}', [UploadBuktiController::class, 'delete']);


});

