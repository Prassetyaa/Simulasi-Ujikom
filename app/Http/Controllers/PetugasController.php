<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\User;


class PetugasController extends Controller
{
    public function petugas()
    {
        $totalPelanggan = Pelanggan::count();
        $produk = Produk::all();
        $pengguna = User::all();
        $totalProduk = Produk::count();
        $totalPengguna = User::count();
        return view('petugas.dashboard-petugas', compact('totalPelanggan', 'produk','totalProduk', 'pengguna', 'totalPengguna'));
    }

// INI UNTUK NANTI HALAMAN CHECKOUT (MENGHITUNG SUBTOTAL)
    public function dipilih()
    {
        
        return view('petugas.catatan.dipilih');
    }

//HALAMAN LIST NYA BUAT NAMPILIN LIST NAMA PELANGGAN
    public function list()
    {
        {
            $pelanggan = Pelanggan::all();
            return view('petugas.catatan.pelanggan-list', compact('pelanggan'));
        }
    }

// DELETE
    public function destroy($id)
    {
        $data = Pelanggan::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pelanggan-list')->withErrors('Success Menghapus data')->withInput();
    }

// FUNCTION JUMLAH / SUBTOTAL 
// decrement (pengurangan)
public function decrementQuantity(int $produkId)
 {
    $produkData = Produk::where('id',$produkId)->where('nama',auth()->user()->id)->first();
    if($produkData)
    {
        $produkData->decrement('quantity');
        $this->dispatchBrowserEvent('message',[
            'text' => 'Quantity Updated',
            'type' => 'success',
            'status' => '200'
        ]);
    }else{
        $this->dispatchBrowserEvent('message',[
            'text' => 'Something Wrong',
            'type' => 'error',
            'status' => '404'
        ]);
    }
 }

//increment (penambahan)
public function incrementQuantity(int $produkId)
 {
    $produkData = Produk::where('id',$produkId)->where('nama',auth()->user()->id)->first();
    if($produkData)
    {
        $produkData->increment('quantity');
        $this->dispatchBrowserEvent('message',[
            'text' => 'Quantity Updated',
            'type' => 'success',
            'status' => '200'
        ]);
    }else{
        $this->dispatchBrowserEvent('message',[
            'text' => 'Something Wrong',
            'type' => 'error',
            'status' => '404'
        ]);
    }
 }
}


