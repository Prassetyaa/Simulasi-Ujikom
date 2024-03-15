@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Detail Produk/Penjualan')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<header>
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
      </div>
    </div>
  </div>
  <div class="bg-secondary">
    <div class="container py-4">
    </div>
  </div>
</header>

<!-- content -->
<section class="py-5 ">
  <div class="container">
    <div class="row gx-50">
      <aside class="col-lg-6">
        <div class=" mb-30 d-flex justify-content-center">
            <img src="{{asset('fotoProduk/'.$produk->img)}}" alt="" >
          </a>
        </div>
      
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
            {{$produk->nama}}
          </h4>
          <div class="d-flex flex-row my-3">
            <span class="text-muted"> <b><i class="bi bi-bag"> </i></b>({{$produk->stock}})</span>
            <span class="text-success ms-2"> <b>stock</b></span>
          </div>

          <div class="mb-3">
            <span class="h5">Rp.{{$produk->harga}}</span>
            <span class="text-muted">/ per box</span>
          </div>

          <p>
            {{$produk->deskripsi}}
          </p>
          <hr />

          <div class="row mb-4">
           {{-- jumlah Produk --}}
            <div class="col-md-4 col-6 mb-3">
              <label class="mb-2 d-block">Quantity</label>
              <div class="input-group mb-3" style="width: 170px;">
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                  <i class="bi bi-plus"></i>
                </button>
                <input type="text" class="form-control text-center border border-secondary px-3" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                  <i class="bi bi-dash"></i>
                </button>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 bi bi-currency-dollar"></i> Jumlahkan  </a>
        </div>
      </main>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
@endsection


