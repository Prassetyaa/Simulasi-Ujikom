<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('halaman-login');
    }

    public function login(Request $request){
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ], 
        [
            'nama.required' => 'nama harus diisi',
            'password.required' => 'password harus diisi'
        ]);


        $infoLogin = [
            'nama'=>$request->nama,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infoLogin)){
            return redirect('dashboard');
        }else{
            return redirect('')->withErrors('Nama & Password yang Anda Masukan Tidak Sesuai')->withInput();
        }

        }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    //CREATE USER DI HALAMAN ADMIN-------------------------------------------------------------------------------------------------

//untuk halaman CRUD di admin
    public function pengguna(){
        $pengguna = User::all();
        return view('admin.catatan.pengguna', compact('pengguna'));
    }

//create
    public function create()
    {
        $pengguna = User::all();
        return view('admin.catatan.pengguna-create', compact('pengguna'));
    }
//store
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

         User::create([
            'nama'=> $request->nama,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect()->route('pengguna')->withErrors('Succes Menambahkan Pengguna')->withInput();
    }

//EDIT---------------------------------------------------------------------------------------------------------------------------------

    public function edit(Request $request, $id)
    {
        $data = User::find($id);
        $pengguna = User::all();
        return view('admin.catatan.pengguna-edit', compact('data', 'pengguna'));
    }

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'password' => 'required',
            'role' => 'required',
            
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['password'] = $request->password;
        $data['role'] = $request->role;
        

        User::whereId($id)->update($data);

        return redirect()->route('pengguna')->withErrors('Berhasil Update Data')->withInput();
    }

  //DELETE DATA ------------------------------------------------------------------------------------------------------------------------

    public function destroy($id)
    {
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pengguna')->withErrors('Success Menghapus data')->withInput();
    }

    }