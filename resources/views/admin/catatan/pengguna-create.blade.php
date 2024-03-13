@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Pengguna')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Tambah Pengguna</h2>
    <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
     
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="">
        </div>
        <div class="col">
            <label for="password" class="form-label mt-4">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Password" aria-label="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="role" class="form-label mt-4">Role User</label>
            <input type="text" name="role" id="role" class="form-control" placeholder="Role" aria-label="">
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