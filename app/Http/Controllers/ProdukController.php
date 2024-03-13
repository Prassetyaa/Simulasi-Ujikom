<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function detail()
    {
        
        return view('admin.catatan.produk-detail');
    }
    public function create()
    {
        
        $produk = Produk::all();
        return view('admin.catatan.produk-create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData= $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'img' => 'required',
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
        ]);

        return redirect()->route('dashboard')->with('success', 'Berhasil menambahakan product');
    }
/**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $produk = Produk::all();
        return view('admin.catatan.produk-show', ['produk' => $produk]);
    }
}
