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

//data siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data.siswa');
Route::get('/data-siswa-create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/data-siswa-store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/data-siswa-edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/data-siswa-update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/data-siswa-delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');



//prestasi
Route::get('/prestasi-siswa', [PrestasiController::class, "index"])->name('prestasi.siswa');
Route::get('/prestasi-siswa-create', [PrestasiController::class, "create"])->name('prestasi.create');
Route::post('/prestasi-siswa-store', [PrestasiController::class, 'store'])->name('prestasi.store');
Route::get('/prestasi-siswa-show/{id}', [PrestasiController::class, "detail_prestasi"]);
Route::get('/prestasi-siswa-edit/{id}', [PrestasiController::class, 'edit'])->name('prestasi.edit');
Route::put('/prestasi-siswa-update/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');
Route::delete('/prestasi-siswa-delete/{id}', [PrestasiController::class, "destroy"])->name('prestasi.delete');

//Pelanggan
Route::get('/pelanggan', [PelangganController::class, "index"])->name('pelanggan');
Route::get('/pelanggan-create', [PelangganController::class, "create"])->name('pelanggan.create');
Route::post('/pelanggan-store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan-show/{id}', [PelangganController::class, "detail_pelanggan"]);
Route::get('/pelanggan-edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan-update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan-delete/{id}', [PelangganController::class, "destroy"])->name('pelanggan.delete');

//Produk 
Route::get('/produk-detail', [ProdukController::class, "detail"])->name('produk.detail');
Route::get('/produk-create', [ProdukController::class, "create"])->name('produk.create');
Route::post('/produk-store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk-show/{id}', [ProdukController::class, "detail_produk"]);


//absensi
Route::get('/absensi-siswa', [AbsensiController::class, 'index'])->name('absensi.siswa');
Route::get('/absensi-siswa-create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi-siswa-store', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi-siswa-show/{id}', [AbsensiController::class, "show"])->name('absensi.show');
Route::get('/absensi-siswa-edit/{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi-siswa-update/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::delete('/absensi-siswa-delete/{id}', [AbsensiController::class, "destroy"])->name('absensi.delete');

//code pelanggaran
Route::get('/code-pelanggaran', [CodePelanggaranController::class, 'index'])->name('code.pelanggaran');
Route::get('/code-pelanggaran-create', [CodePelanggaranController::class, "create"])->name('code.pelanggaran.create');
Route::post('/code-pelanggaran-store', [CodePelanggaranController::class, "store"])->name('code.pelanggaran.store');
Route::delete('/code-pelanggaran-delete/{id}', [CodePelanggaranController::class, 'destroy'])->name('code.delete');

//data guru
Route::get('/data-guru', [GuruController::class, 'index'])->name('data.guru');
Route::get('/data-guru-create', [GuruController::class, 'create'])->name('guru.create');

//dashboard admin (ini klo pake yang dashboad2 menampilkan semua yang ada di dashboard2)
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


