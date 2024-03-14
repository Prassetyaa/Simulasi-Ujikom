<?php

namespace App\Http\Controllers;


use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.catatan.pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.catatan.pelanggan-create', compact('pelanggan'));
    }

 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            
        ]);

         Pelanggan::create([
            'nama'=> $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('pelanggan')->withErrors('success menambahakan pelanggan')->withInput();
    }
   
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.catatan.pelanggan-show', compact('pelanggan'));
    }
//EDITTT ---------------------------------------------------------------------
    public function edit(Request $request, $id)
    {
        $data = Pelanggan::find($id);
        $pelanggan = Pelanggan::all();
        return view('admin.catatan.pelanggan-edit', compact('data', 'pelanggan'));
    }

  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['telepon'] = $request->telepon;
        

        Pelanggan::whereId($id)->update($data);

        return redirect()->route('pelanggan')->withErrors('success Update Data pelanggan')->withInput();
    }

//DELETE -----------------------------------------------------------------------------------------------------------------------------
  
    public function destroy($id)
    {
        $data = Pelanggan::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pelanggan')->withErrors('Success Menghapus data')->withInput();
    }
}
