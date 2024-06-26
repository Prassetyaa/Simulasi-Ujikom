@extends('back.layout.dashboard1-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Edit Data Pelanggan')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Edit Data Pelanggan</h2>
    <form action="{{ route('pelanggan.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col">
            <div class="col">
                <label for="nama" class="form-label mt-4">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama}}">
            </div>
        </div>
        <div class="col">
            <label for="alamat" class="form-label mt-4">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $data->alamat}}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="telepon" class="form-label mt-4">No.Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $data->telepon}}" >
        </div>
       
   
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Simpan</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
