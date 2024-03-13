<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranAdmin;
use App\Models\Pelanggan;
use App\Models\Pengguna;
use App\Models\Produk;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //dashboard
    public function dashboard()
    {
        $totalPelanggan = Pelanggan::count();
        $produk = Produk::all();
        $pengguna = User::all();
        $totalProduk = Produk::count();
        $totalPengguna = User::count();
        return view('admin.dashboard', compact('totalPelanggan', 'produk','totalProduk', 'pengguna', 'totalPengguna'));
    }

    


}
