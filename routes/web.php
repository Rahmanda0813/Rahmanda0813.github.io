<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengajuanController;


Route::get('/', function () {
    return view('profile');
});


Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/pendaftaran', [RegisterController::class, 'index']);
Route::post('/pendaftaran', [RegisterController::class, 'store']);

Route::get('/operator', function(){
    return view('operator');
});
Route::get('/DataPengajuan', [OperatorController::class, 'getDataPengajuan'])->name('DataPengajuan');
Route::get('/tolak/{idpengajuan}', [OperatorController::class, 'tolak'])->name('tolak');
Route::get('/terima/{idpengajuan}', [OperatorController::class, 'terima'])->name('terima');


Route::get('/DataPengguna', [OperatorController::class, 'getDataPengguna']);
Route::get('/Persentase', [OperatorController::class, 'getPersentase']);
Route::get('/riwayat', [OperatorController::class, 'getriwayat']);

Route::delete('/hapus_pengguna/{id}', [OperatorController::class, 'hapusPengguna'])->name('hapus_pengguna');
Route::get('/TampilData/{id}', [OperatorController::class, 'TampilData'])->name('TampilData');
Route::post('/UpdateData/{id}', [OperatorController::class, 'UpdateData'])->name('UpdateData');


Route::get('/pengajuan', [UserController::class, 'index']);
Route::post('/submit_pengajuan', [PengajuanController::class, 'submit'])->name('submit_pengajuan');
Route::get('/RiwayatClient', [UserController::class, 'getRiwayat']);





