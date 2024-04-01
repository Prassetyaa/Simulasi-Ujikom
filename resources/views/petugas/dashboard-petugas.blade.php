@extends('back.layout.dashboard1-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')

<!-- CSS Produk -->
<link rel="stylesheet" href="assetss/css/demos/demo-4.css">


<div class="main-container ">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="row pb-10">
					
					<div class="col-xl-12 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3" style="box-shadow: 4px 4px 25px -2px rgba(1, 1, 1, 1);">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"></div>
									
									<div class="font-14 text-secondary weight-500" id="totalHarga">Total Harga : Rp. {{$totalHarga}}</div>
									
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
							@foreach ($produk as $key => $value)
							<div class="col-1 col-sm-4 col-lg-100 ">
								<div class="cat-block">
									<figure>
										<span>
											<img src="{{asset('fotoProduk/'.$value->img)}}" alt="" >
										</span> 
									</figure>
	
									<div class="font-14 text-secondary weight-500">
										JuanStore <br> Rp {{number_format($value->harga)}} ({{$value->stock}})
									</div>
									<b> <p>{{$value->nama}}</p></b>

                                  {{-- BUTTON PLUS MINUS--}}
								<div  id="{{$key}}" style="display: ; flex-direction: column; align-items:center;  ">

									<button type="button" class="font-14 text-secondary weight-500 btn btn1 " style="background: none; border: none;"
											onclick="decreaseQuantity({{$key}})">
										-&nbsp;&nbsp;
									</button>
								
									<span id="quantity{{$key}}" name="quantity{{$key}}" class="font-14 text-secondary" style="background: none; border: none;">{{$value->quantity}}</span>
								
									<button class="font-14 text-secondary weight-500 btn btn1" style="background: none; border: none;"
											onclick="increaseQuantity({{$key}})" type="button">
										+
									</button>
									</div>
							 	</div>
							</div>
                          <div>
                            </div>
							@endforeach


							{{-- SCRIPT UNTUK MEMBUAT TOMBOL BERFUNGSI SECARA REAL TIME--}}

							<script>
								// Fungsi untuk memperbarui total harga saat kuantitas diubah
								function updateTotalPrice() {
									var totalHargaElement = document.getElementById('totalHarga');
									var currentTotalHarga = parseInt(totalHargaElement.innerText.split(" ")[3].replace(/\D/g,'')); // Mengambil nilai angka dari teks
							
									// Lakukan iterasi untuk mendapatkan jumlah produk dan harga setiap produk
									var totalHarga = 0;
									@foreach ($produk as $key => $value)
										var quantity = parseInt(document.getElementById('quantity{{$key}}').innerText);
										var hargaProduk = parseInt("{{$value->harga}}");
										totalHarga += quantity * hargaProduk;
									@endforeach
							
									totalHargaElement.innerText = "Total Harga : Rp. " + totalHarga.toLocaleString(); // Menggunakan toLocaleString() untuk format uang
								}
								//FUNFSI TOMBOL MINUS
								function decreaseQuantity(key) {
									var quantity = document.getElementById('quantity' + key);
									var currentQuantity = parseInt(quantity.innerText);
									if (currentQuantity > 0) {
										quantity.innerText = currentQuantity - 1;
										updateTotalPrice(); // Panggil fungsi untuk memperbarui total harga saat kuantitas dikurangi
									}
								}
							//FUNGSI TOMBOL PLUS
								function increaseQuantity(key) {
									var quantity = document.getElementById('quantity' + key);
									var currentQuantity = parseInt(quantity.innerText);
									quantity.innerText = currentQuantity + 1;
									// Mendapatkan harga produk dari data yang ada
									var hargaProduk = parseInt("{{$produk[$key]->harga}}");
									// Memperbarui total harga dengan harga produk baru
									var totalHargaElement = document.getElementById('totalHarga');
									var currentTotalHarga = parseInt(totalHargaElement.innerText.split(" ")[3].replace(/\D/g,'')); // Mengambil nilai angka dari teks
									var newTotalHarga = currentTotalHarga + hargaProduk;
									totalHargaElement.innerText = "Total Harga : Rp. " + newTotalHarga.toLocaleString(); // Menggunakan toLocaleString() untuk format uang
								   updateTotalPrice();
								}
							</script>
						</div>
					</div>
					
				</div>

				

			</div>
		</div>
	
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
@endsection