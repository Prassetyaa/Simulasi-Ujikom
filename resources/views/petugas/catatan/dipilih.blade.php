@extends('back.layout.dashboard1-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')

<!-- CSS Produk -->
<link rel="stylesheet" href="assetss/css/demos/demo-4.css">

<header>
    <div class="" style="margin-left: -300px">
      <div class="container py-4">
        <nav class="d-flex">
          <h6 class="mb-0">
            <a href="dashboard" class="text-black-50">Home</a>
            <span class="text-black-50 mx-2"> > </span>
            <a href="#" class="text-black-50">Penjualan</a>
        
          </h6>
        </nav>
      </div>
    </div>
  </header>
  
  <!-- content -->
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              Produk Yang Dipilih <br />
            </h4>
          <br> <br>
  
            <div class="row">
              <dt class="col-3">Burger :</dt>
              <dd class="col-9">Rp 20.000  <span class="text-muted">(2)</span></dd>
             
              
  
              <dt class="col-3">Chicken :</dt>
              <dd class="col-9">Rp 15.000 <span class="text-muted">(2)</span></dd>
              <br> <br> 
              <dt class="col-3">Total :</dt>
              <dd class="col-9">Rp 120.000</dd>
            </div>
  
            <hr />
            <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="col">
                <div>
                <label for="nama" class="form-label "></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pelanggan" aria-label="">
              </div>
              <div>
                <label for="alamat" class="form-label"></label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Pelanggan" aria-label="">
              </div>
              <div>
                <label for="telepon" class="form-label"></label>
                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="No.Telepon" aria-label="">
              </div> <br>
            </div>
            <button class="btn btn-primary float-right" type="submit"><i class="me-1 fa fa-shopping-basket"></i> Pesan</button>
          </div>
          </form>
        </main>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
@endsection