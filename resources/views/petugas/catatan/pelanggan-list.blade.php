@extends('back.layout.dashboard1-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Pembelian Pelanggan')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Pelanggan</h2>
</div>



<div class="main-container">
    <center> 
        @if (Session::get('errors'))
        <p style="color: green ">{{Session::get('errors')}}</p>
        @endif</center>
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-20">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <td>No</td>
                        <th class="table-plus">Nama</th>
                     {{-- Jenis EksKul --}}
                        <th>Alamat</th>
                        {{-- Nama Lomba --}}
                        <th>No.telepon</th>
                        <th>Produk</th>
                        <th>Total Harga</th>
                        <th>Date</th>
                        <th >
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">{{$value->nama}}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->telepon}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="table-actions">
                                <a href="/pelanggan-edit/{{$value->id}}" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                    {{-- <form action="{{ route('pelanggan-list.delete',['id' => $value->id] )}}" method="POST"  style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" style="background: none; border: none;">
                                            <i class="icon-copy dw dw-delete-3" style="font-size: 1.2rem; color: red; cursor: pointer;"></i>
                                        </button>
                                    </form> --}}
                            </div>
                        </td>
                    </tr>

                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
