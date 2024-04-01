<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="/back/vendors/images/zhapavicon.png"/>
	    <link rel="icon" type="image/png" sizes="32x32" href="/back/vendors/images/zhapavicon.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="/back/vendors/images/zhapavicon.png"/>
    <title>Struk Pembayaran</title>
    {{-- LINK CSS DAN FONT --}}
    <link rel="stylesheet" href="{{ asset('assets/css/struk.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="receipt">
        <div class="receipt-header">
            <img src="/back/vendors/images/zhaprofile.png" alt="Logo" class="logo">
            <h2>JuanStore</h2>
            <p class="contact-info">62+895322032131 | @ Prassetyaa_ | IDN</p>
        </div>
        <hr>
        <div class="receipt-info">
            <div class="customer-info">
                <p><b> Nama : </b>{{$pelanggan->nama}}</p>
                <p><b> No.Hp : </b>{{$pelanggan->telepon}}</p>
                <p><b> Alamat : </b>{{$pelanggan->alamat}}</p>
            </div>
            <div class="invoice-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chicken Swing</td>
                            <td>Rp 20,000</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-right">Total:</td>
                            <td>Rp20,000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
       
        <div class="receipt-footer">
            <button class="export-btn"><b>Export</b></button>
            <p>Thanks for shopping!</p>
        </div>
        <a href="/pelanggan-list"><button class="export-btn" style="margin-left: 525px; background-color: #807b7b;"><b>></b></button></a>
    </div>
    
</body>
</html>
