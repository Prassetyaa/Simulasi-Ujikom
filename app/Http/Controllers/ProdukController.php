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

        return redirect()->route('dashboard')->withErrors('Success menambahakan Product')->withInput();
    }

//EDITTT ---------------------------------------------------------------------
public function edit(Request $request, $id)
{
    $data = Produk::find($id);
    $produk = Produk::all();
    return view('admin.catatan.produk-edit', compact('data', 'produk'));
}


public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(),[
        'nama' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
        'stock' => 'required',        
    ]);

    if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

    $data['nama'] = $request->nama;
    $data['harga'] = $request->harga;
    $data['deskripsi'] = $request->deskripsi;
    $data['stock'] = $request->stock;


    Produk::whereId($id)->update($data);

    return redirect()->route('dashboard')->withErrors('success Update Data Produk')->withInput();
}

//DELETE -----------------------------------------------------------------------------------------------------------------------------

public function destroy($id)
{
    $data = Produk::find($id);

    if ($data) {
        $data->delete();
    }

    return redirect()->route('dashboard')->withErrors('Success Menghapus Produk')->withInput();
}


}
