@extends('back.layout.dashboard1-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')

<!-- CSS Produk -->
<link rel="stylesheet" href="assetss/css/demos/demo-4.css">

<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="row pb-10">
					
					<div class="col-xl-12 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3" style="box-shadow: 4px 4px 25px -2px rgba(1, 1, 1, 1);">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"></div>
									
									<div class="font-14 text-secondary weight-500" id="subtotal_">Total Harga : Rp. </div>
									
								</div>
                                
								<div class="widget-icon">
                                    <a href="dipilih">
									<div class="icon" data-color="white" >
										<i class="bi bi-arrow-bar-right" aria-hidden="true"></i>
									</div>
                                </a>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- TABLE DAFTAR PRODUK --}}

				<div class="container"> <br> 
					<h1 class="title text-center mb-1" >Product</h1> <br>
					<div class="cat-blocks-container">
						<center> 
							@if (Session::get('errors'))
							<p style="color: green ">{{Session::get('errors')}}</p>
							@endif</center>
						<div class="row" >
							@foreach ($produk as $value)
							<div class="col-1 col-sm-4 col-lg-100 ">
								{{-- mengambil route dari produk.show dan mengambil data / value by id --}}
								<div class="cat-block">
									<figure>
										<span>
											<img src="{{asset('fotoProduk/'.$value->img)}}" alt="" >
										</span> 
									</figure>
	
									<div class="font-14 text-secondary weight-500">
										JuanStore <br> Rp {{$value->harga}} ({{$value->stock}})
									</div>
									<b> <p>{{$value->nama}}</p></b>
                                  {{-- Button plus minus--}}
                                    <div style=" display: ; flex-direction: column; align-items: 
                                            center;  ">
																	{{-- decrement untuk mengurangi --}}																				
                                    <button type="button" wire:click="decrementQuantity({{$value->id}})" wire:loading.attr="disabled"
										 class="font-14 text-secondary weight-500 btn btn1" style=" background: none; border: none;" >
                                        -&nbsp;&nbsp;
                                    </button>
                                    <span  class="font-14 text-secondary  input-quantity" style="background: none; border: none; " >{{$value->quantity}}</span>
                                    <button class="font-14 text-secondary weight-500 btn btn1" style="background: none; border: none;"  
									                             {{-- increment untuk menambah --}}
											type="button" wire:click="incrementQuantity({{$value->id}})" wire:loading.attr="disabled">
                                        +
                                    </button>
                                </div>
							</div>
							</div>
                            <div>
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

{{-- INI BUAT BUTTON PLUS MINUSNYA --}}
{{-- <<div style=" display: flex; flex-direction: column; align-items: 
                                            center;  ">

<button style=" background: none; border: none;" onclick="kurangiProduk({{$value->id}})"> <b>-</b> </button>
<span id="jumlah_produk_{{$value->id}}"><b>0</b></span>
<button style="background: none; border: none;" onclick="tambahProduk({{$value->id}})"><b>+</b></button>
    </div> --}}