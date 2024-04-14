<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class PetugasController extends Controller
{
    public function petugas(Request $request)
    {
        $totalPelanggan = Pelanggan::count();
        $produk = Produk::all();
        $pengguna = User::all();
        $totalProduk = Produk::count();
        $totalPengguna = User::count();
        $totalHarga = 0;
        foreach ($produk as $p) {
            $totalHarga += $p->harga * $p->quantity;
        }

        return view('petugas.dashboard-petugas', compact('totalPelanggan', 'produk','totalProduk', 'pengguna', 'totalPengguna','totalHarga'));
    }
 

//HALAMAN LIST NYA BUAT NAMPILIN LIST NAMA PELANGGAN ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function list()
    {
        {
            $pelanggan = Pelanggan::all();
            return view('petugas.catatan.pelanggan-list', compact('pelanggan'));
        }
    }

// DELETE --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function destroy($id)
    {
        $data = Pelanggan::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pelanggan-list')->withErrors('Success Menghapus data')->withInput();
    }

// PILIH PRODUK UNTUK DI MTERUSKAN KE HALAMAN DIPILIH ---------------------------------------------------------------------------------------------------------


//UPDATE ------------------------------------------------------------------------------------------   



    // HALAMAN CHCKOUT / DIPILIH ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function dipilih()
    {
        $produk = Produk::all();
        return view('petugas.catatan.dipilih', compact('produk'));
    }


}


