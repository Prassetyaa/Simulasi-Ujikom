@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Pelanggan')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Tambah Pelanggan</h2>
    <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
     
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="">
        </div>
        <div class="col">
            <label for="nama" class="form-label mt-4">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" aria-label="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="namaLomba" class="form-label mt-4">No. telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="No.telepon" aria-label="">
        </div>
        {{-- <div class="col">
            <label for="tingkat" class="form-label mt-4">Tingkat</label>
            <select name="tingkat" id="tingkat" class="form-control" aria-label="Code Pelangaran">
                <option value="">Tingkat</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
    </div> --}}
	<br> <br>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Tambah</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection