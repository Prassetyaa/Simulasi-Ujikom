@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Detail Produk/Penjualan')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assetss/css/demos/show.css">
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
          </div><b>Deskripsi :</b> <br>
  <br>
          <p>
            {{$produk->deskripsi}}
          </p>
          <hr />

          <div class="row mb-4">
           {{-- jumlah Produk --}}
            
          </div>
          <a href="/dashboard" class="btn btn-secondary shadow-0"> <i class="me-1 bi bi-arrow-bar-left"></i> Back</a>    
          <a href="/produk-edit/{{$produk->id}}" class="btn btn-primary shadow-0"> <i class="me-1 bi bi-pencil"></i> Edit</a> 
          <form action="{{ route('produk.delete',['id' => $produk->id] )}}" method="POST"  style="display: inline;">
            @csrf
            @method('DELETE') <br> <br>
           <button type="submit" class="btn-delete" style="background: none; border: none;">
                   <i class="icon-copy dw dw-delete-3" style="font-size: 1.5rem; color: red; cursor: pointer;"></i>
            </button>
        </form>

        </div>
      </main>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
@endsection


