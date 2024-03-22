@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')

<!-- CSS Produk -->
<link rel="stylesheet" href="assetss/css/demos/demo-4.css">


<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="row pb-10">
					<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3" style="border-radius:30px; box-shadow: 4px 4px 25px -2px rgba(1, 1, 1, 1);">
							<div class="d-flex flex-wrap">
								<div class="widget-data"> <center> 
									<div class="weight-700 font-24 text-dark">{{ $totalPelanggan }}</div>
									<center> 
									<div class="font-14 text-secondary weight-500">
										Pembelian
									</div>
									</center>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="white">
										<i class="bi bi bi-basket"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3" style="border-radius:30px; box-shadow: 4px 4px 25px -2px rgba(1, 1, 1, 1);">
							<div class="d-flex flex-wrap">
								<div class="widget-data"> <center>  
									<div class="weight-700 font-24 text-dark">{{$totalPengguna}}</div>
							<center><div class="font-14 text-secondary weight-500">
									 Pengguna / User
									</div>
							</center>		
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="">
										<i
											class="bi bi-person"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3" style="border-radius:30px; box-shadow: 4px 4px 25px -2px rgba(1, 1, 1, 1);">
							<div class="d-flex flex-wrap">
								<div class="widget-data"> <center>
									<div class="weight-700 font-24 text-dark">{{$totalProduk}}</div>
							<center><div class="font-14 text-secondary weight-500">Total Produk</div>
								</div>
						    </center>
								<div class="widget-icon">
									<div class="icon" data-color="white">
										<i class="bi bi-box" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- TABLE DAFTAR PRODUK BUKU --}}

				<div class="container"> <br> 
					<h1 class="title text-center mb-1" >Product</h1> <br>
					<div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
						<button class="btn btn-primary float-right" type="button" onclick="window.location.href='produk-create'">
							<i class="bi bi-plus-lg">Product</i> 
						</button>
						<br>
					</div> <br> <br>
					
					<div class="cat-blocks-container">
						<center> 
							@if (Session::get('errors'))
							<p style="color: green ">{{Session::get('errors')}}</p>
							@endif</center>
						<div class="row" >
							@foreach ($produk as $value)
							<div class="col-1 col-sm-4 col-lg-100 ">
								{{-- mengambil route dari produk.show dan mengambil data / value by id --}}
								<a href={{ route('produk.show', ['id' => $value->id]) }} class="cat-block">
									<figure>
										<span>
											<img src="{{asset('fotoProduk/'.$value->img)}}" alt="" >
										</span> 
									</figure>
	
									<div class="font-14 text-secondary weight-500">
										JuanStore <br> Rp {{$value->harga}} ({{$value->stock}})
									</div>
									<b> <p>{{$value->nama}}</p></b>
								</a>
							</div>
							@endforeach
						</div>
					</div>
					
				</div>

				

			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
@endsection