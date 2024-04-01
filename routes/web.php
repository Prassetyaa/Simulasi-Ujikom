<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;





//yang dapat mengakses halaman awal (login) hanya orang yang belum login
Route::middleware(['guest'])->group(function(){
//Login Router
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/halaman-login/login', [AuthController::class, 'login'])->name('login.login');
});

//di atas akan di redirect ke halaman home(gaada halamannya), maka kita buat redirect ke halaman sesuai login role nya
Route::get('/home',function(){
return redirect('dashboard');
});


//Pengguna Router
Route::get('/pengguna', [AuthController::class, "pengguna"])->name('pengguna');
Route::get('/pengguna-create', [AuthController::class, "create"])->name('pengguna.create');
Route::post('/pengguna-store', [AuthController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna-edit/{id}', [AuthController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna-update/{id}', [AuthController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna-delete/{id}', [AuthController::class, "destroy"])->name('pengguna.delete');

//Pelanggan Router
Route::get('/pelanggan', [PelangganController::class, "index"])->name('pelanggan');
Route::post('/pelanggan-store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan-show/{id}', [PelangganController::class, "detail_pelanggan"]);
Route::get('/pelanggan-edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan-update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan-delete/{id}', [PelangganController::class, "destroy"])->name('pelanggan.delete');

//Produk Router
Route::get('/produk-create', [ProdukController::class, "create"])->name('produk.create');
Route::post('/produk-store', [ProdukController::class, 'store'])->name('produk.store');

//Produk Detail
Route::get('/show/{id}', [ProdukController::class, "show"])->name('produk.show');
Route::get('/produk-edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk-update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk-delete/{id}', [ProdukController::class, "destroy"])->name('produk.delete');



//MIDDLEWARE AUTHENTIKASI UNTUK MASUK KE HALAMAN DASHBOARD
Route::middleware(['auth'])->group(function () {
//DASHBOARD ADMIN
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('userAkses:admin');
//DASHBOARD PETUGAS
Route::get('/dashboard-petugas', [PetugasController::class, 'petugas'])->name('dashboard-petugas')->middleware('userAkses:petugas');
//LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});




//PELANGGAN-LIST
Route::get('/pelanggan-create', [PelangganController::class, "create"])->name('pelanggan.create');
Route::get('/pelanggan-list', [PetugasController::class, "list"])->name('pelanggan-list');
Route::post('/pelanggan-list-store', [PetugasController::class, 'store'])->name('pelanggan-list.store');
Route::get('/pelanggan-show/{id}', [PetugasController::class, "detail_pelanggan"]);
Route::delete('/pelanggan-list-delete/{id}', [PetugasController::class, "destroy"])->name('pelanggan-list.delete');

// HALAMAN DIPILIH (PETUGAS)------------------------------------------------------------------------------------------------------------------------------
Route::get('/dipilih', [PetugasController::class, "dipilih"])->name('dipilih');


//STRUK (PETUGAS)------------------------------------------------------------------------------------------------------------------------------------------------------
Route::get('/struk/{id_pelanggan}', [PelangganController::class, 'struk'])->name('struk');







