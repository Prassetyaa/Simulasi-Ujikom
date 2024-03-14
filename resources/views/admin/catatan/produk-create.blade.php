@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Product Create')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Tambah </h2>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
     
        <div class="col">
            <label for="" class="form-label mt-4">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Produk" aria-label="">
        </div>
        <div class="col">
            <label for="" class="form-label mt-4">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" aria-label="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="" class="form-label mt-4">stock</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock" aria-label="">
        </div>
   
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Foto Product</label>
            <input class="form-control" name= "img" type="file" id="formFileMultiple" multiple>
        </div>
	<br> <br>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Tambah</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
