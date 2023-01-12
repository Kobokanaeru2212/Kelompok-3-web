<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

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
    return view('start');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','verified'])->group(function () {
    Route::get('/awal', [PasienController::class, 'index']);
Route::get('/baca', [PasienController::class, 'baca'])->name('get.baca');
Route::get('/create', [PasienController::class, 'create'])->name('get.create');
Route::get('/baca/dokter', [DokterController::class, 'baca'])->name('get.bacadokter')->middleware('admin');
Route::get('/create/dokter', [DokterController::class, 'create'])->name('get.createdokter');
Route::post('/create/dokter', [DokterController::class, 'proses_tambah'])->name('post.createdokter');
Route::get('/ubahdokter/{id}', [DokterController::class, 'ubah'])->name('get.ubahdokter');
Route::patch('/ubahdokter/{id}', [DokterController::class, 'proses_ubah'])->name('patch.ubahdokter');
Route::delete('/deletedokter/{id}', [DokterController::class, 'hapus'])->name('delete.hapusdokter');

Route::post('/create/post', [PasienController::class, 'proses_tambah'])->name('post.create');

Route::get('/ubah/{id}', [PasienController::class, 'ubah'])->name('get.ubah');
Route::patch('/ubah/{id}', [PasienController::class, 'proses_ubah'])->name('patch.ubah');
Route::delete('/delete/{id}', [PasienController::class, 'hapus'])->name('delete.hapus');
});

