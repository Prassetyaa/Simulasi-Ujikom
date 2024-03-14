<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\CodePelanggaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
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

//Login Router
Route::get('/', function () {return view('halaman-login');});
Route::get('/halaman-login', [AuthController::class, 'index'])->name('login');
Route::post('/halaman-login/login', [AuthController::class, 'login'])->name('login.login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Pengguna Router
Route::get('/pengguna', [AuthController::class, "pengguna"])->name('pengguna');
Route::get('/pengguna-create', [AuthController::class, "create"])->name('pengguna.create');
Route::post('/pengguna-store', [AuthController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna-edit/{id}', [AuthController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna-update/{id}', [AuthController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna-delete/{id}', [AuthController::class, "destroy"])->name('pengguna.delete');

//Pelanggan Router
Route::get('/pelanggan', [PelangganController::class, "index"])->name('pelanggan');
Route::get('/pelanggan-create', [PelangganController::class, "create"])->name('pelanggan.create');
Route::post('/pelanggan-store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan-show/{id}', [PelangganController::class, "detail_pelanggan"]);
Route::get('/pelanggan-edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan-update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan-delete/{id}', [PelangganController::class, "destroy"])->name('pelanggan.delete');

//Produk Router
Route::get('/produk-detail', [ProdukController::class, "detail"])->name('produk.detail');
Route::get('/produk-create', [ProdukController::class, "create"])->name('produk.create');
Route::post('/produk-store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk-show/{id}', [ProdukController::class, "detail_produk"]);

//dashboard admin 
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


