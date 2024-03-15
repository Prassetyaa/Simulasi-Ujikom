<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    //SHOW -------------------------------------------------------------------------------------------------------------------------------
public function show($id)
{
    $produk = Produk::findOrFail($id);
    return view('admin.catatan.show-produk', compact('produk'));
}


//CREATE --------------------------------------------------------------------------------------
    public function create()
    {
        
        $produk = Produk::all();
        return view('admin.catatan.produk-create', compact('produk'));
    }

//STORE ------------------------------------------------------------------------------------------   
    public function store(Request $request)
    {
        
        $validatedData= $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'img' => 'required',
            'deskripsi'=>'required',
        ]);
        $image = $request->file('img');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/fotoProduk'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/fotoProduk');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

         Produk::create([
            'nama'=> $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'img' => $uploaded,
            'deskripsi' => $request->deskripsi,            
        ]);

        return redirect()->route('dashboard')->withErrors('Berhasil menambahakan product')->withInput();
    }




}
