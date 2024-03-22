@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Edit Data Pengguna')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Edit Data Pengguna / User</h2>
    <form action="{{ route('produk.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
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
            <label for="password" class="form-label mt-4">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ $data->harga}}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="role" class="form-label mt-4">Stock</label>
            <input type="text" name="stock" id="stock" class="form-control" value="{{ $data->stock}}" >
        </div>
        <div class="col">
            <label for="deskripsi" class="form-label mt-4">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
        </div>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Simpan</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
